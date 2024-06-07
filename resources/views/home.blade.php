@extends('layouts.app')

@section('title', 'ホーム')

@section('content')
    <h1>ホーム</h1>
    @auth
    <a href="{{ route('dashboard') }}">ダッシュボード</a>
    @endauth
    @guest
    <a href="{{ route('login') }}">ログイン</a>
    @endguest

    <a href="{{ route('posts.index') }}">記事一覧</a>
@endsection
