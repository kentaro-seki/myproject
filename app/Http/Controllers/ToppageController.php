<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToppageController extends Controller
{
    public function index()
    {
        return view('toppage.index');
        // comand/ でコメント　2回消える　新しいコントローラーを作ってページ、BladePHP　をつくっていく
    }
}
