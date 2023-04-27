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
        <h1 class="title">
            {{$book->name}}
        </h1>
        <div class="content">
            <div class="content__book">
                <h3>作者</h3>
                <p>{{$book->author}}</p>
                <h3>コメント</h3>
                <p>{{$book->comments}}</p>
            </div>
            <div>
                <img src="{{$book->image}}" alt="画像が読み込めません">
            </div>
        </div>
        <div class="edit"><a href="/books/{{$book->id}}/edit"/>編集する</a></div><br>
        <form action="/books/{{$book->id}}" id="form_{{$book->id}}" method="post">
            @csrf
            @method('DELETE')
            <button type="button" onclick="deletePost({{$book->id}})">削除する</button><br><br>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <script>
            function deletePost(id){
                'use strict'
                
                if(confirm('削除すると復元できません。\n本当に削除しますか?')){
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>