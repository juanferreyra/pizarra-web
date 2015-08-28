<?php

include_once 'dataBaseConnector.php';
include_once 'conectionData.php';
include_once '../domain.model/paciente.class.php';
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
    
    public function insertarNuevoPaciente($data)
    {
        $query = "INSERT INTO
                    paciente
                        (`tipodoc`,
                        `nrodoc`,
                        `nombre`,
                        `fechanac`,
                        `nrohisclin`)
                    VALUES
                        ('".$data['tipoDoc']."',
                        '".$data['nroDoc']."',
                        '".$data['nombre']."',
                        '".$data['fechaNac']."',
                        '".$data['nroHisclin']."');";
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
    
    
    
    
}
