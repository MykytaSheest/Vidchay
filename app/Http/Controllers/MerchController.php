<?php

namespace App\Http\Controllers;

use App\Http\Requests\MerchRequest;
use App\Http\Requests\MerchUpdateRequest;
use App\Models\Merch;
use App\Service\MerchService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MerchController extends Controller
{

    protected $merchService;

    public function __construct()
    {
        $this->merchService = new MerchService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.merch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(MerchRequest $request)
    {
        return $this->merchService->createNewMerch($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Merch  $merch
     * @return \Illuminate\Http\Response
     */
    public function show(Merch $merch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Merch  $merch
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        return view('admin.merch.edit', ['merch' => Merch::where('id',  $id)->first()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Merch  $merch
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(MerchUpdateRequest $request, $id)
    {
        return $this->merchService->updateMerch($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Merch  $merch
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        return $this->merchService->deleteMerch($id);
    }
}
