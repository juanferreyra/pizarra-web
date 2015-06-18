<?php
include_once 'internacion.class.php';

class Paciente
{
        var $tipodoc;
        var $nrodoc;
        var $nombre;
        var $edad;
        var $peso;
    //hay que agregarle la clase internaciones
        var $internaciones;

	function Paciente() 
	{
		
	}

	//Set
	function setTipodoc($value)
	{
		$this->tipodoc = $value;
	}

	function setNrodoc($value)
	{
		$this->nrodoc = $value;
	}
    
    function setNombre($value)
	{
		$this->nombre = $value;
	}
    
    function setEdad($value)
	{
		$this->edad = $value;
	}
    
    function setPeso($value)
	{
		$this->peso = $value;
	}
    
    function setInternaciones(Internaciones $value)
    {
        $this->internaciones = $value;
    }

	//Get
	function getTipodoc()
	{
		return $this->tipodoc;
	}

	function getNrodoc()
	{
		return $this->nrodoc;
	}
    
    function getNombre()
	{
		return $this->nombre;
	}
    
    function getEdad()
	{
		return $this->edad;
	}
    
    function getPeso()
	{
		return $this->peso;
	}
    function getInternaciones()
	{
		return $this->internaciones;
	}
}
?>