@extends('layouts.app')

@section('title', 'ダッシュボード')

@section('content')
    <h1>ダッシュボード</h1>
    <p>ようこそ {{ $name }} さん！</p>
    <a href="{{ route('logout') }}">ログアウト</a>

    <h2>記事</h2>
    <a href="{{ route('posts.create') }}">新規作成</a>
@endsection
