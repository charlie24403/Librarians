<!-- env -->
@section('page_title', '在庫新規登録')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'stocks';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <div class="input-page">
        @include('commons/flash')
        <form action="{{ route("stocks.confirm") }}" method="post">
            <input type="hidden" name="confirm_type" value="create">

            @include('/stocks/commons/form_create')
            <button type="submit">確認</button>
            <a href="{{ route('stocks.create') }}">
                <button type="button">キャンセル</button>
            </a>
        </form>
    </div>

    <?php
        if (isset($created)) {
            echo '<script type="text/javascript">alert("登録が完了しました");</script> ';
        }
    ?>
@endsection
