<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

#Autoloader definition:
function app_autoloader($class){
    require_once 'classes/'.$class.'.php';
}

spl_autoload_register('app_autoloader');