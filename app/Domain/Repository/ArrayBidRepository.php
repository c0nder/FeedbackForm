<?php

namespace App\Domain\Repository;

use App\Domain\Entity\Bid;

class ArrayBidRepository implements IBidRepository
{
    private $collection = [];

    public function put(Bid $bid)
    {
        array_push($this->collection, $bid->toArray());
    }

    public function getAll()
    {
        return $this->collection;
    }

    public function getTotal()
    {
        return count($this->collection);
    }
}