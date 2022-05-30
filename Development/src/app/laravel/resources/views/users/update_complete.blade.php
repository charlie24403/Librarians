<!-- env -->
@section('page_title', '更新完了')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'user';
?>

@extends('layouts.app')

@section('content')
    <h1>更新情報の確認</h1>
        <p>更新完了しました</p>
        <p>
            <a href="{{ route('users.show', $user->id) }}">
                <button type="button">戻る</button>
            </a>
        </p>
        
@endsection