<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOPPAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- publicまでに見にいく scssを変換して読み込む 上記をapp、adominに変えてみる-->
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand text-dark" href="#">Portfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ">
                <a class="nav-link text-dark" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link text-dark" href="#skill">Skill</a>
                <a class="nav-link text-dark" href="#works">Works</a>
                <a class="nav-link text-dark" href="#contact">Contact</a>
            </div>
        </div>
    </nav>

    <div class="container py-4" id="works">
        <h2>Works</h2>
        <p>This is sample description.This is sample description.This is sample description.This is sample description.This is sample description.This is sample description.</p>
        <div class="card-deck">
            <div class="card">
              <img src="img/sample4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Work1</h5>
                <p class="card-text">This is sample description.This is sample description.This is sample description.This is sample description.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <img src="img/sample4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Work2</h5>
                <p class="card-text">This is sample description.This is sample description.This is sample description.This is sample description.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <img src="img/sample4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Work3</h5>
                <p class="card-text">This is sample description.This is sample description.This is sample description.This is sample description.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
        </div>
    </div>

  </body>

    <button type="button" class="btn btn-danger">すでに登録済み</button>
    <button type="button" class="btn btn-warning">新規登録</button>
    <P>新規ログインの方は登録が必要となります</P>
    
    <!-- ログイン済みの方 リンクの書き方の一例-->
<a href="{{route('app_manage.index')}}">アプリ管理</a>

<a href="{{route('app_manage.index')}}" class="btn btn-primary btn-sm">アプリ管理へ</a>

<a href="{{route('app_addition.index')}}" class="btn btn-primary btn-sm">アプリ追加へ</a>

    ここの下に写真か画像を挿入
    <iframe width="560" height="315">
  <img src="..." class="card-img-top" alt="...">
    </iframe>
</div>
<!-- 継承対応の際に@yield('') -->
<div class="container">
    <div class="sitemap">





</body>
</html>