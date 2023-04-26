<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Book</title>
    </head>
    <body>
        <h1>Book</h1>
        <form action="/books" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <textarea name="books[name]" placeholder="本のタイトルを入力してください" >{{old('books.name')}}</textarea>
                <p class="title_error" style="color:red">{{$errors->first('books.name')}}</p>
            </div>
            <div class="body">
                <h2>作者</h2>
                <input type="text" name="books[author]" placeholder="作者を入力してください" value="{{old('books.author')}}"/><br><br>
                <p class="body_error" style="color:red">{{$errors->first('books.author')}}</p>
            </div>
            <input type="submit" value="投稿する"/><br><br>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>