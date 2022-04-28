<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Merch;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index',  ["merches" => Merch::all(), "contacts" => Contact::first()]);
    }
}
