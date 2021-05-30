@extends('layouts.app')
@section('title', 'addition')

@section('content')

    <div class="row">
        <div class="col-md-max">
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
            <form action="{{ route('app_addition.create') }}" method="POST">
                <input type="text" class="form-control" name="appname" value="{{ old('appname') }}">
                <div class="btn">
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="addition">
                </div>
            </form>
        </div>
        <div>
            <div class="containar">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="10%">ID</th>
                            <th width="20%">アプリ名</th>
                            <th width="50%">URL</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($apps as $app)
                            <tr>
                                <th>{{ $app->id }}</th>
                                <td>
                                    {{-- TDから何かに変更する　BOOTSTRAP --}}
                                    <form action="{{ route('app_addition.update', $app->id) }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="text" value="{{ $app->appname }}" name="appname">
                                        <button>
                                            更新
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('app_addition.update', $app->id) }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="text" value="{{ $app->url }}" name="url">
                                        <button>
                                            更新
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer class="text-center bg-dark text-white">
        <p class="py-3">APPMANAGER</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
@endsection
