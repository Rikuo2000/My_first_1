<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>スポーツ手帳</title>
    </head>
    <body>
        <h1>練習記録</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="day">
                <h2>練習日</h2>
                <textarea name="post[day]" placeholder="練習した日を入力">{{ old('post.day') }}</textarea>
                <p class="day__error" style="color:red">{{ $errors->first('post.day') }}</p>
            </div>
            <div class="place">
                <h2>練習場所</h2>
                <textarea name="post[place]" placeholder="練習場所">{{ old('post.place') }}</textarea>
                <p class="place__error" style="color:red">{{ $errors->first('post.place') }}</p>
            </div>
            <div class="distance">
                <h2>距離</h2>
                <textarea name="post[distance]" placeholder="走行距離を入力なければ0を入力">{{ old('post.distance') }}</textarea>
                <p class="distance__error" style="color:red">{{ $errors->first('post.distance') }}</p>
            </div>
            <div class="body">
                <h2>内容</h2>
                <textarea name="post[body]" placeholder="練習お疲れさまでした。練習内容を書いてください">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="戻る">[<a href="/">戻る</a>]</div>
    </body>
</html>