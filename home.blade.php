<!DOCTYPE html>
<html>
<head>
    <title>タイムライン</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #262626;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .container a {
            text-decoration: none;
            color: #262626;
            margin-right: 10px;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #3897f0;
            color: #ffffff;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .post {
            background-color: #ffffff;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .post img {
            max-width: 100%;
            height: auto;
        }

        .post-info {
            margin-top: 10px;
            color: #999999;
        }

        .post-info div {
            margin-bottom: 5px;
        }

        .post-info .updated-date {
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>タイムライン</h1>
        @if ($session)
            <a href="{{url('/mypage')}}" class="button">マイページへ</a>
            <!-- ログアウトするボタン（ポストでログアウトフラグを飛ばす） -->
            <form method="POST" style="display:inline-flex" action="/home">
                @csrf
                <input type="submit" name="logout" class="button" id="logout" value="ログアウト">
            </form>
        @else
            <a href="{{url('/new_regi')}}">新規登録</a>
            <a href="{{url('/login')}}">ログイン</a>
        @endif
    </div>

    @foreach ($items as $item)
        <div class="post">
            <div><img src="{{Storage::url($item->img_path)}}" alt="Post Image"></div>
            <div>{{$item->comment}}</div>
            <div class="post-info">
                <div>いいね数：{{$item->nice_num}}</div>
                <div>投稿日　：{{$item->created_at}}</div>
                @if ($item->created_at != $item->updated_at)
                    <div class="updated-date">更新日　：{{$item->updated_at}}</div>
                @endif
            </div>
        </div>
    @endforeach
</body>
</html>
