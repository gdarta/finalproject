<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Post</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <a href="./">
        <div class="logo">
            <p>HANG!</p>
        </div>
    </a>
    <h1>{{ $post->name }}</h1>
    <div class='single_post'>
        <p><b>Location: </b>{{ $post->city }}, {{ $post->country }}</p>
        <p><b>Description: </b>{{ $post->description }}</p>
    </div>
    @auth
    <br>
    <button class="button"><a href='./{{ $post-> id }}/edit'>Edit this post</a></button>
    <form method='POST' action='./{{ $post->id }}'>
        @csrf
        @method('DELETE')
        <button class="button">Delete post</button>
    </form>
    @endauth
</body>

</html>