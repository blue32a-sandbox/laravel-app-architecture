@extends('layouts.app')

@section('title', 'ダッシュボード')

@section('content')
    <h1>ダッシュボード</h1>
    <p>ようこそ {{ $name }} さん！</p>
    <a href="{{ route('logout') }}">ログアウト</a>
@endsection
