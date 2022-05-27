<!DOCTYPE html>
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
                                    <a href="{{ route('user.menu') }}">メニューに戻る</a>
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
