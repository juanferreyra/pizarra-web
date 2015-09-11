<?php
 include_once '../dao/paciente.dao.php';
 //necesito saber el criterio con el cual recibo el numero de historia clinica
//para llenar todas las tablas

$pacDb = new PacienteDao ();

if($pacDb->insertarNuevoPaciente($_POST, 1))
{
    echo "Datos cargados correctamente";
}
else
{
    echo "Hubo un error al cargar los datos";
}

