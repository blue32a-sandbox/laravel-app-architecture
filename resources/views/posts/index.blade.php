@extends('layouts.app')

@section('title', '記事一覧')

@section('content')
    <h1>記事一覧</h1>
    <ul>
        @foreach ($posts as $post)
        <li><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>
@endsection
