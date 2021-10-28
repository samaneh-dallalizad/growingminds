<?php


namespace App\Validators;


use App\Exceptions\InvalidInputException;

class MinLen extends Validator
{
    /**
     * @param array $input
     * @throws InvalidInputException
     */
    protected function intervalValidate(array $input)
    {
        if (strlen($input[$this->key]) < (int)$this->param) {
            throw new InvalidInputException($this->key." must be at least ". $this->param ." characters.");
        }
    }
}