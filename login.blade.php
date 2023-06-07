<html>
<head>
    <title>ログイン</title>
    <!-- <script src="../../js/img_val.js"></script> -->
</head>
<body>
    <h1>ログイン</h1>
    @if (isset($msg))
        <div>{{$msg}}</div>
    @endif
    <form method="POST" action="/login">
        @csrf
        名前　　　：
        <input type="text" name="user_name"><br>
        パスワード：
        <input type="password" name="password"><br>
        <input type="submit" value="ログインする">
    </form>

    <a href="{{url('/new_regi')}}">新規登録</a>
</body>
</html>