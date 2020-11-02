<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Riferimenti: https://medium.com/@ondrejmirtes/generics-in-php-using-phpdocs-14e7301953

require_once './autoload.php';

use StackNamespace\Elemento;
use StackNamespace\Stack;

echo "È iniziata l'implementazione della Pila." . '<br/>';
$implementazioneStack = new Stack();
var_dump($implementazioneStack);
echo 'La Pila è vuota? ' . $implementazioneStack->is_empty() . '<br/>';
echo "L'ultimo elemento della Pila: " . $implementazioneStack->ottenereUltimo() . '<br/>';
echo '====================' . '<br/>';

$primoElemento = "primo";
echo "Pushing il primo elemento ... " . '<br/>';
$implementazioneStack->push($primoElemento);
$vuota = $implementazioneStack->is_empty() ? "True" : "False";
echo 'È vuota?: ' . $vuota . '<br/>';
$ultimoElementoOttenuto = $implementazioneStack->ottenereUltimo()->ottenereElemento();
echo "L'ultimo elemento della Pila: " . $ultimoElementoOttenuto . '<br/>';
echo '====================' . '<br/>';

$secondoElemento = "secondo";
echo "Pushing il secondo elemento ... " . '<br/>';
$implementazioneStack->push($secondoElemento);
$vuota = $implementazioneStack->is_empty() ? "True" : "False";
echo 'È vuota?: ' . $vuota . '<br/>';
$ultimoElementoOttenuto = $implementazioneStack->ottenereUltimo()->ottenereElemento();
echo "L'ultimo elemento della Pila: " . $ultimoElementoOttenuto . '<br/>';
$prossimoElementoOttenuto = $implementazioneStack->top()->ottenereProssimoElemento()->ottenereElemento();
echo 'Il secondo elemento della Pila è: ' . $prossimoElementoOttenuto . '<br/>';
echo '====================' . '<br/>';

$terzoElemento = "terzo";
echo "Pushing il terzo elemento ... " . '<br/>';
$implementazioneStack->push($terzoElemento);
$vuota = $implementazioneStack->is_empty() ? "True" : "False";
echo 'È vuota?: ' . $vuota . '<br/>';
$ultimoElementoOttenuto = $implementazioneStack->ottenereUltimo()->ottenereElemento();
echo "L'ultimo elemento della Pila: " . $ultimoElementoOttenuto . '<br/>';
$prossimoElementoOttenuto = $implementazioneStack->top()->ottenereProssimoElemento()->ottenereElemento();
echo 'Il secondo elemento della Pila è: ' . $prossimoElementoOttenuto . '<br/>';
$prossimoElementoOttenuto = $implementazioneStack->top()->ottenereProssimoElemento()->ottenereProssimoElemento()->ottenereElemento();
echo 'Il terzo elemento della Pila è: ' . $prossimoElementoOttenuto . '<br/>';
echo '====================' . '<br/>';

echo "Popping l'ultimo elemento ... " . '<br/>';
$elementoOttenuto = $implementazioneStack->pop();
echo "L'ultimo elemento ottenuto: ".$elementoOttenuto->ottenereElemento().'<br/>';
$vuota = $implementazioneStack->is_empty() ? "True" : "False";
echo 'È vuota?: ' . $vuota . '<br/>';
$ultimoElementoOttenuto = $implementazioneStack->ottenereUltimo()->ottenereElemento();
echo "L'ultimo elemento della Pila: " . $ultimoElementoOttenuto . '<br/>';
$prossimoElementoOttenuto = $implementazioneStack->top()->ottenereProssimoElemento()->ottenereElemento();
echo 'Il secondo elemento della Pila è: ' . $prossimoElementoOttenuto . '<br/>';
echo '====================' . '<br/>';

echo "Popping l'ultimo elemento ... " . '<br/>';
$elementoOttenuto = $implementazioneStack->pop();
echo "L'ultimo elemento ottenuto: ".$elementoOttenuto->ottenereElemento().'<br/>';
$vuota = $implementazioneStack->is_empty() ? "True" : "False";
echo 'È vuota?: ' . $vuota . '<br/>';
$ultimoElementoOttenuto = $implementazioneStack->ottenereUltimo()->ottenereElemento();
echo "L'ultimo elemento della Pila: " . $ultimoElementoOttenuto . '<br/>';
echo '====================' . '<br/>';

echo "Popping l'ultimo elemento ... " . '<br/>';
$elementoOttenuto = $implementazioneStack->pop();
echo "L'ultimo elemento ottenuto: ".$elementoOttenuto->ottenereElemento().'<br/>';
$vuota = $implementazioneStack->is_empty() ? "True" : "False";
echo 'È vuota?: ' . $vuota . '<br/>';
$ultimoElementoOttenuto = $implementazioneStack->ottenereUltimo();
echo "L'ultimo elemento della Pila: " . $ultimoElementoOttenuto == null ? "null" : $ultimoElementoOttenuto. '<br/>';
echo '====================' . '<br/>';