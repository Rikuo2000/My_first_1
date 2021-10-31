<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <style>
        .box{
            width:96vw;
            margin:1vw;
            border:solid 3px;
        }
    </style>
    <head>
        <meta charset="utf-8">
        <title>スポーツ手帳</title>
    </head>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form class="box" action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__title'>
                    <h2>タイトル</h2>
                    <input type='text' name='post[title]' value="{{ $post->title }}">
                </div>
                <div class='content__day'>
                    <h2>練習日</h2>
                    <input type='text' name='post[day]' value="{{ $post->day }}">
                </div>
                <div class='content__place'>
                    <h2>練習場所</h2>
                    <input type='text' name='post[place]' value="{{ $post->place }}">
                </div>
                <div class='content__distance'>
                    <h2>練習日</h2>
                    <input type='text' name='post[distance]' value="{{ $post->distance }}">
                </div>
                <div class='content__body'>
                    <h2>本文</h2>
                    <input type='text' name='post[body]' value="{{ $post->body }}">
                </div>
                
            </form>
            <input type="submit" value="保存">
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" style="display:none">
                    <button type="submit"><span onclick="return deletePost(this);">削除</span></button>
                </form>
                <script>
                function deletePost(e){
                    'use strict';
                    if(confirm('本当に削除しますか')){
                        document.getElementById('form_delete').submit();
                    }
                }
        </script>
            <div class="back">[<a href="/posts/{{ $post->id }}">戻る</a>]</div>
        </div>
    </body>
</html>