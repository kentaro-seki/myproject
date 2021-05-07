<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppManageController extends Controller
{
    public function index()
    {
        return view('app_manage.index');
        // comand/ でコメント　2回消える　新しいコントローラーを作ってページ、BladePHP　をつくっていく
    }
}
