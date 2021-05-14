@extends('layouts.app')
@section('title', 'toppage')

@section('content')

<div class="container py-4" id="works">
    <h2>APPMNAGER</h2>
        <p>こちらのサイトでは現在お使いのアプリ、ツール等が一括し管理できるサービスを提供しております。</p>
     <div class="card-deck"> 
        <div class="card ">
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
        <a href="{{route('app_info.index')}}" class="btn btn-primary">OK</a>
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
@endsection