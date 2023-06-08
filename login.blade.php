<!DOCTYPE html>
<html>
<head>
    <title>ログイン</title>
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
    <h1>ログイン</h1>
    @if (isset($msg))
        <div>{{$msg}}</div>
    @endif
    <form method="POST" action="/login">
        @csrf
        <label for="user_name">名前</label>
        <input type="text" name="user_name" id="user_name">
        <label for="password">パスワード</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="ログインする">
    </form>

    <div class="button-group">
        <a href="{{url('/timeline')}}">タイムラインに戻る</a>
        <a href="{{url('/new_regi')}}">新規登録</a>
    </div>
</body>
</html>
