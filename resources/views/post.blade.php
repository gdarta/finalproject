<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Post</title>
</head>

<body>
    <h1>{{ $post->name }}</h1>
    <div class='single-post'>
        <p><b>Location: </b>{{ $post->location }}</p>
        <p><b>Description: </b>{{ $post->description }}</p>
    </div>
</body>

</html>