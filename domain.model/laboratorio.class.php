<?php
include_once 'itemLaboratorio.class.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of laboratorio
 *
 * @author jferreyra
 */
class laboratorio 
{
    var $items;
    
    public function laboratorio()
    {
        $this->items = array();
    }
    
    public function agregarItem($descripcion, $valor)
    {
        $this->items[] = new ItemLaboratorio($descripcion, $valor);
    }
    
    public function getItems()
    {
        return $this->items;
    }
}
