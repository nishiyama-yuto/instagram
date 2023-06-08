<!DOCTYPE html>
<html>
<head>
    <title>新規登録</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('instagram.png');
            background-size: cover;
        }
            h1 {
        text-align: center;
        color: white;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 20px;
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    input[type="text"],
    input[type="password"] {
        margin-bottom: 10px;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #f2f2f2;
    }

    input[type="submit"] {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: #3897f0;
        color: white;
        font-weight: bold;
        cursor: pointer;
    }

    .button-group {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        margin-top: 20px;
    }

    .button-group a {
        margin: 0 10px;
        text-decoration: none;
        color: white;
    }
</style>
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
    <div class="button-group">
    <a href="{{url('/login')}}">ログインページへ</a>
</div>
</body>
</html>
