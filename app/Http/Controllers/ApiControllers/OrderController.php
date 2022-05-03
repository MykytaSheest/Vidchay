<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\WebControllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Service\OrderService;

class OrderController extends Controller
{
    protected $orderService;

    public function __construct()
    {
        $this->orderService = new OrderService();
    }

    public function setOrder(OrderRequest $request)
    {
        return $this->orderService->createOrder($request);
    }

}
