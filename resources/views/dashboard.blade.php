@extends('layouts.app')

@section('title', 'ダッシュボード')

@section('content')
    <h1>ダッシュボード</h1>
    <p>ようこそ {{ $name }} さん！</p>
    <a href="{{ route('posts.create') }}">記事作成</a>
    <a href="{{ route('logout') }}">ログアウト</a>

    <h2>投稿した記事</h2>
    <ul>
        @foreach ($posts as $post)
        <li><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>
@endsection
