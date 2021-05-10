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

<div class="container py-4" id="works">
    <h2>APPMNAGER</h2>
        <p>こちらのサイトでは現在お使いのアプリ、ツール等が一括し管理できるサービスを提供しております。</p>
     <div class="card-deck">
        <div class="card">
              <img src="/images/image.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">デザインロゴ</h5>
                <p class="card-text"></p>
                <p class="card-text"><small class="text-muted">ここに説明</small></p>
              </div>       
        </div>
    </div>
</div>
<div class="container">
    <div class="btn">
                <a href="{{route('app_manage.index')}}" class="btn btn-primary btn-sm">アプリ管理へ</a>
                <a href="{{route('app_addition.index')}}" class="btn btn-primary btn-sm">アプリ追加へ</a>
    </div> 
</div>

<div class="container py-4" id="contact">
    <h2>Contact</h2>
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <a href="{{route('app_manage.index')}}" class="btn btn-primary">OK</a>
    <!-- route でInfoへ移動できるようにする -->
    </form>
</div>
    <footer class="text-center bg-dark text-white">
        <p class="py-3">APPMNAGER</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>