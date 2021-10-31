<!doctype html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>スポーツ手帳</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="title">{{ $post->title }}</h1>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->day }}</p>
                <p>{{ $post->place }}</p>
                <p>{{ $post->distance }}</p>
                <p>{{ $post->body }}</p>
                <p class='update_at'>{{ $post->update_at}}</p>
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <script>
            function deletePost(this){
                'use strict';
                if(confirm('本当に削除しますか')){
                    document.getElementById('form_delete').submit();
                }
            }
        </script>
    </body>
</html>