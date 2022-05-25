<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>資料検索-結果</title>
        <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <body>
        <a href="{{ route('documents.search') }}">
            <button type="button">再検索</button>
        </a>
        @include('/commons/documents_datalist')
    </body>
</html>
