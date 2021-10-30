<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <style>
        .box{
            width:100px;
            margin:5em;
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
                <div class='content__Pday'>
                    <h2>練習日</h2>
                    <input type='text' name='post[Pday]' value="{{ $post->Pday }}">
                </div>
                
                <div class='content__body'>
                    <h2>本文</h2>
                    <input type='text' name='post[body]' value="{{ $post->body }}">
                </div>
                <input type="submit" value="保存">
            </form>
            <div class="back">[<a href="/posts/{{ $post->id }}">戻る</a>]</div>
        </div>
    </body>
</html>