<?php


namespace App\Validators;


abstract class Validator
{
    protected $param;
    protected $key;
    public function __construct($key, $param) {
        $this->param = $param;
        $this->key = $key;
    }
    public function validate(array $input) {
        if (array_key_exists($this->key, $input) === false) {
            return;
        }
        $this->intervalValidate($input);
    }

    protected abstract function intervalValidate(array $input);
}