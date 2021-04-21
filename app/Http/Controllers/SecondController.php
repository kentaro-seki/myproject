<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function index()
    {
        return view('second.index');
        // comand/ でコメント　2回消える　新しいコントローラーを作ってページ、BladePHP　をつくっていく
    }
}
