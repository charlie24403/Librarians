<!-- env -->
@section('page_title', '新規会員登録')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'user';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <div class="input-page">
        @include('commons/flash')
        <form action="{{ route('users.post')}}" method="post">
            @include('users/commons/form')
            <button type="submit" class="btn btn-outline-primary btn-lg">確認</button>
            <a href="{{ route('users.create') }}">
                <button type="button" class="btn btn-outline-secondary btn-lg">キャンセル</button>
            </a>
        </form>
    </div>

    <?php
        if (isset($created)) {
            echo '<script type="text/javascript">alert("登録が完了しました");</script> ';
        }
    ?>
@endsection
