<?php


namespace App\Exceptions;


use Exception;

class AddressNotFoundException extends Exception
{
    protected $code = 404;
}