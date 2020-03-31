<?php

namespace App\Domain\ValueObject;

use Exception;

class UserPhone
{
    private $phone;

    public function __construct($phone)
    {
        $this->phone = $phone;
        $this->validate();
    }

    public function validate() {
        if (!preg_match('/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/', $this->phone)) {
            throw new Exception('Phone must be valid');
        }
    }

    public function getValue() {
        return $this->phone;
    }

    public function __toString()
    {
        return $this->getValue();
    }
}