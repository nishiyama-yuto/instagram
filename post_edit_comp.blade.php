<!DOCTYPE html>
<html>
<head>
    <title>投稿編集完了</title>
    <style>
        body {
            background-color: #fafafa;
        }

        h1 {
            color: #262626;
        }

        .container {
            background-color: #ffffff;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .logout-button {
            background-color: #3897f0;
            color: #ffffff;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .logout-button:hover {
            background-color: #1877db;
        }

        .post {
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>投稿編集完了</h1>
        <a href="{{url('mypage')}}" class="logout-button">マイページへ</a>
    </div>

    <div class="post">
        <div><img src="{{Storage::url($image)}}" height="400" width="500"></div>
        <div>{{$comment}}</div>
    </div>
</body>
</html>
