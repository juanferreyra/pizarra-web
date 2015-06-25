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
    var $descripcion;
    var $valor;
    var $indice;
    
    public function ItemLaboratorio($descripcion, $indice, $valor)
    {
        $this->descripcion = $descripcion;
        $this->valor = $valor;
        $this->indice = $indice;
    }
}
