@extends('layouts.app')
@section('title', 'contact')

@section('content')
<div class="container my-5">
<h2>Contact</h2>
<div class="card-deck">
    <div class="card ">
    <img src="/images/image.jpg" alt="">
</div>
</div>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
@endsection
