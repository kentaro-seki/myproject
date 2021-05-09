<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppInfoController extends Controller
{
    //
    public function index()
    {
        return view('app_info.index');
    }
}
