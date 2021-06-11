<?php

require 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;



$request = Request::createFromGlobals();

$msj = "Abominable Putridity";

$number = 1943712;

$lista = array(
    "nombre" => "Willian",
    "apellido" => "Walace"
);

$request->query->all();

$response = new JsonResponse([
    "numero" => $number,
    "mensaje" => $msj,
    "lista" => $lista
]);

$response->send();