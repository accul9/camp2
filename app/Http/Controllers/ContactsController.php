<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'email' => 'required|email',
            'body' => 'required',
        ]);

        $inputs = $request->all();

        return view('contact.confirm', compact('inputs'));
    }/* public function confirm(Request $request)
    {
        $contact = $request->all();
        return view('contact.confirm', compact('contact'));
    } */
}
