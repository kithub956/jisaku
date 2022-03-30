@extends('layout')
@section('content')
<div>klkk</div>
<!-- <head>
        <mete charset="UTF-8">
            <titile></title>
            <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
            <script src="/js/app.js" defer></script>
    </head>
    @if (session('login_success'))
    <div class="alert alert-success">
        {{ session('login_success') }}
        @endif
    <h1>お知らせ</h1>
    <table class="info">
       @foreach($adminpost as $adminbbs)
       <tr>
           <td class="day"><a href="/detail/{{ $adminbbs->id }}">{{ $adminbbs->title }}</a></td>
           <td class="contents">{{ $adminbbs->updated_at }}</td>
       </tr>
       @endforeach
       </table>
       <table border="1" class="schedule">
       <tr>
       <th class="yotei">予定</th>
       </tr>
       @foreach($schedule as $sche)
       <tr>
       <td>{{ $sche->scheduledate }}</td><td>{{ $sche->schedule_title }}</td><td>{{ $sche->plase }}</td>
    </tr>
       @endforeach
       </table> -->
@endsection
