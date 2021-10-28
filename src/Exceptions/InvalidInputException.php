<?php


namespace App\Exceptions;


use Exception;

class InvalidInputException extends Exception
{
    protected $code = 400;
}