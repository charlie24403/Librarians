<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Librarians
        </title>
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <header>
            <div class="container">
                <ul class = "navigation">
                    <li>
                        <a href="{{ route('home') }}">トップページ</a>
                    </li>
                    <li>
                        <a href="{{ route('users.menu') }}">会員管理メニュー</a>
                    </li>
                </ul>
            </div>
        </header>
        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>
    </body>
</html>
