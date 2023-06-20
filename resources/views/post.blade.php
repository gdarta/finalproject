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
        @php
            $tags = explode(",", $post->tags);
        @endphp
        <img src="{{ $post->photo ? asset('storage/'.$post->photo) : asset('assets/images/no-image.jpg')}}">
        <p><b>Owner: </b>{{ $post->user->name }}<p>
        <p><b>Posted: </b>{{ $post->created_at }}</p>
        <p><b>Location: </b>{{ $post->city }}, {{ $post->country }}</p>
        <div class="tags">
        @foreach ($tags as $tag)
            <a href="">{{ $tag }}</a>
        @endforeach
        </div>
        <p><b>Size: </b>{{ $post->size }}</p>
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