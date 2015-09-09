<?php
include_once 'dataBaseConnector.php';
include_once 'conectionData.php';
include_once '../domain.model/internacion.class.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of internacion.dao
 *
 * @author jferreyra
 */
class internacionDao
{

	var $var;

	function InternacionDao()
	{
		$this->db = new dataBaseConnector(HOSTLocal,0,DBUti,USRDBAdmin,PASSDBAdmin);
	}

	function crearInternacion()
	{
		$query="INSERT INTO 
					`internacion`(
						`fecha_creacion`,
						`habilitado`,
						`idusuario`)
				VALUES
					(
						now(), 
						'1', 
						'1'
					);";
		try
        {
            $this->db->conectar();
            $this->db->ejecutarAccion($query);
        }
        catch (Exception $e)
        {
            $this->db->desconectar();
            $e->getMessage();
            throw new Exception("Error al conectar con la base de datos y crear una internacion", 17052013);
        }

        return $this->db->ultimoIdInsertado();
	}

	function agregarPaciente($data)
	{
		$query="UPDATE
					`internacion`
				SET
					`idpaciente`='".$data['idpaciente']."'
				WHERE 
					`id`='".$data['idinternacion']."';";

		try
        {
            $this->db->conectar();
            $this->db->ejecutarAccion($query);
        }
        catch (Exception $e)
        {
            $this->db->desconectar();
            throw new Exception( $e->getMessage(), 17052013);
        }

        $this->db->desconectar();
	}

	/*
     * Ingreso los valores del paciente en la internacion
     * @return boolean
     */
    function insertarValorPaciente($data)
    {
        //por ahora lo agrego en paciente, hay que ver donde lo vamos a guardar
        $query="INSERT INTO 
         			`internacion_valores_paciente`(
         				`idinternacion`,
         				`tipo_valor_paciente`,
         				`valor`,
         				`fecha_ingreso`)
				VALUES(
					'".$data['idinternacion']."',
					'".$data['tipo_valor_paciente']."',
					'".$data['valor']."',,
					now());";
        try
        {
            $this->db->conectar();
            $this->db->ejecutarAccion($query);
        }
        catch (Exception $e)
        {
            $this->db->desconectar();
            throw new Exception( $e->getMessage(), 17052013);
        }

        $this->db->desconectar();
    }


    
}
/*
$i =  new InternacionDao();
$e = $i->crearInternacion();
var_dump($e);
*/