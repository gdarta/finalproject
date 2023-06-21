<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="navbar sticky">
        <ul>
            <li id="logo" class="logo left"><a href="{{ route('posts.index') }}">HANG!</a></li>
            <li class="left"><a href="{{ route('posts.create') }}">{{ __('msg.create_a_new_post')}}</a></li>

            <li><a href="locale/en" class="lang">English</a></li>
            <li><a href="locale/lv" class="lang">Latviski</a></li>     
            @auth
                <li><a href="{{ route('manage') }}">{{ __('msg.manage_your_posts')}}</a></li>
            </ul>
            <br><b>{{ __('msg.welcome')}} {{ auth()->user()->name }}!</b>
            <form class="logout" method='POST' action="{{ route('logout') }}">
                    @csrf
                    <button type='submit' class="button">{{ __('msg.log_out')}}</button>
            </form>
            @else
            <li><a href='./register'>{{ __('msg.register')}}</a></li>
            <li><a href='./login'>{{ __('msg.login')}}</a></li>
        </ul>
    </div>
            @endauth
        {{ $slot }}
    </body>
</html>