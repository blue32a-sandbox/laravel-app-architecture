@extends('layouts.app')

@section('title', 'ホーム')

@section('content')
    <h1>ホーム</h1>
    <a href="{{ route('login') }}">ログイン</a>
@endsection
