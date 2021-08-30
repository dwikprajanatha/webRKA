<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }

    public function showForm(Request $request)
    {
        return view('form.form');
    }
 
    public function submitForm(Request $request)
    {
        # code...
    }
}
