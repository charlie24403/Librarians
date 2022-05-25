@section('title', '資料検索')

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        @hasSection('title')
            <title>@yield('title') | {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif
        <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    </head>
    <body>
        @include('/commons/header')
        <section>
            <form action="{{ route('documents.index') }}" method="get">
            @include('/commons/search')
            <button type="submit">検索</button>
            </form>
            <a href="{{ route('documents.search') }}">
                <button type="button">キャンセル</button>
            </a>
        </section>
    </body>
</html>
