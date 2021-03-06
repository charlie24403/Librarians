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
    <div class="input-page">
        @include('commons/flash')
        <form action="{{ route('lendings.update', $lendings->id)}}" method="post">
            @method('patch')

            <div class="form">
                @csrf
                <dl>
                    <dt>会員ID</dt>
                    <dd>
                        <input type="number" name="user_id" value="{{ $lendings->user_id }}" class="form-control" id="exampleFormControlInput1" style="width: 200px">
                    </dd>

                    <dt>資料ID</dt>
                    <dd>
                        <input type="number" name="document_id" value="{{ $lendings->document_id }}" class="form-control" id="exampleFormControlInput1" style="width: 200px" >
                    </dd>

                    <dt>貸出期日</dt>
                    <dd>
                        <input type="date" name="return_date" value="{{ $lendings->return_date }}" class="form-control" id="exampleFormControlInput1" style="width: 200px" >
                    </dd>

                    <dt>返却日</dt>
                    <dd>
                        <input type="date" name="finishing_date" value="{{ $lendings->finishing_date }}" class="form-control" id="exampleFormControlInput1" style="width: 200px">
                    </dd>
                </dl>
            </div>

            <button type="submit" class="btn btn-outline-primary btn-lg">返却</button>

            <a href="{{ route('lendings.show', $lendings->id) }}">
                    <button type="button" class="btn btn-outline-secondary btn-lg">キャンセル</button>
            </a>
        </form>
    </div>
@endsection
