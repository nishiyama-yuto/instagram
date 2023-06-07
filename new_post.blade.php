<html>
<head>
    <title>新規投稿</title>
    <!-- <script src="../../js/img_val.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{asset('/js/preview.js')}}"></script>
</head>
<body>
    <h1>新規投稿</h1>
    <form method="POST" action="/new_post_comp" enctype="multipart/form-data">
        @csrf
        <div>*画像（jpegまたはpngの形式）</div>
        @error('image')
        <div>{{$message}}</div>
        @enderror
        <input type="file" name="image" id="image" accept="image/png, image/jpeg"><br>
        <img id="preview" width="500"><br><br>
        <div>キャプション</div>
        @error('comment')
        <div>{{$message}}</div>
        @enderror
        <textarea name="comment" rows="10" cols="40" >{{old('comment')}}</textarea><br>
        <input type="submit" value="投稿する">
    </form>
</form>
</body>
</html>