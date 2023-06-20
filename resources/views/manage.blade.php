<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manage posts</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <a href="./">
        <div class="logo">
            <p>HANG!</p>
        </div>
    </a>
    @auth
    <span>Welcome {{ auth()->user()->name }}!</span><br>
    <a href='./'>Return</a>
    <form method='POST' action='./logout'>
        @csrf
        <br><button type='submit' class="button">Logout</button>
    </form>
    @else
    <a href='./register' class="button">Register </a>
    <a href='./login' class="button">Login</a>
    @endauth
    <br><h1>Manage posts</h1>
    <br><a href='./create' class='button'>Create a new post</a>
    @if (count($posts) == 0)
        <p class='error'>There are no records in the database!</p>
    @else
        <table class='manage-posts'>
            @foreach ($posts as $post)
            @php
                $tags = explode(",", $post->tags);
            @endphp
                <tr class="post_display">
                    <h2><a href='{{ $post->id }}' class="name_link">{{ $post->name }}</a></h2>
                    <button class="button"><a href='./{{ $post-> id }}/edit' style="color:black">Edit this post</a></button>
                    <form method='POST' action='./{{ $post->id }}'>
                        @csrf
                        @method('DELETE')
                        <button class="button">Delete post</button>
                    </form>
                </tr>
            @endforeach
        </table>
    @endif
</body>

</html>