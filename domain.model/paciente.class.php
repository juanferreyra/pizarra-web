<?php

class Paciente
{
        var $tipodoc;
        var $nrodoc;
        var $nombre;
        var $fechaNac;
        var $nroHisclin;

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
    
        function setFechaNac($value)
	{
		$this->fechaNac = $value;
	}
    
        function setNroHisClin($value)
	{
		$this->nroHisclin = $value;
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
    
        function getFechaNac()
	{
		return $this->fechaNac;
	}
    
        function getNroHisCLin()
	{
		return $this->nroHisclin;
	}
}
?>