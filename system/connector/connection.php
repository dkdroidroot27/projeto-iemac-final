<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

date_default_timezone_set("America/Manaus");
setlocale(LC_ALL, "pt-BR");

$server = 'localhost';
$user = 'root';
$password = '1234';
$database = 'projetoiemac';

$connection = new mysqli($server,$user,$password,$database);
$connection->query("SET NAMES UTF-8");