<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Category Name</h1>
        <form action="/categories" method="POST">
            @csrf
            <div class="name">
                <h2>カテゴリー名</h2>
                <input type="text" name="category[name]" placeholder="カテゴリー" value="{{ old('category.name') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('category.name') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/categories">back</a>]</div>
    </body>
</html>