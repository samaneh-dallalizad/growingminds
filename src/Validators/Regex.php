<?php


namespace App\Validators;


use App\Exceptions\InvalidInputException;

class Regex extends Validator
{
    /**
     * @param array $input
     * @throws InvalidInputException
     */
    protected function intervalValidate(array $input)
    {
        if (preg_match($this->param, $input[$this->key]) == false) {
            throw new InvalidInputException($this->key." does not matching regex: ". $this->param);
        }
    }
}