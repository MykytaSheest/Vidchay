<?php

namespace App\Http\Controllers\WebControllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

use function redirect;

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
