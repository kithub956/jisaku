<html>
    <title></title>
    <head></head>
    <body>
    <div class="header">
            @include('header')
        </div>
        <p>チャットスペース</p>
        <p><a href="{{ url('/toukou') }}">つぶやく</a></p>
        <hr>
        @foreach($chatpost as $chat)
    <dl>
        <dt>{{ $chat->name }}</dt>
        <dd>{{ $chat->message }}</dd>
        <dd>{{ $chat->updated_at }}</dd>
</dl>
    <form action="{{ url('keijiban', $chat->id)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">削除</button>
    </form>
    <hr>
    @endforeach
    </body>
</html>