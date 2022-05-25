@section('title', '資料検索一覧')

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
            <a href="{{ route('documents.search') }}">
                <button type="button">再検索</button>
            </a>
            @include('/documents/commons/documents_datalist')
        </section>
    </body>
</html>
