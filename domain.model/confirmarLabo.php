<?php
include_once 'laboratorioDataBaseLinker.php';
include_once 'laboratorio.class.php';


session_start();

$lab = new Laboratorio();
$db = new LaboratorioDataBaseLinker();

if (isset($_SESSION['labo'])) 
{
    $lab = unserialize($_SESSION['labo']);
} 

$items = $lab->getItems();

//aca llama al dbLinker
$respuesta = $db->agregarLaboratorio($items);

echo "Se agrego el laboratorio con los items: <br/ >";

for($i=0; $i<count($items);$i++)
{
    echo $items[$i]->getDescripcion()."<br/ >";
}