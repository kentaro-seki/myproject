@extends('layouts.app')
@section('title', 'addition')

@section('content')
<div class="row">
  <div class="col-md-max">
    <h2>APPAddition</h2>
    <form action="/search-result/">
      <div class="text-right">
        <input id="search-input" placeholder="1つキーワードを入力" type="text" name="search-key">
        <input id="search-buttom" class="btn btn-primary btn-sm" type="submit" value="search" method="get">
      </div>
    </form>
  </div>
  <div class="row">
    <div class="list-news col-md-12 mx-auto">
      <div class="row">
        <div class="contents">
          <h1>検索結果</h1>
          <ul id="ul">
          </ul>
        </div>
        <div class="row">
          <div class="col-ld-8">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="text-right">
          <div class="btn">
            <a href="{{route('app_manage.index')}}" class="btn btn-primary btn-sm">Addition</a>
          </div>
        </div>
      </div>

      <footer class="text-center bg-dark text-white">
        <p class="py-3">APPMANAGER</p>
      </footer>
      @endsection