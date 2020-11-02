<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace StackNamespace;

interface IElemento{
    public function ottenereElemento();
    public function modificaElemento($elemento): void;
    public function ottenereProssimoElemento();
    public function modificaProssimoElemento(Elemento $prossimo): void;
}

class Elemento implements IElemento{
    
    private $elemento;    
     
    private $prossimo;
    
    /**
     * @template T
     */
    public function __construct($elemento) {
        $this->elemento = $elemento;
        $this->prossimo = null; 
    }
    
    /**
     * @template T
     * @param \StackNamespace\T $elemento
     * @return void
     */
    public function modificaElemento($elemento): void {
        $this->elemento = $elemento;
    }

    /**
     * @template T
     * @param \StackNamespace\T $prossimo
     * @return void
     */
    public function modificaProssimoElemento(Elemento $prossimo): void {
        $this->prossimo = $prossimo;
    }

    /**
     * @template T
     * @return \StackNamespace\T
     */
    public function ottenereElemento() {
        return $this->elemento;
    }

    /**
     * @template T
     * @return \StackNamespace\T
     */
    public function ottenereProssimoElemento() {
        return $this->prossimo;
    }

}