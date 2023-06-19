<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Post</title>
</head>

<body>
    <h1>{{ $post->name }}</h1>
    <div class='single-post'>
        <p><b>Location: </b>{{ $post->city }}, {{ $post->country }}</p>
        <p><b>Description: </b>{{ $post->description }}</p>
    </div>
    <a href='./{{ $post-> id }}/edit'>Edit this post</a>

    <form method='POST' action='./{{ $post->id }}'>
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form>
</body>

</html>