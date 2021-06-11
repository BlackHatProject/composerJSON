<?php

require 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


$request = Request::createFromGlobals();
$response = new Response();

$msj = "Abominable Putridity";

$number = 1943712;

$lista = array(
    "nombre" => "Willian",
    "apellido" => "Walace"
);

$listaJSON = array(
    $msj,
    $number,
    $lista
);

$json = json_encode($listaJSON);

$response->setContent(json_encode($json));
$response->send();