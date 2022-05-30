<!-- env -->
@section('page_title', 'エラー')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'documents';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <div class="error-page">
        <p>在庫管理機能で、この情報を使用しているため削除できません。削除するためには、関連する在庫情報を削除が必要です。</p>
        <button type="button" onclick="history.back()">戻る</button>
    </div>
@endsection
