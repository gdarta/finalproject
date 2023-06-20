<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <a href="./">
        <div class="logo">
            <p>HANG!</p>
        </div>
    </a>
    @auth
    <span>Welcome {{ auth()->user()->name }}!</span>
    <a href='./posts/manage'>Manage your posts</a>
    <form method='POST' action='./logout'>
        @csrf
        <button type='submit'>Logout</button>
    </form>
    @else
    <a href='./register'>Register </a>
    <a href='./login'>Login</a>
    @endauth
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