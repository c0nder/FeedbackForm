<?php

namespace App\Domain\Entity;

use App\Domain\ValueObject\BidMessage;
use App\Domain\ValueObject\UserName;
use App\Domain\ValueObject\UserPhone;

class Bid
{
    private $name;
    private $phone;
    private $message;

    public function __construct(UserName $name, UserPhone $phone, BidMessage $message)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->message = $message;
    }

    public function toArray() {
        return [
            'name' => $this->name->getValue(),
            'phone' => $this->phone->getValue(),
            'message' => $this->message->getValue()
        ];
    }
}