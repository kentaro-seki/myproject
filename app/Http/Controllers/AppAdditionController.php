<?php

namespace App\Http\Controllers;

use App\Providers\AppServiceProvider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\App;

class AppAdditionController extends Controller
{
    //
    public function index()
    {
        return view('app_addition.index');
    }
    public function create(Request $request)
  {
    $this->validate($request, App::$rules);

      $apps = new App;
      $form = $request->all();

      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);

      // データベースに保存する
      $apps->fill($form);
      $apps->save();


      return redirect(route('app_addition.index'));
  }
//   public function add(Request $request)
//   {
//       $cond_title = $request->cond_title;
//       if ($cond_title != '') {
//           // 検索されたら検索結果を取得する
//           $posts = App::where('appname', $cond_title)->get();
//       } else {
//           // それ以外はすべてのニュースを取得する
//           $posts = App::all();
//       }
//       return view(route('app_addition.index'), ['posts' => $posts, 'cond_title' => $cond_title]);
//   }
}
