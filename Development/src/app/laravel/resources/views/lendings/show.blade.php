<!-- env -->
@section('page_title', '貸出詳細')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'lendings';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
<h1>予約詳細画面</h1>
<a href="{{ route('lendings.index') }}">検索結果画面に戻る</a>

<p>貸出ID</p>
{{ $lendings->id }}
<p>会員ID</p>
{{ $lendings->user_id }}
{{-- <p>会員名</p> --}}

<p>資料ID</p>
{{ $lendings->document_id }}
{{-- <p>資料名</p> --}}

<p>貸出日</p>
{{ $lendings->created_at }}
<p>返却期日</p>
{{ $lendings->return_date }}
<p>返却日</p>
{{ $lendings->finishing_date }}

<hr>
<a href="{{ route('lendings.edit', $lendings->id) }}">変更</a></p>

<a href="#" onclick="deleteReservation()">削除</a>
<form action="{{  route('lendings.destroy', $lendings) }}" method ="post"
    id ="delete-form">
    @csrf
    @method('delete')
</form>

<script type="text/javascript">
function deleteReservation()
{
    event.preventDefault();
    if (window.confirm('削除しますか？')){
        document.getElementById('delete-form').submit();
    }
}
</script>
@endsection