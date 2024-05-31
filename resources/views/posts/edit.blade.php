@extends('layouts.app')

@section('title', '「' . $post->title . '」を編集')

@section('content')
    <h1>「{{ $post->title }}」を編集</h1>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <form method="POST" action="{{ route('posts.update', $post) }}">
        @method('PUT')
        @csrf
        <input type="text" name="title" placeholder="タイトル" value="{{ old('title', $post->title) }}"><br>
        <textarea name="content" placeholder="本文">{{ old('content', $post->content) }}</textarea><br>
        <input type="submit" value="編集">
    </form>
@endsection
