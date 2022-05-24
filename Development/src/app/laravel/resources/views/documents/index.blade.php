<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>資料検索-結果</title>
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <body>
        <a href="{{ route('documents.search') }}">
            <button type="button">再検索</button>
        </a>
        @include('documents/common/datalist')
    </body>
</html>
