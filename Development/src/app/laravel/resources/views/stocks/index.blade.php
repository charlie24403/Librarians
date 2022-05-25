<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>在庫検索-結果</title>
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <body>
        <a href="{{ route('stocks.search') }}">
            <button type="button">再検索</button>
        </a>
        @include('/commons/stocks_datalist')
    </body>
</html>
