<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <mete charset="UTF-8">
            <titile></title>
            <link rel="stylesheet" href="{{ asset('/css/head.css') }}">
            <script src="{{ asset('/js/app.js') }}" defer></script>
    </head>
    <nav>
        <ul>
         <li class="top"><a href="{{ url('/') }}">トップ</a></li>
         <li class="news"><a href="#">NEWS</a></li>
         <li class="yotei"><a href="/.schedule">予定表</a></li>
         <li class="keijiban"><a href="{{ url('/keijiban') }}">掲示板</a></li>
         <li class="my"><a href="{{ url('/mypage') }}">マイページ</a></li>
        </ul>
    </nav>