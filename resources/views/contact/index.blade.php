@extends('layouts.app')
@section('title', 'contact')

@section('content')
<div class="container my-5">
<h2>Contact</h2>
<form action="{{ action('ContactController@add') }}" method="post" enctype="multipart/form-data">
@if (count($errors) > 0)
    <ul>
@foreach($errors->all() as $e)
    <li>{{ $e }}</li>
@endforeach
    </ul>
@endif
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
@endsection