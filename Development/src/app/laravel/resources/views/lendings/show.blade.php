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
    <a href="{{ route('lendings.index') }}"><button type="button">検索結果画面に戻る</button></a>

    <dl>
        <dt>貸出ID</dt>
        <dd>{{ $lendings->id }}</dd>

        <dt>会員ID</dt>
        <dd>{{ $lendings->user_id }}</dd>

        <dt>会員名</dt>
        <dd>{{ $users[$lendings->user_id]->name }}</dd>

        <dt>資料ID</dt>
        <dd>{{ $lendings->document_id }}</dd>

        <dt>資料名</dt>
        <dd>{{ $documents[$lendings->document_id]->title }}</dd>

        <dt>貸出日</dt>
        <dd>{{ $lendings->created_at }}</dd>

        <dt>貸出期日</dt>
        <dd>{{ $lendings->return_date }}</dd>

        <dt>返却日</dt>
        <dd>{{ $lendings->finishing_date }}</dd>
    </dl>

    {{-- <p>貸出ID</p>
    {{ $lendings->id }}
    <p>会員ID</p>
    {{ $lendings->user_id }}
    <p>会員名</p>
    {{ $user->name }}
    <p>資料ID</p>
    {{ $lendings->document_id }}
    <p>資料名</p>
    {{ $document->title }}
    <p>貸出日</p>
    {{ $lendings->created_at }}
    <p>返却期日</p>
    {{ $lendings->return_date }}
    <p>返却日</p>
    {{ $lendings->finishing_date }} --}}

    <hr>
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
@endsection
