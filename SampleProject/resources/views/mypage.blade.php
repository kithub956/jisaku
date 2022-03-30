<html>
    <title></title>
    <head>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="{{ asset('/js/app.js') }}" defer></script>
</head>
    <body>
    <div class="header">
            @include('header')
        </div>
        <p>名前</p>
        <p>{{ Auth::user()->name }}</p>
        <p>メールアドレス</p>
        <p>{{ Auth::user()->email }}</p>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-danger">ログアウト</button>
        </form>
        <a href="{{ url('mydate_edit') }}"><button class="btn btn-primary">編集</button></a>
    </body>
</html>