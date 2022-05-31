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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
    </head>
    <body>
    <head>
        <meta charset="utf-8">
        @hasSection('page_title')
            <title>@yield('page_title') | {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('home') }}">
                    <h1>
                        <img src="{{asset('/assets/images/book-half.svg')}}" alt="" width="45" height="50" class="d-inline-block align-text-top">
                        図書管理システム
                    </h1>
                    </a>
                </div>
            </nav>
        </header>
        <main>
            <h2>トップ画面</h2>

            <div class="menu_button">
                <!--会員管理-->
                <a href="{{ route('users.menu') }}">
                    <button type="button" class="btn btn-outline-secondary btn-lg">会員管理</button>
                </a>
                <!--資料管理-->
                <a href="{{ route('documents.menu') }}">
                    <button type="button" class="btn btn-outline-secondary btn-lg">資料管理</button>
                </a>
                <!--在庫管理-->
                <a href="{{ route('stocks.menu') }}">
                    <button type="button" class="btn btn-outline-secondary btn-lg">在庫管理</button>
                </a>
                <!--貸出管理-->
                <a href="{{ route('lendings.menu') }}">
                    <button type="button" class="btn btn-outline-secondary btn-lg">貸出管理</button>
                </a>
            </div>
        </main>
        <footer>

        </footer>
    </body>
</html>
