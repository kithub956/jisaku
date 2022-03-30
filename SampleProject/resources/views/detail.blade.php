@extends('layout')
@section('content')
<head>
        <mete charset="UTF-8">
            <title></title>
            <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
            <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
            <script src="/js/app.js" defer></script>
    </head>
    @if (session('login_success'))
    <div class="alert alert-success">
        {{ session('login_success') }}
        @endif
    <h1>詳細</h1>
    <h3>{{ $adminpost->title }}</h3>
    <hr>
    <p>{{ $adminpost->content }}</p>
@endsection