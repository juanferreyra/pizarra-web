<?php

include_once 'laboratorio.class.php';


class Internaciones{

    var $tet; //tubo endotraqueal
    var $cvc; //cateter venoso caasdasd
    var $ca;
    var $procedencia;
    var $fechaInternacion;
    //estas deberian estar en internacion?
    var $laboratorio;
    var $examenComplementario;
    var $cultivos;
    var $inotropicoDulucionDosis;
    var $atbDosisDia;
    var $aportes;
    var $sedacion;
    var $otros;
    var $comentario;
    //donde van los setting arm eab iono y hora?
    
    function Internaciones()
    {
        $this->laboratorio = new Laboratorio();
    }
    
    //Set
    function setTet($value)
    {
        $this->tet = $value;
    }
    
    function setCvc($value)
    {
        $this->cvc = $value;
    }
    
    function setCa($value)
    {
        $this->ca = $value;
    }
    
    function setProcedencia($value)
    {
        $this->procedencia = $value;
    }
    
    function setFechaInternacion($value)
    {
        $this->fechaInternacion = $value;
    }

    function addItemLaboratorio ($descripcion, $indice, $valor)
    {
        $this->laboratorio->agregarItem($descripcion, $indice, $valor);
    }
    
    //Get
    function getTet()
    {
        return $this->tet;
    }
    
    function getCvc()
    {
        return $this->cvc;
    }
    
    function getCa()
    {
        return $this->ca;
    }
    
    function getProcedencia()
    {
        return $this->procedencia;
    }
    
    function getFechaInternacion()
    {
        return $this->fechaInternacion;
    }
    

}