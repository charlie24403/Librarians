<!-- env -->
@section('page_title', '新規貸出登録')

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        @hasSection('page_title')
            <title>@yield('page_title') | {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif
        <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    </head>
    <body>
        <h1>トップ画面</h1>

        <div class="menu_button">
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
        </div>

    </body>
</html>
