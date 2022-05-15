<?php

namespace App\Service;

use App\Http\Requests\OrderRequest;
use App\Models\Client;
use App\Models\Order;
use App\Models\Status;
use Illuminate\Http\Request;

class OrderService
{
    public function createOrder(OrderRequest $request)
    {
        $data = $request->all();
        $client = Client::create([
            'email' => $data['email'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname']
        ]);

        $order = Order::create([
            'client_id' => $client->id,
            'merch_id' => $data['merch_id'],
            'count-item' => $data['countItem'],
            'post-index' => $data['postIndex'],
            'address' => $data['address']
        ]);

        $order->statuses()->attach([
            'status_id' => Status::DEFAULT_STATUS_ID,
        ]);

        return response($order->id, 201);
    }

    public function updateStatus(Request $request)
    {
        $data = $request->all();

        $order = Order::find($data['orderId']);

        $order->statuses()->update([
            'status_id' => Status::where('status_value', $data['status'])->first()->id,
        ]);

        return redirect()->route('admin');
    }
}
