<?php
include_once '../../../../direcciones.php';
include_once dao.'paciente.dao.php';

$db = new PacienteDao();

$arr= array();

if($_REQUEST["_search"] == "true")
{
    $arr = json_decode($_REQUEST['filters'], true);
}

$ret = $db->getPacientesJson($_REQUEST['page'], $_REQUEST['rows'], $arr, $_REQUEST['sidx'], $_REQUEST['sord']);


echo $ret;