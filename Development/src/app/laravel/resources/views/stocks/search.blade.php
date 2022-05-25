<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>在庫検索</title>
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <body>
        <form action="{{ route('stocks.index') }}" method="get">
        @include('/commons/search')
        <button type="submit">検索</button>
        </form>
        <a href="{{ route('stocks.search') }}">
            <button type="button">キャンセル</button>
        </a>
    </body>
</html>
