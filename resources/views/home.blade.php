@extends('layouts.app')

@section('title', 'ホーム')

@section('content')
    <h1>ホーム</h1>
    <a href="{{ route('login') }}">ログイン</a>

    <a href="{{ route('posts.index') }}">記事一覧</a>
@endsection
