<?php

require 'vendor/autoload.php';
require "post.php";

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

$request = Request::createFromGlobals();

$nombre = $request->get("nombre");
$edad = $request->get("edad");

$juegos = array(
    "1991" => "Wolfenstein 3D",
    "1993" => "DOOM",
    "1996" => "Quake"
);

$response = new JsonResponse([
    "nombre" => $nombre,
    "edad" => $edad,
    "juegos" => $juegos
]);

$response->send();

