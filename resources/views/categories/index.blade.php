<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Category Name</h1>
        @foreach($categories as $category)
            <h2>
                <a href="/categories/{{ $category->id }}">{{ $category->name }}</a>
            </h2>        
        @endforeach
        <div class='paginate'>
            {{ $categories->links() }}
        </div>
    </body>
</html>