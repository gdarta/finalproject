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
            <a href="" class="tag">{{ $tag }}</a>
        @endforeach
        </div>
        <p><b>Size: </b>{{ $post->size }}</p>
        <p><b>Description: </b>{{ $post->description }}</p>
    </div>
    @auth
    <form method="POST" action="./{{ $post->id }}/comment">
        @csrf 
        <textarea name='body' id='body' placeholder='Write your comment here...'></textarea><br><br>
        <button type='submit' class="button">Comment</button>
    </form>
    @endauth

    @foreach ($comments as $comment)
        <h3>{{ $comment->user->name }} said: <h3>
        <p>{{ $comment->body }}</p>
    @endforeach
    {{ $comments->links() }}

    
</body>

</html>