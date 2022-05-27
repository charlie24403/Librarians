<!-- env -->
@section('page_title', '更新情報の確認')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'users';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
        <p>更新完了しました</p>
        <p>
            <a href="{{ route('users.show', $user->id) }}">
                <button type="button">戻る</button>
            </a>
        </p>

@endsection
