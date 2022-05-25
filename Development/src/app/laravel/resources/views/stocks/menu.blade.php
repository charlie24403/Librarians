@section('title', '在庫管理メニュー')

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        @hasSection('title')
            <title>@yield('title') | {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif
        <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    </head>
    <body>
        @include('/commons/header')
        <section>
            <a href="{{ route('stocks.create') }}">
                <button type="button">新規登録</button>
            </a>
            <a href="{{ route('stocks.search') }}">
                <button type="button">検索</button>
            </a>
        </section>
    </body>
</html>
