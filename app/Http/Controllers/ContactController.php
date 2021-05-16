<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact.index');
    }
    public function add(Request $request)
    {
        return redirect('contact.index');
    }  

}
