<html>
<head>
    <title>投稿編集</title>
    <!-- <script src="../../js/img_val.js"></script> -->
</head>
<body>
    <div>
    <h1>投稿編集</h1>

    <a href="{{url('mypage')}}">戻る</a>
    </div>
    <div>
        <div><img src="{{Storage::url($item->img_path)}}" height="400" width="500"></div>

        <form method="POST" action="/post_edit_comp">
        @csrf
            キャプション：
            <textarea name="comment" rows="10" cols="40">{{$item->comment}}</textarea><br>
            <input type="hidden" name="post_id" value="{{$item->post_id}}">
            <input type="hidden" name="img_path" value="{{$item->img_path}}">
        <input type="submit" value="編集する">
    </div>
</form>
</body>
</html>