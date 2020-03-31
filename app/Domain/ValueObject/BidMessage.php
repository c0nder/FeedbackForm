<?php

namespace App\Domain\ValueObject;

use Exception;

class BidMessage
{
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
        $this->validate();
    }

    public function validate() {
        if (empty($this->message) && is_null($this->message)) {
            throw new Exception('The message must not be empty');
        }
    }

    public function getValue() {
        return $this->message;
    }

    public function __toString()
    {
        return $this->getValue();
    }
}