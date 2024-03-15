<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\StoreContactRequest;
use App\Mail\NewContact;
use App\Models\Contact;

use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request)
    {
        $contact = Contact::create($request->validated());

        Mail::to('email.random@gmail.com')->send( new NewContact($contact));

        return response()-> json([
            'success' => true,
            'message' => 'Contatto salvato con successo',
        ]);
    }
}


