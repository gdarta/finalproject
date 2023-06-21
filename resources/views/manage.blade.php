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
    <span>{{ __('msg.welcome')}} {{ auth()->user()->name }}!</span><br>
    <a href='./'>{{ __('msg.return')}}</a>
    <form method='POST' action='./logout'>
        @csrf
        <br><button type='submit' class="button">{{ __('msg.log_out')}}</button>
    </form>
    @else
    <a href='./register' class="button">{{ __('msg.register')}} </a>
    <a href='./login' class="button">{{ __('msg.login')}}</a>
    @endauth
    <br><h1>{{ __('msg.manage_posts')}}</h1>
    <br><a href='./create' class='button'>{{ __('msg.create_a_new_post')}}</a>
    @if (count($posts) == 0)
        <p class='error'>{{ __('msg.there_are_no_records_in_the_database')}}!</p>
    @else
        <table class='manage-posts'>
            @foreach ($posts as $post)
            @php
                $tags = explode(",", $post->tags);
            @endphp
                <tr class="post_display">
                    <h2><a href='{{ $post->id }}' class="name_link">{{ $post->name }}</a></h2>
                    <button class="button"><a href='./{{ $post-> id }}/edit' style="color:black">{{ __('msg.edit_this_post')}}</a></button>
                    <form method='POST' action='./{{ $post->id }}'>
                        @csrf
                        @method('DELETE')
                        <button class="button">{{ __('msg.delete_post')}}</button>
                    </form>
                </tr>
            @endforeach
        </table>
    @endif
</body>

</html>