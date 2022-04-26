<?php

namespace App\Service;

use App\Http\Requests\MerchRequest;
use App\Http\Requests\MerchUpdateRequest;
use App\Models\Merch;
use http\Env\Request;
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

    public function updateMerch(MerchUpdateRequest $request, $id)
    {
        $image = '';
        $data = $request->all();
        $merch = Merch::where('id', $id)->first();
        if (isset($data["image_url"])) {
            Storage::disk('public')->delete($merch->image_url);
            $image = Storage::disk('public')->put('images', $data['image_url']);
        }
        $merch->update([
            "name" => $data["name"],
            "description" => $data["description"],
            "image_url" => $image,
            "price" => $data["price"],
            "sizes" => json_encode($data["sizes"]),
            "amount" => $data["amount"]
        ]);

        return redirect()->route('admin');
    }

    public function deleteMerch($id)
    {
        $merch = Merch::where('id', $id)->first();
        Storage::disk('public')->delete($merch->image_url);
        $merch->delete();
        return redirect()->route('admin');
    }
}
