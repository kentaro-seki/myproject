@extends('layouts.app')
@section('title', 'manage')

@section('content')
<body>
<table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col"></th>
      <th scope="col">Tool name</th>
      <th scope="col">APP Description</th>
      <th scope="col">bottn</th>
    </tr>
  </thead>
  <tbody>
    @foreach($apps as $app)
    <tr>
     <th scope="row">1</th>
      <td>{{$app->appname}}</td>
      <td><a href="{{$app->url}}" target="_blank">公式HP</a></td>
      <td style="text-align:right;">
      <button>削除ボタン</button>
      <!-- 削除ボタンを押すと確認がでる -->
      </td>
    </tr>
    @endforeach
    </tbody>
</table>

<footer class="text-center bg-dark text-white">
    <p class="py-3">APPMANAGER</p>
</footer>
</body>
@endsection
