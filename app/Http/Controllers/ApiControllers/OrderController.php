<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\WebControllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Client;
use App\Models\Order;

class OrderController extends Controller
{
    public function setOrder(OrderRequest $request)
    {
        $data = $request->all();
        $client = Client::create([
            'email' => $data['email'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname']
        ]);

        Order::create([
            'client_id' => $client->id,
            'merch_id' => $data['merch_id'],
            'count-item' => $data['countItem'],
            'post-index' => $data['postIndex'],
            'address' => $data['address']
        ]);
        return response('Created', 201);
    }

}
