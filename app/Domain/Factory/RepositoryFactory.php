<?php

namespace App\Domain\Factory;

use App\Domain\Repository\ArrayBidRepository;

class RepositoryFactory
{
    public static function arrayBidRepository () {
        return new ArrayBidRepository();
    }
}