<?php


namespace App\Validators;


use App\Exceptions\InvalidInputException;

class Required extends Validator
{
    /**
     * @param array $input
     * @throws InvalidInputException
     */
    public function validate(array $input)
    {
        if (array_key_exists($this->key, $input) === false) {
            throw new InvalidInputException($this->key." is missing.");
        }
    }

    protected function intervalValidate(array $input) {}
}