<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\WebControllers\Controller;
use App\Http\Resources\MerchResource;
use App\Models\Merch;

class MerchController extends Controller
{
    public function getItem($id)
    {
        return MerchResource::make(Merch::find($id));
    }

    public function getItems()
    {
        return MerchResource::collection(Merch::all());
    }

}
