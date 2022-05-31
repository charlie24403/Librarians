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
            @if($IS_MENU)
                <ul class = "navigation">
                        <li>
                            <a href="{{ route('home') }}">トップページ</a>
                        </li>
                </ul>
            @else
                <ul class = "navigation">
                        <li>
                            <a href="{{ route('home') }}">トップページ</a>
                        </li>
                        <li>
                            @switch($CATEGORY)
                                @case('user')
                                    <a href="{{ route('users.menu') }}">メニューに戻る</a>
                                    @break
                                @case('documents')
                                    <a href="{{ route('documents.menu') }}">メニューに戻る</a>
                                    @break
                                @case('stocks')
                                    <a href="{{ route('stocks.menu') }}">メニューに戻る</a>
                                    @break
                                @case('lendings')
                                    <a href="{{ route('lendings.menu') }}">メニューに戻る</a>
                                    @break
                                @default
                                    <a href="{{ route('home') }}">メニューに戻る</a>
                            @endswitch
                        </li>
                </ul>
            @endif
            <h1>図書管理システム</h1>
        </header>
        <main>
            <h2>@yield('page_title')</h2>
            @yield('content')
        </main>
        <footer>

        </footer>
    </body>
</html>
