@extends('layouts.app')

@section('content')
    <h1>登録情報の確認</h1>
        <p>登録完了しました</p>
        <a href="{{ route('users.create') }}">
            <button type="button">戻る</button>
        </a>
@endsection