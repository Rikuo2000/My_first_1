<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>スポーツ手帳</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        .box{
            width:96vw;
            margin:1vw;
            border:solid 3px;
        }
    </style>
    </head>
    <body>
        <h1>スポーツ手帳</h1>
        <p class="create">[<a href='/posts/create'>新規作成</a>]</p>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post box'>
                    <h2 class='title'><a href="/post/{{ $post->id }}/edit">{{ $post->title }}</a></h2>
                    <p class='Pday'>{{ $post->Pday }}</p>
                    <p class='place'>{{ $post->place }}</p>
                    <p class='distance'>{{ $post->distance }}</p>
                    <p class='body'>{{ $post->body }}</p>
                </div>
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit"><span onclick="return deletePost(this);">delete</span></button> 
                </form>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        
        <script>
            function deletePost(this){
                'use strict';
                if(confirm('削除すると復元できません。本当に削除しますか?')){
                    document.getElementById('form_delete').submit();
                }
            }
        </script>
    </body>
</html>