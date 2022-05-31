<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        @hasSection('page_title')
            <title>@yield('page_title') | {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('home') }}">
                    <h1>
                        <img src="{{asset('/assets/images/book-half.svg')}}" alt="" width="45" height="50" class="d-inline-block align-text-top">
                        図書管理システム
                    </h1>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">

                    @if($IS_MENU)
                        <ul class="navbar-nav">

                        </ul>
                    @else
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                    @switch($CATEGORY)
                                        @case('user')
                                            <a class="nav-link" href="{{ route('users.menu') }}">メニューに戻る</a>
                                            @break
                                        @case('documents')
                                            <a class="nav-link" href="{{ route('documents.menu') }}">メニューに戻る</a>
                                            @break
                                        @case('stocks')
                                            <a class="nav-link" href="{{ route('stocks.menu') }}">メニューに戻る</a>
                                            @break
                                        @case('lendings')
                                            <a class="nav-link" href="{{ route('lendings.menu') }}">メニューに戻る</a>
                                            @break
                                        @default
                                            <a class="nav-link" href="{{ route('home') }}">メニューに戻る</a>
                                    @endswitch
                                </li>
                        </ul>
                    @endif

                    </div>
                </div>
            </nav>
        </header>
        <main>
            <h2>@yield('page_title')</h2>
            @yield('content')
        </main>
        <footer>

        </footer>
    </body>
</html>
