<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppToppageController extends Controller
{
    public function index()
    {
        return view('app_toppage.index');
        
    }
}
