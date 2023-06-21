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
            <li class="logo left">HANG!</li>
            <li class="left"><a href="{{ route('posts.create') }}">{{ __('msg.create_a_new_post')}}</a></li>

            <li><a href="locale/en" class="lang">English</a></li>
            <li><a href="locale/lv" class="lang">Latviski</a></li>     
            @auth
                <li><a href="{{ route('manage') }}">{{ __('msg.manage_your_posts')}}</a></li>
            </ul>
            </div>
            <form class="logout" method='POST' action="{{ route('logout') }}">
                    @csrf
                    <button type='submit' class="button">{{ __('msg.log_out')}}</button>
            </form>
            <span><b>{{ __('msg.welcome')}} {{ auth()->user()->name }}!</b></span>
            @else
                <li><a href='./register'>{{ __('msg.register')}}</a></li>
                <li><a href='./login'>{{ __('msg.login')}}</a></li>
            </ul>
            </div>
            @endauth
        {{ $slot }}
    </body>
</html>