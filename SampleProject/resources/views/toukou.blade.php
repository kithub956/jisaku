<html>
    <title></title>
    <head></head>
    <body>
    <div class="header">
            @include('header')
    </div>
        <dl>
            <form method="post"  action="{{ url('keijiban') }}">
                @csrf
                <div class="form-group">
                <label for="name">名前</div>
                <input type="text" id="name" name="name">
                    @if (!empty($errors->first('name')))
                    <p class="error_message">{{ $errors->first('name') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="message">内容</label>
                    <textarea name="message" id="message"></textarea>
                    @if (!empty($errors->first("message")))
                        <p class="error_message">{{ $errors->first('message')}}</p>
                    @endif
                </div>
                <div class="btnWrapper">
                    <input type="submit" valeu="投稿"></input>
                </div>
            </form>
        </dl>
    </body>
</html>