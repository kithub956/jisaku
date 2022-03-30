<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{ asset('/css/login_form.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="{{ asset('/js/app.js') }}" defer></script>
</head>
<body>

<main class="form-signin">
  <form method="POST" action="{{ route('admins.login') }}">  
    @csrf
    <h1 class="h3 mb-3 fw-normal">ログイン</h1>

    @foreach ($errors->all() as $error)    
    <ul class="alert alert-danger">
     <li>{{ $error }}</li>
    </ul>
    @endforeach
            
    @if (session('login_error'))
      <div class="alert alert-danger">
            {{ session('login_error') }}
      </div>
    @endif

    @if (session('logout'))
      <div class="alert alert-danger">
            {{ session('logout') }}
      </div>
    @endif

   
    <dl>
    <div class="form-floating">
    <dt><label for="floatingInput">メールアドレス</label></dt> 
    <dd><input type="email" class="form-control" id="floatingInput" name="email" placeholder=""></dd>
    <div class="form-floating">
      <dt><label for="floatingPassword">パスワード</label></dt>
      <dd><input type="password" class="form-control" id="floatingPassword" name="password" placeholder=""></dd>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">ログイン</button>
    </dl>
  </form>
  <p><a href="{{ url('/register') }}">新規登録はこちら</p>
</main>
</body>
</html>