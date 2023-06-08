<!DOCTYPE html>
<html>
<head>
    <title>新規投稿</title>
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

        .post {
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .timeline-button,
        .mypage-button {
            background-color: #3897f0;
            color: #ffffff;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>新規投稿完了</h1>
        以下の内容で登録しました。
        <div><img src="{{Storage::url($image)}}" height="400" width="500"></div>
        <div>{{$comment}}</div>

        <div>
            <a href="/home" class="timeline-button">タイムラインへ</a>
            <a href="/mypage" class="mypage-button">マイページへ</a>
        </div>
    </div>
</body>
</html>
