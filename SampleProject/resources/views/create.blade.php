<html>
    <body>
    <form method="post"  action="{{ url('admin') }}">
                @csrf
                <div class="form-group">
                <label for="scheduledate">日時</label>
                <input type="text" id="scheduledate" name="scheduledate">
                    @if (!empty($errors->first('name')))
                    <p class="error_message">{{ $errors->first('name') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="schedule_title">内容</label>
                    <input type="text" name="schedule_title" id="schedule_title">
                    @if (!empty($errors->first("message")))
                        <p class="error_message">{{ $errors->first('message')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="plase">場所</label>
                    <input type="text" name="plase" id="plase">
                    @if (!empty($errors->first("message")))
                        <p class="error_message">{{ $errors->first('message')}}</p>
                    @endif
                </div>
                <div class="btnWrapper">
                    <input type="submit" valeu="投稿"></input>
                </div>
            </form>
    </body>
</html>