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

        form {
            background-color: #ffffff;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        div {
            color: #999999;
            margin-bottom: 10px;
        }

        input[type="file"] {
            margin-bottom: 10px;
        }

        textarea {
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #3897f0;
            color: #ffffff;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
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
        <textarea name="comment" rows="10" cols="40">{{old('comment')}}</textarea><br>
        <input type="submit" value="投稿する">
    </form>
</body>
</html>
