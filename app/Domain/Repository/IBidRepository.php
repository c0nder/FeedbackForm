<?php

namespace app\Domain\Repository;

use App\Domain\Entity\Bid;

interface IBidRepository
{
    public function put(Bid $bid);
    public function getAll();
    public function getTotal();
}