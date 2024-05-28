@extends('layouts.app')

@section('title', 'ログイン')

@section('content')
    <h1>ログイン</h1>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <form action="{{ route('authenticate') }}" method="POST">
        @csrf
        メールアドレス: <input type="text" name="email" value="{{ old('email') }}"><br>
        パスワード: <input type="password" name="password"><br>
        <input type="submit" value="ログイン">
    </form>
@endsection
