<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $category->name }}
        </h1>
        
        <div class="footer">
            <a href="/categories">戻る</a>
            <p class="edit">[<a href="/categories/{{ $category->id }}/edit">edit</a>]</p>
        </div>
    </body>
</html>