<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Book Library</h1>
        <div class='books'>
           @foreach ($books as $book)
            <div class='book'>
                <h2 class='title'>
                    <a href="/books/{{$book->id}}">{{$book->name}}</a>
                </h2>
                <div class='body'>
                    <p><img src="{{$book->image}}" alt="画像が読み込めません"></p>
                    <p>作者:{{$book->author}}</p>
                    <a href="/categories/{{ $book->category->id }}">カテゴリー:{{ $book->category->category_name }}</a>
                </div>
            </div>
           @endforeach
        </div><br>
        <div class='paginate'>
            {{$books->links()}}
        </div>
        <a href='/books/create'>投稿する</a>
    </body>
</html>