<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>

<body>
    <h1>All posts</h1>
    @if (count($posts) == 0)
        <p class='error'>There are no records in the database!</p>
    @else
        <div class='all-posts'>
            @foreach ($posts as $post)
                <h2><a href='./{{ $post->id }}'>{{ $post->name }}</a></h2>
                <p><b>Location: </b>{{ $post->location }}</p>
                <p><b>Description: </b>{{ $post->description }}</p>
            @endforeach
        </div>
    @endif
    <a href='./create' class='button'>Create a new post</a>
</body>

</html>