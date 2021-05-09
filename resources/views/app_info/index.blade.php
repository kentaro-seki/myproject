<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>info</title>
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
<!-- 問い合わせフォーム入力画面 -->
<div class="container my-5">
<h2>Contact</h2>
    <form method="post" action="">
      <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email" class="form-control" placeholder="E-mail">
      </div>
      <div class="form-group">
      <label for="exampleInputEmail1">name</label>
        <input type="text" name="name" class="form-control" placeholder="name">
      </div>
      <div class="form-group">
        <textarea rows="10" cols="50" placeholder="If you have any questions, please enter。" name="" type="text" class="form-control"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">send</button>
    </form>
</div>
    <footer class="text-center bg-dark text-white">
        <p class="py-3">APPMNAGER</p>
</footer>
</body>
</html>