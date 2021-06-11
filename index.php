<?php

require 'vendor/autoload.php';
require "post.php";

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

$request = Request::createFromGlobals();

$msj = $request->get("name");

$response = new JsonResponse([
    "mensaje" => $msj
]);

$response->send();

