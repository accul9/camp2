<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    /* public function confirm(Request $request)
    {
        $contact = $request->all();
        return view('contact.confirm', compact('contact'));
    } */
}
