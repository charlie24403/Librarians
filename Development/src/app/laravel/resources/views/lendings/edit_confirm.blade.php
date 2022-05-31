<!-- env -->
@section('page_title', '確認')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'lendings';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <form action ="{{ route('lendings.update_send', $lendings->id) }}" method="post">
        @csrf


        <dl>
            <dt>ユーザID</dt>
            <dd>{{ $input["user_id"] }}</dd>

            <dt>資料ID</dt>
            <dd>{{ $input["document_id"] }}</dd>

            <dt>貸出期日</dt>
            <dd>{{ $input["return_date"]}}</dd>

            <dt>返却日</dt>
            <dd> {{ $input["finishing_date"] }}</dd>
        </dl>

        <button type="submit" class="btn btn-outline-primary btn-lg">確認</button>
        <button type="button" onclick="history.back()" class="btn btn-outline-secondary btn-lg">戻る</button>
    </form>
@endsection