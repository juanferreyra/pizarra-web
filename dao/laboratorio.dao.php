<?php

include_once 'dataBaseConnector.php';
include_once '../domain.model/laboratorio.class.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pacienteDao
 *
 * @author juanm.verrelli
 */
class laboratorioDao
{
    var $db;
    
    function LaboratorioDao()
    {
        $this->db = new dataBaseConnector(HOSTLocal,0,DBUti,USRDBAdmin,PASSDBAdmin);
    }

    function insertarLaboratorio($idlaboratorio_item, $data)
    {
        for($i = 1; $i <= count($data); $i++ )
        {

        $query = "INSERT INTO
                    internacion_laboratorio_valores
                        (`idlaboratorio_item`,
                        `idinternacion_laboratorio`,
                        `valor`)
                    VALUES
                        (".$idlaboratorio_item.",
                        '".$data[$i]['idinternacion_laboratorio'].",
                        '".$data[$i]['valor']."');";

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

        }  

        $this->db->desconectar();
        return true;
    }

    function insertarInternacionLaboratorio($data)
    {
        $query = "INSERT INTO
                    internacion_laboratorio
                        (   ´idinternacion´,
                            ´idlaboratorio´,
                            ´fecha_creacion´,
                            ´habilitado´)
                    VALUES
                    (".$data['idinternacion'].",
                        ".$data['idlaboratorio'].",
                            now(),
                            1);";
    
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

        }  

        $this->db->desconectar();
        return true;
        
    }

    function getItemLaboratorio($data)
    {
        $query = "SELECT * FROM laboratorio_item WHERE detalle = ".$data['laboratorio'].";";

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
    
        $this->db->desconectar();

        return $result;
    }
}