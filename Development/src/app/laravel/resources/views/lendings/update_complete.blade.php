@extends('layouts.app')

@section('content')
    <h1>更新情報の確認</h1>
        <p>更新完了しました</p>
        <p>
            <a href="{{ route('lendings.show', $lendings->id) }}">戻る</a>
        </p>
        
@endsection