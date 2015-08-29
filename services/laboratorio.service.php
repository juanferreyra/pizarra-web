<?php
 include_once '../dao/laboratorio.dao.php';
 //necesito saber el criterio con el cual recibo o se generan el id de internacion y el id de laboratorio
//para llenar todas las tablas

$laboDb = new LaboratorioDao ();

if($laboDb->insertarLaboratorio($_POST, 1))
{
    echo "Datos cargados correctamente";
}
else
{
    echo "Hubo un error al cargar los datos";
}