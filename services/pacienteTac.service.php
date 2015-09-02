<?php
 include_once '../dao/paciente.dao.php';
 //necesito saber el criterio con el cual recibo el numero de historia clinica
//para llenar todas las tablas

$pacDb = new PacienteDao ();

if($pacDb->insertarNuevoTac($_POST))
{
    echo "Datos cargados correctamente";
}
else
{
    echo "Hubo un error al cargar los datos";
}