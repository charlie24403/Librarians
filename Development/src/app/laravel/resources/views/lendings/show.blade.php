<!-- env -->
@section('page_title', '予約詳細画面')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'lendings';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
<div class = "detail-page">
    <a href="{{ route('lendings.search') }}">
        <button type="button">検索に戻る</button>
    </a>

    <div class = "data-detail">
        @csrf
        <dl>
            <dt>貸出ID</dt>
            <dd>{{ $lendings->id }}</dd>

            <dt>会員ID</dt>
            <dd>{{ $user->id }}</dd>

            <dt>会員名</dt>
            <dd>{{ $user->name }}</dd>

            <dt>資料ID</dt>
            <dd>{{ $document->id }}</dd>

            <dt>資料名</dt>
            <dd>{{ $document->title }}</dd>

            <dt>貸出日</dt>
            <dd>{{ $lendings->created_at }}</dd>

            <dt>貸出期日</dt>
            <dd>{{ $lendings->return_date }}</dd>

            <dt>返却日</dt>
            <dd>{{ $lendings->finishing_date }}</dd>
        </dl>
    </div>

    <a href="{{ route('lendings.edit', $lendings->id) }}"><button type="button">返却</button></a>

    <a href="#" onclick="deleteReservation()"><button type="button">削除</button></a>
    <form action="{{  route('lendings.destroy', $lendings) }}" method ="post"
        id ="delete-form">
        @csrf
        @method('delete')
    </form>

    <script type="text/javascript">
        function deleteReservation()
        {
            event.preventDefault();
            if (window.confirm('削除しますか？')){
                document.getElementById('delete-form').submit();
            }
        }
    </script>
</div>
@endsection
