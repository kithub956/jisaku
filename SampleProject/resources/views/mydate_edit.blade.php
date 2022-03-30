<html>
    <title></title>
    <head></head>
    <body>
    <div class="header">
            @include('header')
    </div>
    <dl>
            <form method="post"  action="{{ url('mypage', $user) }}">
                @csrf
                @method('put')
                <div class="form-group">
                <label for="email">メールアドレス</div>
                <input type="text" id="email" name="email" value="{{ $user->email }}">
                    @if (!empty($errors->first('email')))
                    <p class="error_message">{{ $errors->first('email') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input type="text" name="password" id="password" value="{{ $user->password }}">
                    @if (!empty($errors->first("password")))
                        <p class="error_password">{{ $errors->first('password')}}</p>
                    @endif
                </div>
                <div class="btnWrapper">
                    <input type="submit" value="更新"></input>
                </div>
            </form>
        </dl>
    </body>
</html>