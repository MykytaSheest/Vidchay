<?php

namespace App\Service;

use App\Http\Requests\MerchRequest;
use App\Models\Merch;
use Illuminate\Support\Facades\Storage;

class MerchService
{

    public function createNewMerch(MerchRequest $merchRequest)
    {
        $data = $merchRequest->all();
        $image = Storage::disk('public')->put('images', $data['image_url']);
        Merch::create([
            "name" => $data["name"],
            "description" => $data["description"],
            "image_url" => $image,
            "price" => $data["price"],
            "sizes" => json_encode($data["sizes"]),
            "amount" => $data["amount"]
        ]);

        return redirect()->route('admin');
    }
}
