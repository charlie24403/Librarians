<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>資料検索</title>
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <body>
        <form action="{{ route('documents.index') }}" method="get">
        @include('documents/common/search')
        <button type="submit">検索</button>
        </form>
        <a href="{{ route('documents.search') }}">
            <button type="button">キャンセル</button>
        </a>
    </body>
</html>
