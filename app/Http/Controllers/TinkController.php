<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinkController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function tink(Request $request)
    {
        eval($request->input('code'));
    }
}
