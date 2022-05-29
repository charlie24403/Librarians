<!-- env -->
@section('page_title', '登録情報の確認')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'users';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
        <p>登録完了しました</p>
        <a href="{{ route('users.create') }}">
            <button type="button">戻る</button>
        </a>
@endsection
