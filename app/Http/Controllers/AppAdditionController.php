<?php

namespace App\Http\Controllers;

use App\Providers\AppServiceProvider;
use Illuminate\Http\Request;

class AppAdditionController extends Controller
{
    //
    public function index()
    {
        return view('app_addition.index');
    }
    public function create(Request $request)
  {
    $this->validate($request, Apps::$rules);

      $apps = new Apps;
      $form = $request->all();

      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);

      // データベースに保存する
      $apps->fill($form);
      $apps->save();

    // admin/news/createにリダイレクトする
      return redirect('app_addition.create');
  }
}
