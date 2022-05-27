<!-- env -->
@section('page_title', '新規貸出登録')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'lendings';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    @include('commons/flash')
    
    <?php
        if (isset($err)) {
            echo $err;
        }
    ?>

    <form action="{{ route('lendings.confirm') }}" method="post">
        @include('/lendings/commons/search')
        <button type="submit">確認</button>
        <a href="{{ route('lendings.create') }}">
            <button type="button">キャンセル</button>
        </a>
    </form>

    <?php
        if (isset($created)) {
            echo '<script type="text/javascript">alert("登録が完了しました");</script> ';
        }
    ?>
@endsection