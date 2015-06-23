<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of itemLaboratorio
 *
 * @author jferreyra
 */
class itemLaboratorio
{
    var $nombre;
    var $valor;
    
    public function ItemLaboratorio($descripcion, $valor)
    {
        $this->nombre = $descripcion;
        $this->valor = $valor;
    }
}
