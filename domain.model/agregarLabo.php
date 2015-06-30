<?php
include_once 'laboratorio.class.php';

session_start();

$lab = new Laboratorio();

if (isset($_SESSION['labo'])) 
{
    $lab = unserialize($_SESSION['labo']);
} 

$lab->agregarItem($_POST['nombreLabo'],$_POST['valorLabo'],$_POST['indiceLabo']);

$_SESSION['labo'] = serialize($lab);

$respuesta = new stdClass();

$respuesta->result = true;
$respuesta->message = "Item Agregado Correctamente";

echo json_encode($respuesta);