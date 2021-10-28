<?php


namespace App\Exceptions;


use Exception;

class ClientNotFoundException extends Exception
{
    protected $code = 404;
}