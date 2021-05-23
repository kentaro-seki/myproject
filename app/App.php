<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'appname' => 'required',
        // urlはバリデーションがかかってしまう為削除
    );
}
