<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\StoreContactRequest;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request)
    {
        return response()-> json($request->validated());
    }
}
