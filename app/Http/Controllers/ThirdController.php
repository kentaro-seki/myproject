<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThirdController extends Controller
{
    public function index()
    {
        return view('third.index');
        // comand/ でコメント　2回消える　新しいコントローラーを作ってページ、BladePHP　をつくっていく
    }
}
