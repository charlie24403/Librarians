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
    <div class="input-page">
        @include('commons/flash')

        <?php
            if (isset($err)) {
                echo $err;
            }
        ?>

        <form action="{{ route('lendings.confirm') }}" method="post">
            @include('/lendings/commons/search')
            <button type="submit" class="btn btn-outline-primary btn-lg">確認</button>
            <a href="{{ route('lendings.create') }}">
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
