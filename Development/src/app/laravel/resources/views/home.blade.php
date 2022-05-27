<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            トップ画面
        </title>
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>トップ画面</h1>
        <!--会員管理-->
        <a href="{{ route('users.menu') }}">
            <button type="button">会員管理</button>
        </a>

        <!--資料管理-->
        <a href="{{ route('documents.menu') }}">
            <button type="button">資料管理</button>
        </a>
        

        <!--在庫管理-->
        <a href="{{ route('stocks.menu') }}">
            <button type="button">在庫管理</button>
        </a>

        <!--貸出管理-->
        <a href="{{ route('lendings.menu') }}">
            <button type="button">貸出管理</button>
        </a>

        <!--予約管理
        <p>
            予約管理
        </p>-->
    </body>
</html>