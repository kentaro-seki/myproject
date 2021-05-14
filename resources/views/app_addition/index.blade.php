@extends('layouts.app')
@section('title', 'addition')

@section('content')
<div class="form-group row">
  <div class="text-right">
  <div class="col-md-8">
  <input type="text">
  </div>
  <div class="col-md-2">
  <div class="btn">
  <a href="{{route('app_manage.index')}}" class="btn btn-primary btn-sm">search</a>
  </div>
  </div>
  </div>
<div class="row">
<div class="list-news col-md-12 mx-auto">
<div class="row">

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
</div>
<div class="container">
<div class="text-right">
    <div class="btn">
      <a href="{{route('app_manage.index')}}" class="btn btn-primary btn-sm">アプリ管理へ</a>
    </div> 
</div>
</div>

<footer class="text-center bg-dark text-white">
    <p class="py-3">APPMANAGER</p>
</footer>
</body>
@endsection