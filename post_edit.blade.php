<!DOCTYPE html>
<html>
<head>
    <title>投稿編集</title>
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

        .post input[type="submit"] {
            background-color: #3897f0;
            color: #ffffff;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            border: none;
        }

        .post input[type="submit"]:hover {
            background-color: #1877db;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>投稿編集</h1>
        <a href="{{url('mypage')}}" class="logout-button">戻る</a>
    </div>

    <div class="post">
        <div><img src="{{Storage::url($item->img_path)}}" height="400" width="500"></div>

        <form method="POST" action="/post_edit_comp">
            @csrf
            キャプション：
            <textarea name="comment" rows="10" cols="40">{{$item->comment}}</textarea><br>
            <input type="hidden" name="post_id" value="{{$item->post_id}}">
            <input type="hidden" name="img_path" value="{{$item->img_path}}">
            <input type="submit" value="編集する">
        </form>
    </div>
</body>
</html>
