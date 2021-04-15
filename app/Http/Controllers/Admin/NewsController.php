<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //
    public function add()
  {
      return view('admin.news.create');
  }
}
// ユーザー側がブログに投稿する処理を行う場所