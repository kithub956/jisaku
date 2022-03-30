<html>
    <body>
    <form method="post"  action="{{ url('admin') }}">
                @csrf
                <div class="form-group">
                <label for="title">タイトル</label>
                <input type="text" id="title" name="title">
                    @if (!empty($errors->first('name')))
                    <p class="error_message">{{ $errors->first('name') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="content">内容</label>
                    <textarea id="content" name="content"></textarea>
                    @if (!empty($errors->first("message")))
                        <p class="error_message">{{ $errors->first('message')}}</p>
                    @endif
                </div>
                <select name="age">
  <option value="0">会議</option>
  <option value="1">朝礼</option>
  <option value="2">その他</option>
</select>
                <div class="btnWrapper">
                    <input type="submit" valeu="投稿"></input>
                </div>
            </form>
    </body>
</html>