<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            会員管理メニュー画面
        </title>
        <link rel="stylesheet" href="">
    </head>
    <body>
        
        <header>
            <div class="container">
                <ul class = "navigation">
                    <li>
                        <a href="{{ route('home') }}">トップページ</a>
                    </li>
                    <!--<li>
                        <a href="{{ route('users.menu') }}">会員管理メニュー</a>
                    </li> -->
                </ul>
            </div>
        </header>
        
        <h1>会員管理メニュー</h1>
        <!--新規会員登録-->
        <p>
            <a href="{{ route('users.create') }}">新規会員登録</a>
        </p>

        <p>
            or
        </p>

        <!--会員検索-->
        <p>
            <a href="{{ route('users.search') }}">会員情報検索</a>
        </p>

    </body>
</html>
