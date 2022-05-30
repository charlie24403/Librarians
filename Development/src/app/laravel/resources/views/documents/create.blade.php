<!-- env -->
@section('page_title', '資料新規登録')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'documents';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <div class="input-page">
        @include('commons/flash')
        <form action="{{ route("documents.confirm") }}" method="post">
            <input type="hidden" name="confirm_type" value="create">

            @include('/documents/commons/form')
            <button type="submit">確認</button>
            <a href="{{ route('documents.create') }}">
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
