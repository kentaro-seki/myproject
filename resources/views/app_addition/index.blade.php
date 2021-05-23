@extends('layouts.app')
@section('title', 'addition')

@section('content')
    <div class="row">
        <div class="col-md-max">
            <h2>APPAddition</h2>
            {{-- <form action="https://www.google.com/search">
                <div class="text-right">
                    <input id="search-input" placeholder="1つキーワードを入力" type="text" name="q" target="_blank">
                    <input id="search-buttom" class="btn btn-primary btn-sm" type="submit" value="search" method="get">
                </div>
            </form> --}}
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <div class="contents">
                        <h1>検索結果</h1>
                        <ul id="ul">
                        </ul>
                    </div>
                    {{-- <form action="https://www.google.com/search" target="_blank">
                <input type="text" name="q">
                <button>検索</button>
                </form> --}}
                    <div class="col-md-10">

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="text-right">
{{-- routeを使ってcreateを実行 --}}
        <form action="{{route('app_addition.create')}}" method="POST">
        <input type="text" class="form-control" name="appname" value="{{ old('appname') }}">
        <div class="btn">
                {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="addition">
                </div>
            </form>
        </div>
    </div>
    @foreach($posts as $app)
    <tr>
        <th>{{ $app->id }}</th>
        <td>{{ str_limit($app->appname, 100) }}</td>
        <td>{{ str_limit($app->url, 250) }}</td>
    </tr>
@endforeach

{{-- <a href="{{ route('app_manage.index') }}"  --}}
    <footer class="text-center bg-dark text-white">
        <p class="py-3">APPMANAGER</p>
    </footer>
@endsection
