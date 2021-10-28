<?php

namespace App\Controllers;

class Controller
{
    protected function validate(array $input, array $rules)
    {
        foreach ($rules as $key => $rule) {
            foreach (explode("|", $rule) as $rulePart) {
                $this->validate_one($input, $rulePart, $key);
            }
        }
    }

    private function validate_one(array $input, string $rule, $key)
    {
        if (strpos($rule, ':')) {
            [$class, $param] = explode(":", $rule, 2);
        } else {
            $class = $rule;
            $param = null;
        }
        $class = 'App\\Validators\\' . ucfirst($class);
        $validator = new $class($key, $param);
        $validator->validate($input);
    }

}