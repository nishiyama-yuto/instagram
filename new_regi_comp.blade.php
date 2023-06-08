<!DOCTYPE html>
<html>
<head>
    <title>新規登録完了</title>
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

        .registration-details {
            text-align: center;
            margin-top: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .registration-details div {
            margin-bottom: 10px;
        }

        .login-button {
            background-color: #3897f0;
            color: #ffffff;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>新規登録完了</h1>
    以下の内容で登録しました。
    <div class="registration-details">
        <div>名前　　　：{{$name}}</div>
        <div>パスワード：*****</div>
    </div>
    <a href="{{url('/login')}}" class="login-button">ログインページへ</a>
</body>
</html>
