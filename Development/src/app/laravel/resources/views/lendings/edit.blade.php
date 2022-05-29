<!-- env -->
@section('page_title', '貸出資料情報編集画面')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'lendings';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    @include('commons/flash')
    <form action="{{ route('lendings.update', $lendings->id)}}" method="post">
        @method('patch')
        @csrf
        <p>
            <label>
                会員ID<br>
                <input type="number" name="user_id" value="{{ $lendings->user_id }}">
            </label>
        </p>
        <p>
            <label>
                資料ID<br>
                <input type="number" name="document_id" value="{{ $lendings->document_id }}">
            </label>
        </p>
        <p>
            <label>
                貸出期日<br>
                <input type="date" name="return_date" value="{{ $lendings->return_date }}">
            </label>
        </p>
        <p>
            <label>
                返却日<br>
                <input type="date" name="finishing_date" value="{{ $lendings->finishing_date }}">
            </label>
        </p>
        <p>

        <p>
            <input class="btn btn-primary" type="submit" value="返却"/>
        </p>

        <p>
            または
        </p>

        <p>
            <a href="{{ route('lendings.show', $lendings->id) }}"><button type="button">キャンセル</button></a>
        </p>
    </form>
@endsection
