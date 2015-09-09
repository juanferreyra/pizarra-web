<?php
include_once 'paciente.class.php';
include_once 'laboratorio.class.php';

class Internacion
{
    var $paciente;
    var $procedencia;
    var $fechaInternacion;

    var $ventilaciones;
    var $tet; //tubo endotraqueal
    var $cvc; //cateter venoso caasdasd
    var $ca;
    var $sv;
    var $drenajes;

    var $laboratorios;

    var $cultivos;
    var $idd;//isotropico degrucion dosis
    var $add;//ATB Dosis dia
    var $aportes;
    var $sedaciones;
    var $comentarios;
    //donde van los setting arm eab iono y hora?
    
    function Internacion()
    {
        $this->paciente = new Paciente();
    }
}