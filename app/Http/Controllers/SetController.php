<?php

namespace App\Http\Controllers;

use App\Models\Set;
use Illuminate\Http\Request;

class SetController extends Controller
{
    public function index()
    {
        $sets = Set::all();
        //return view('sets.index', compact('sets'));
        return view('sets.index', ['sets' => $sets]);
    }
}
