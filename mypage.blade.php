<!DOCTYPE html>
<html>
<head>
    <title>画像表示テスト</title>
    <style>
        body {
            background-color: #fafafa;
        }
            .container {
        background-color: #ffffff;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
    }

    h1 {
        color: #262626;
    }

    .button {
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
        margin-bottom: 20px;
    }

    .post img {
        max-width: 100%;
        height: auto;
    }

    .post-info {
        color: #999999;
        margin: 10px 0;
    }

    .updated-date {
        font-style: italic;
    }
</style>
<!-- 削除アラートJS -->
<script src="{{asset('/js/delete.js')}}"></script>
</head>
<body>
    <div class="container">
        <h1>マイページ</h1>
            <a href="{{url('/home')}}">タイムラインへ</a>
    <a href="{{url('/new_post')}}">新規投稿</a>
    <!-- ログアウトするボタン（ポストでログアウトフラグを飛ばす） -->
    <form method="POST" style="display:inline-flex" action="/home">
        @csrf
        <input type="submit" name="logout" class="button" id="logout" value="ログアウト">
    </form>
</div>
<div>{{$msg}}</div>
@if ($items == '[]')
    <div class="container">
        まだ投稿していません。
        投稿してみましょう！
    </div>
@endif
@foreach ($items as $item)
    <div class="post">
        <div><img src="{{Storage::url($item->img_path)}}" height="400" width="500"></div>
        <div>{{$item->comment}}</div>
        <div>いいね数：{{$item->nice_num}}</div>
        <div class="post-info">
        @if ($item->created_at == $item->updated_at)
            投稿日　：{{$item->created_at}}
        @else
            更新日　：{{$item->updated_at}}
        @endif
        </div>
        <div><a href="{{url('/post_edit/'.$item->post_num)}}">編集</a></div>
        <div><form method="POST" action="/mypage">
            @csrf
                <input type="hidden" name="del_id" value="{{$item->post_id}}">
                <input type="submit" value="削除" onClick="delete_alert(event);return false;">
        </form></div>
    </div>
@endforeach
</body>
</html>