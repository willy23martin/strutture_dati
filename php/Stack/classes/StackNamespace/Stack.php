<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace StackNamespace;

use StackNamespace\Elemento;

interface IStack {

    public function is_empty(): bool;

    public function top(): Elemento;

    public function pop(): Elemento;

    public function push($elemento);

    public function ottenereUltimo();

    public function modificaUltimo($ultimo): void;
}

class Stack implements IStack {

    private $ultimoElemento;
    private $numeroDiElementi;

    public function __construct() {
        $this->ultimoElemento = null;
        $this->numeroDiElementi = 0;
    }

    /**
     * true - se la pila e vuota.
     * false - se la pila ha almeno uno elemento.
     * @return bool
     */
    public function is_empty(): bool {
        return $this->numeroDiElementi == 0 || $this->ultimoElemento == null;
    }

    /**
     * Ritorna lo ultimo elemento della pila.
     * @return \StackNamespace\T
     */
    public function pop(): Elemento {
        $ultimo = $this->ultimoElemento;
        if ($this->is_empty()) {
            return null;
        } else {
            $prossimo = $this->ultimoElemento->ottenereProssimoElemento();
            $this->ultimoElemento = $prossimo;
            $this->numeroDiElementi -= 1;
        }
        return $ultimo;
    }

    public function push($elemento) {
        if ($this->is_empty()) {
            $this->ultimoElemento = new Elemento($elemento);
        } else {
            $nuovoElemento = new Elemento($elemento);
            $nuovoElemento->modificaProssimoElemento($this->ultimoElemento);
            $this->ultimoElemento = null;
            $this->ultimoElemento = $nuovoElemento;
        }
        $this->numeroDiElementi += 1;
    }

    public function top(): Elemento {
        if ($this->is_empty()) {
            return null;
        } else {
            return $this->ultimoElemento;
        }
    }

    public function modificaUltimo($ultimo): void {
        $this->ultimoElemento = $ultimo;
    }

    public function ottenereUltimo() {
        if ($this->is_empty()) {
            return null;
        } else {
            return $this->ultimoElemento;
        }
    }

}
