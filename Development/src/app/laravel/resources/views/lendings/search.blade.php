<!-- env -->
@section('page_title', '貸出資料検索')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'lendings';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <div class="input-page">
        <form action="{{ route('lendings.index') }}" method="get">
            @include('/lendings/commons/search')
            <button type="submit"class="btn btn-outline-secondary btn-lg" >検索</button>
            <a href="{{ route('lendings.search') }}">
                <button type="button"class="btn btn-outline-secondary btn-lg" >キャンセル</button>
            </a>
        </form>
    </div>
@endsection
