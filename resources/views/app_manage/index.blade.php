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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
@endsection
