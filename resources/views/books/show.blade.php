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
                <h3>著者</h3>
                <p>{{$book->author}}</p>
            </div>
        </div>
        <div class="edit"><a href="/books/{{$book->id}}/edit"/>編集する</a></div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>