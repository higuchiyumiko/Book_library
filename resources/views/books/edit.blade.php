<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Book</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/books/{{$book->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class='content_title'>
                    <h2>タイトル</h2>
                    <input type='text' name='books[name]' value="{{$book->name}}">
                 </div>
                 <div class='content_body'>
                     <h2>作者</h2>
                     <input type='text' name='books[author]' value="{{$book->author}}"><br><br>
                     <h2>コメント</h2>
                     <input type="text" name'books[comments]' value="{{$book->comments}}"><br><br>
                 </div>
                 <div class="image">
                <input type="file" name="image">
                <p style="color:red">※写真のアップロードを再度お願い致します。(アップロードしない場合更新されません)</p>
                 </div>
                 <input type="submit" value="保存">
            </form>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>