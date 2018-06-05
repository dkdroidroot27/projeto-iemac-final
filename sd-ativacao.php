<?php

include_once './system/controller/PessoaController.php';

session_start();

$pessoa = new PessoaController();
$pessoa->filterActivate($pessoa);