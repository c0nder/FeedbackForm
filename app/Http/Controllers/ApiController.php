<?php

namespace App\Http\Controllers;

use App\Domain\Entity\Bid;
use App\Domain\Factory\RepositoryFactory;
use App\Domain\ValueObject\BidMessage;
use App\Domain\ValueObject\UserName;
use App\Domain\ValueObject\UserPhone;
use Illuminate\Http\Request;
use Exception;

class ApiController extends Controller
{
    public function addBid(Request $request) {
        $response = [
            'status' => 1
        ];

        try {
            $name = new UserName($request->get('name'));
            $phone = new UserPhone($request->get('phone'));
            $message = new BidMessage($request->get('message'));
            $repository = RepositoryFactory::arrayBidRepository();
            $repository->put(new Bid($name, $phone, $message));
        } catch (Exception $exception) {
            $response['status'] = 0;
            $response['message'] = $exception->getMessage();
        }

        return json_encode($response);
    }

    public function getAllBids(Request $request) {
        $repository = RepositoryFactory::arrayBidRepository();
        $response = [
            'total' => $repository->getTotal(),
            'all' => $repository->getAll()
        ];
        return json_encode($response);
    }
}
