<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="navbar">
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <div class="logo">
        <p>HANG!</p>
    </div>

    <div>
        <a href="locale/en" class="lang">English</a>
        <a href="locale/lv" class="lang">Latvian</a>
    </div><br><br>
    @auth
    <span>{{ __('msg.welcome')}} {{ auth()->user()->name }}!</span><br>
    <a href='./posts/manage'>{{ __('msg.manage_your_posts')}}</a>
    <form method='POST' action='./logout'>
        @csrf
        <br><button type='submit' class="button">{{ __('msg.log_out')}}</button>
    </form>
    @else
    <a href='./register' class="button">{{ __('msg.register')}}</a>
    <a href='./login' class="button">{{ __('msg.login')}}</a>
    @endauth
    <br><h1>{{ __('msg.all_posts')}}</h1>
    <form action="./posts/" class="search">
        <input type="text" name="search" placeholder="Search Christmas sweaters..." >
        <button type="submit" class="button">{{ __('msg.search')}}</button>
    </form>
    @if (count($posts) == null)
        <p class='error'>{{ __('msg.there_are_no_records_in_the_database')}}</p>
    @else
        <div class='all-posts'>
            @foreach ($posts as $post)
            @php
                $tags = explode(",", $post->tags);
            @endphp
                <div class="post_display">
                    <h2><a href='./posts/{{ $post->id }}' class="name_link">{{ $post->name }}</a></h2>
                    <img src="{{ $post->photo ? asset('storage/'.$post->photo) : asset('assets/images/no-image.jpg')}}">
                    <p><b>{{ __('msg.owner')}}: </b>{{ $post->user->name }}<p>
                    <p><b>{{ __('msg.posted')}}: </b>{{ $post->created_at }}</p>
                    <p><b>{{ __('msg.location')}}: </b>{{ $post->city }}, {{ $post->country }}</p>
                    <div class="tags">
                    @foreach ($tags as $tag)
                       <a href="./posts/?tag={{ $tag }}" class="tag">{{ $tag }}</a>
                    @endforeach
                    </div>
                    <p><b>{{ __('msg.size')}}: </b>{{ $post->size }}</p>
                    <p><b>{{ __('msg.description')}}: </b>{{ $post->description }}</p>
                </div>
            @endforeach
        </div>
    @endif
    {{ $posts->links() }}
    <br><a href='./create' class='button'>{{ __('msg.create_a_new_post')}}</a>
</body>

</html>