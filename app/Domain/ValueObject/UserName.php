<?php

namespace App\Domain\ValueObject;

use Exception;

class UserName
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
        $this->validate();
    }

    public function validate() {
        if (empty($this->name) || is_null($this->name)) {
            throw new Exception('The name must not be empty');
        }
    }

    public function getValue() {
        return $this->name;
    }

    public function __toString()
    {
        return $this->getValue();
    }
}