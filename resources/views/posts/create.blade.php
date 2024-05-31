@extends('layouts.app')

@section('title', '記事新規作成')

@section('content')
    <h1>記事新規作成</h1>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <input type="text" name="title" placeholder="タイトル" value="{{ old('title') }}"><br>
        <textarea name="content" placeholder="本文">{{ old('content') }}</textarea><br>
        <input type="submit" value="投稿">
    </form>
@endsection
