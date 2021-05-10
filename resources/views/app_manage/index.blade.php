<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>managepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand text-dark" href="{{route('app_toppage.index')}}">APPMANAGER</a> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ">
            <a class="nav-link text-dark" href="{{route('app_toppage.index')}}">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link text-dark" href="{{route('app_manage.index')}}">manager</a>
            <a class="nav-link text-dark" href="{{route('app_addition.index')}}">Addition</a>
            <a class="nav-link text-dark" href="{{route('app_info.index')}}">Contact</a>
        </div>
    </div>
</nav>

<table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col"></th>
      <th scope="col">Tool name</th>
      <th scope="col">bottn</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Slack</td>
      <td style="text-align:right;">
      <button>削除ボタン</button>
      <!-- 削除ボタンを押すと確認がでる -->
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Gmail</td>
      <td style="text-align:right;">
      <button>削除ボタン</button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Twitter</td>
      <td style="text-align:right;">
      <button>削除ボタン</button>
      </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>LINE</td>
      <td style="text-align:right;">
      <button>削除ボタン</button>
      </td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Facebook</td>
      <td style="text-align:right;">
      <button>削除ボタン</button>
      </td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>----</td>
      <td style="text-align:right;">
      <button>削除ボタン</button>
      </td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>....</td>
      <td style="text-align:right;">
      <button>削除ボタン</button>
      </td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>@@@@@</td>
      <td style="text-align:right;">
      <button>削除ボタン</button>
      </td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>//////</td>
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
</html>