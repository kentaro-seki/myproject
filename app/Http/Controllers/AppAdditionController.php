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
        $apps = App::all();
        $data = ['apps' => $apps];
        return view('app_addition.index', $data);
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

    public function update(Request $request)
    {
        // Validationをかける
        // $this->validate($request, News::$rules);
        // News Modelからデータを取得する
        $app = App::find($request->id);
        // 送信されてきたフォームデータを格納する
        $form = $request->all();
        unset($form['_token']);

        // 該当するデータを上書きして保存する
        $app->fill($form)->save();

        return redirect('app_addition/');
    }
}
