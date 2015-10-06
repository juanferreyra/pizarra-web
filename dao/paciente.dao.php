<?php
include_once dirname(__DIR__).'/direcciones.php';
include_once dao.'dataBaseConnector.php';
include_once dao.'conectionData.php';
include_once domain_model.'paciente.class.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pacienteDao
 *
 * @author jferreyra
 */
class pacienteDao
{
    var $db;
    
    function PacienteDao()
    {
        $this->db = new dataBaseConnector(HOSTLocal,0,DBUti,USRDBAdmin,PASSDBAdmin);
    }
    
    public function insertarNuevoPaciente($data, $hisclin)
    {
        $query = "INSERT INTO paciente (`tipodoc`,`nrodoc`,`nombre`,`fechanac`,`nrohisclin`,`direccion`,`localidad`,`provincia`,`sexo`,`telefono`)
                    VALUES (".$data['tipodoc'].",".$data['nrodoc'].",'".$data['nombre']."','".$data['fechanac']."',".$hisclin.",'".$data['direccion']."','".$data['localidad']."','".$data['provincia']."','".$data['sexo']."','".$data['telefono']."');";
        try
        {
            $this->db->conectar();
            $this->db->ejecutarAccion($query);

        }
        catch (Exception $e)
        {
            $this->db->desconectar();
            $e->getMessage();
            throw new Exception("Error al conectar con la base de datos", 17052013);
        }

        $this->db->desconectar();
        
        return true;
    }
    
    /*
     * retorna un objeto paciente con todos los datos completos
     * @return Paciente
     */
    public function getPaciente($tipoDoc, $nroDoc)
    {
        $query="SELECT
                    tipodoc, 
                    nrodoc, 
                    nombre, 
                    fechanac, 
                    nrohisclin 
                FROM
                    paciente
                WHERE
                    tipodoc=$tipoDoc AND nrodoc=$nroDoc;";
        try
        {
            $this->db->conectar();
            $this->db->ejecutarQuery($query);
        }
        catch (Exception $e)
        {
            $this->db->desconectar();
            $e->getMessage();
            throw new Exception("Error al conectar con la base de datos y consultar el paciente", 17052013);
        }
        
        $result = $this->db->fetchRow($query);
        $p = New Paciente();
        $p->setTipodoc($result['tipodoc']);
        $p->setNrodoc($result['nrodoc']);
        $p->setNombre($resutl['nombre']);
        $p->setFechaNac($result['fechanac']);
        $p->setNroHisClin($result['nrohisclin']);
        
        $this->db->desconectar();

        return $p;
    }

     public function getPacientesJson($page, $rows, $filters, $sidx, $sord)
    {
        $response = new stdClass();
        $this->db->conectar();
        $pacientes = $this->getPacientes($page, $rows, $filters, $sidx, $sord);
        $response->page = $page;
        $response->total = ceil($this->getCantidadPacientes($filters) / $rows);
        $response->records = $this->getCantidadPacientes($filters);
        $this->db->desconectar();

        for ($i=0; $i < count($pacientes); $i++)
        {
            $paciente = $pacientes[$i];
            //ids de fila
            $response->rows[$i]['ids'] = $i;
            $row = array();
            $row[] = $paciente['id'];
            $row[] = $paciente['tipoDoc'];
            $row[] = $paciente['nrodoc'];
            $row[] = $paciente['nombre'];
            $row[] = '';
            //agrego datos a la fila con clave cell
            $response->rows[$i]['cell'] = $row;
        }

        $response->userdata['id'] = 'id';
        $response->userdata['tipoDoc'] = 'tipoDoc';
        $response->userdata['nrodoc'] = 'nrodoc';
        $response->userdata['nombre'] = 'nombre';
        $response->userdata['myac'] = '';

        return json_encode($response);
    }


    public function getPacientes($page, $rows, $filters, $sidx, $sord)
    {
        $where = " ";

        if(count($filters)>0)
        {
            $where.=" WHERE ";

            for($i=0; $i < count($filters['rules']); $i++ )
            {
                $where.=$filters['rules'][$i]['field']." REGEXP '".$filters['rules'][$i]['data']."' ";
                if($i!=count($filters['rules'])-1)
                {
                    $where.=$filters['groupOp']." ";
                }
            }
        }

        $sort = "ORDER BY ".$sidx." ".$sord;

        $offset = ($page - 1) * $rows;

        $query="SELECT
                    id as id,
                    tipodoc as tipoDoc,
                    nrodoc AS nrodoc,
                    nombre AS nombre
                FROM 
                    paciente 
                    ".$where." ".$sort." ";

        $query = $query . " LIMIT ".$rows." OFFSET ".$offset.";";

        $this->db->ejecutarQuery($query);

        $ret = array();

        for ($i = 0; $i < $this->db->querySize; $i++)
        {
            $paciente = $this->db->fetchRow($query);
            $ret[] = $paciente;
        }

        return $ret;
    }

    public function getCantidadPacientes($filters)
    {
        $where = " ";

        if(count($filters)>0)
        {
            $where.=" WHERE ";

            for($i=0; $i < count($filters['rules']); $i++ )
            {
                $where.=$filters['rules'][$i]['field']." REGEXP '".$filters['rules'][$i]['data']."' ";
                if($i!=count($filters['rules'])-1)
                {
                    $where.=$filters['groupOp']." ";
                }
            }
        }

        $query="SELECT
                    count(*) AS cantidad
                FROM 
                    paciente 
                    ".$where.";";
        
        $this->db->ejecutarQuery($query);
        $result = $this->db->fetchRow();
        $cantidad = $result['cantidad'];

        return $cantidad;
    }
}
