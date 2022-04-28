<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
        $data = $request->all();
        $contact = Contact::all()[0];
        $contact->update([
            'owner_band' => $data['owner_band'],
            'phone' => $data['phone'],
            'email' => $data['email']
        ]);
        return redirect()->route('admin');
    }
}
