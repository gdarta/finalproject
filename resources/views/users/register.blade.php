<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <a href="{{ route('posts.index') }}">
        <div class="logo">
            <p>HANG!</p>
        </div>
    </a>
    <h1>{{ __('msg.create_an_account_to_post_your_sweaters')}}</h1>
    <div id="post">
        <form method='POST' action='./users'>
            @csrf
            <label for='name'><h2>{{ __('msg.enter_your_name')}}: </h2></label>
            <input type='text' name='name' id='name' value="{{ old('name') }}"> <br>
            @error('name')
            <p class="error">{{ $message }}</p>
            @enderror

            <label for='username'><h2>{{ __('msg.enter_your_username')}}: </h2></label>
            <input type='text' name='username' id='username' value="{{ old('username') }}"> <br>
            @error('username')
            <p class="error">{{ $message }}</p>
            @enderror

            <label for='email'><h2>{{ __('msg.enter_your_e-mail')}}: </h2></label>
            <input type='text' name='email' id='email' value="{{ old('email') }}"> <br>
            @error('email')
            <p class="error">{{ $message }}</p>
            @enderror

            <label for='password'><h2>{{ __('msg.enter_password')}}: </h2></label>
            <input type='password' name='password' id='password' value="{{ old('password') }}"> <br>
            @error('password')
            <p class="error">{{ $message }}</p>
            @enderror

            <label for='password_confirmation'><h2>{{ __('msg.confirm_password')}}: </h2></label>
            <input type='password' name='password_confirmation' id='password_confirmation'> <br>
            @error('password_confirmation')
            <p class="error">{{ $message }}</p>
            @enderror

            <br><button type='submit' class="button">{{ __('msg.register')}}</button>
        </form>
    </div>
    <p>{{ __('msg.already_registered')}} <a href='./login'>{{ __('msg.login')}}</a></p>
</body>

</html>