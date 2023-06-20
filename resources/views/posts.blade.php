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
    <span>Welcome {{ auth()->user()->name }}!</span><br>
    <a href='./posts/manage'>Manage your posts</a>
    <form method='POST' action='./logout'>
        @csrf
        <br><button type='submit' class="button">Logout</button>
    </form>
    @else
    <a href='./register' class="button">Register </a>
    <a href='./login' class="button">Login</a>
    @endauth
    <br><h1>All posts</h1>
    <form action="./posts/" class="search">
        <input type="text" name="search" placeholder="Search Christmas sweaters..." >
        <button type="submit" class="button">Search</button>
    </form>
    @if (count($posts) == 0)
        <p class='error'>There are no records in the database!</p>
    @else
        <div class='all-posts'>
            @foreach ($posts as $post)
            @php
                $tags = explode(",", $post->tags);
            @endphp
                <div class="post_display">
                    <h2><a href='./posts/{{ $post->id }}' class="name_link">{{ $post->name }}</a></h2>
                    <img src="{{ $post->photo ? asset('storage/'.$post->photo) : asset('assets/images/no-image.jpg')}}">
                    <p><b>Owner: </b>{{ $post->user->name }}<p>
                    <p><b>Posted: </b>{{ $post->created_at }}</p>
                    <p><b>Location: </b>{{ $post->city }}, {{ $post->country }}</p>
                    <div class="tags">
                    @foreach ($tags as $tag)
                       <a href="./posts/?tag={{ $tag }}" class="tag">{{ $tag }}</a>
                    @endforeach
                    </div>
                    <p><b>Size: </b>{{ $post->size }}</p>
                    <p><b>Description: </b>{{ $post->description }}</p>
                </div>
            @endforeach
        </div>
    @endif
    {{ $posts->links() }}
    <br><a href='./create' class='button'>Create a new post</a>
</body>

</html>