<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
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
                @yield('content')
            </main>
        </div>
    </body>
</html>