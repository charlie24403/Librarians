<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>商品検索</title>
    <link rel="stylesheet" href="/css/main.css">
    <body>
        <form action="" method="get">
        @include('documents/common/search')
        <button type="submit">検索</button>
        <button type=“button” onclick="location.href={{ route('index') }}">キャンセル</button>
        </form>
    </body>
</html>
