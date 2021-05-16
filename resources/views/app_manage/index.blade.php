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
    <tr>
      <th scope="row">1</th>
      <td>Slack</td>
      <a href="#"><td>AppHP</td></a>
      <td style="text-align:right;">
      <button>削除ボタン</button>
      <!-- 削除ボタンを押すと確認がでる -->
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Gmail</td>
      <a href="#"><td>AppHP</td></a>
      <td style="text-align:right;">
      <button>削除ボタン</button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Twitter</td>
      <a href="#"><td>AppHP</td></a>
      <td style="text-align:right;">
      <button>削除ボタン</button>
      </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>LINE</td>
      <a href="#"><td>AppHP</td></a>
      <td style="text-align:right;">
      <button>削除ボタン</button>
      </td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Facebook</td>
      <a href="#"><td>AppHP</td></a>
      <td style="text-align:right;">
      <button>削除ボタン</button>
      </td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>----</td>
      <a href="#"><td>AppHP</td></a>
      <td style="text-align:right;">
      <button>削除ボタン</button>
      </td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>....</td>
      <a href="#"><td>AppHP</td></a>
      <td style="text-align:right;">
      <button>削除ボタン</button>
      </td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>@@@@@</td>
      <a href="#"><td>AppHP</td></a>
      <td style="text-align:right;">
      <button>削除ボタン</button>
      </td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>//////</td>
      <a href="#"><td>AppHP</td></a>
      <td style="text-align:right;">
      <button>削除ボタン</button>
      </td>
    </tr>
  </tbody>
</table>

<footer class="text-center bg-dark text-white">
    <p class="py-3">APPMANAGER</p>
</footer>
</body>
@endsection