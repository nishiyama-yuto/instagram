<html>
<head>
    <title>タイムライン</title>
</head>
<body>
    <div>
    <h1>タイムライン</h1>

    @if ($session)
    <a href="{{url('/mypage')}}">マイページへ</a>
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
    <div>
        <div><img src="{{Storage::url($item->img_path)}}" height="400" width="500"></div>
        <div>{{$item->comment}}</div>
        <div>いいね数：{{$item->nice_num}}</div>
        <div>投稿日　：{{$item->created_at}}</div>
        <div>
        @if ($item->created_at != $item->updated_at)
            更新日　：{{$item->updated_at}}
        @endif
        </div>
    </div>
    @endforeach
</body>
</html>