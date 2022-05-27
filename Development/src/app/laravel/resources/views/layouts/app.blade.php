<!DOCTYPE html>
<<<<<<< HEAD
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Librarians
        </title>
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <header>
            <div class="container">
                <ul class = "navigation">
                    <li>
                        <a href="">トップページ</a>
                    </li>
                    <li>
                        <a href="{{ route('lendings.menu') }}">貸出管理メニュー</a>
                    </li>
                </ul>
            </div>
        </header>
        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>
    </body>
</html>
=======
<html lang="ja">
    <head>
        <meta charset="utf-8">
        @hasSection('page_title')
            <title>@yield('page_title') | {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif
        <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    </head>
    <body>
        <header>
            @if($IS_MENU)
                <ul class = "navigation">
                        <li>
                            <a href="">トップページ</a>
                        </li>
                </ul>
            @else
                <ul class = "navigation">
                        <li>
                            <a href="">トップページ</a>
                        </li>
                        <li>
                            @switch($CATEGORY)
                                @case('user')
                                    <a href="{{ route('user.menu') }}">メニューに戻る</a>
                                    @break
                                @case('documents')
                                    <a href="{{ route('documents.menu') }}">メニューに戻る</a>
                                    @break
                                @case('stocks')
                                    <a href="{{ route('stocks.menu') }}">メニューに戻る</a>
                                    @break
                                @default
                                    <a href="">メニューに戻る</a>
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
>>>>>>> main
