<!-- env -->
@section('page_title', '更新完了')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'user';
?>

@extends('layouts.app')

<!-- content -->
@section('content')
        <p>更新完了しました</p>
        <p>
            <a href="{{ route('users.show', $user->id) }}">
                <button type="button" class="btn btn-outline-secondary btn-lg">戻る</button>
            </a>
        </p>

@endsection
