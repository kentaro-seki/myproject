<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\App;

class AppManageController extends Controller
{
    public function index()
    {
        $apps = App::all();
        $data = ['apps' => $apps];
        return view('app_manage.index', $data);

    }
}
