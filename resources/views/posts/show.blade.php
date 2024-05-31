@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <h1>{{ $post->title }}</h1>
    <a href="{{ route('posts.edit', $post) }}">編集</a> |
    <form id="delete-form" method="POST" action="{{ route('posts.destroy', $post) }}" style="display: inline;">
        @method('DELETE')
        @csrf
        <a href="#" onclick="deletePost()">削除</a>
    </form>
    <script>
    function deletePost() {
        document.getElementById('delete-form').submit();
    }
    </script>


    <p>{{ $post->created_at }}</p>
    <p>{!! nl2br(e($post->content)) !!}</p>

    <a href="{{ route('posts.index') }}">一覧に戻る</a>
@endsection
