@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <h1>{{ $post->title }}</h1>
    <a href="{{ route('posts.edit', $post) }}">編集</a> |
    <form id="delete-post-form" method="POST" action="{{ route('posts.destroy', $post) }}" style="display: inline;">
        @method('DELETE')
        @csrf
        <a href="#" onclick="deletePost()">削除</a>
    </form>
    <script>
    function deletePost() {
        document.getElementById('delete-post-form').submit();
    }
    </script>


    <p>{{ $post->created_at }}</p>
    <p>{!! nl2br(e($post->content)) !!}</p>

    <h2>コメント</h2>
    @foreach ($post->comments as $comment)
    <div>
        <p>{{ $comment->created_at }}</p>
        <p>{{ $comment->user->name }}</p>
        <p>{!! nl2br(e($comment->content)) !!}</p>
        <p>
            <form id="delete-comment-form-{{ $comment->id }}" method="POST" action="{{ route('posts.comments.destroy', [$post, $comment]) }}" style="display: inline;">
                @method('DELETE')
                @csrf
                <a href="#" onclick="deleteComment('{{ $comment->id}}')">削除</a>
            </form>
        </p>
    </div>
    <hr>
    @endforeach

    <script>
    function deleteComment(commentId) {
        document.getElementById('delete-comment-form-' + commentId).submit();
    }
    </script>

    <form method="POST" action="{{ route('posts.comments.store', $post) }}">
        @csrf
        <textarea name="content" required></textarea><br>
        <button type="submit">コメントする</button>
    </form>

    <br>
    <a href="{{ route('posts.index') }}">一覧に戻る</a>
@endsection
