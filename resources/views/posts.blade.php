<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="../css/app.css">
</head>

<body>
    <div class="logo">
        <p>HANG!</p>
    </div>
    <h1>All posts</h1>
    @if (count($posts) == 0)
        <p class='error'>There are no records in the database!</p>
    @else
        <div class='all-posts'>
            @foreach ($posts as $post)
                <div class="post_display">
                    <h2><a href='./{{ $post->id }}' class="name_link">{{ $post->name }}</a></h2>
                    <p><b>Location: </b>{{ $post->city }}, {{ $post->country }}</p>
                    <p><b>Description: </b>{{ $post->description }}</p>
                </div>
            @endforeach
        </div>
    @endif
    <a href='./create' class='button'>Create a new post</a>
</body>

</html>