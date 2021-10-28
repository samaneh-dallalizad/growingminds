<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use App\Controllers\ClientController;
use App\Exceptions\AddressNotFoundException;

try {
    header('Content-Type: application/json; charset=utf-8');
    $parts = explode('/', $_SERVER['REQUEST_URI']);
    if (count($parts) != 5 || substr($_SERVER['REQUEST_URI'], 0, 16) != '/rest/v2/client/') {
        throw new AddressNotFoundException("Can not find requested URL.");
    }
    $name = end($parts);
    echo (new ClientController())->getByName($name);
} catch (Exception $ex) {
    http_response_code($ex->getCode() ?? 500);
    echo json_encode(["message" => $ex->getMessage()]);
}

