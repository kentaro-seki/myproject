<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppManageController extends Controller
{
    public function index()
    {
        return view('app_manage.index');
       
    }
}
