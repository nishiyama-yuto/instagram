<html>
<head>
    <title>新規登録</title>
    <!-- <script src="../../js/img_val.js"></script> -->
</head>
<body>
    <h1>新規登録</h1>
    @if (isset($msg))
        <div>{{$msg}}</div>
    @endif
    <form method="POST" action="/new_regi_comp">
        @csrf
        <div>*名前</div>
        @error('name')
        <div>{{$message}}</div>
        @enderror
        <input type="text" name="name" value="{{old('name')}}"><br><br>
        <div>*パスワード（半角英数字5文字以上）</div>
        @error('password')
        <div>{{$message}}</div>
        @enderror
        <input type="password" name="password"><br><br>
        <div>*パスワード（確認用）</div>
        @error('password_confirmation')
        <div>{{$message}}</div>
        @enderror
        <input type="password" name="password_confirmation"><br><br>
        <input type="submit" value="登録する">
    </form>

    <a href="{{url('/login')}}">ログインページへ</a>
</body>
</html>