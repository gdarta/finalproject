<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <a href="./">
        <div class="logo">
            <p>HANG!</p>
        </div>
    </a>
    <h1>Log into your account to post sweaters</h1>
    <div id="post">
        <form method='POST' action='./users/authenticate'>
            @csrf
            <!--TODO: add username authentication-->
            <label for='email'><h2>Enter your e-mail: </h2></label>
            <input type='text' name='email' id='email' value="{{ old('email') }}"> <br>
            @error('email')
            <p class="error">{{ $message }}</p>
            @enderror

            <label for='password'><h2>Enter password: </h2></label>
            <input type='text' name='password' id='password'> <br>
            @error('password')
            <p class="error">{{ $message }}</p>
            @enderror

            <br><button type='submit' class="button">Login</button>
        </form>
    </div>
    <p>Are not registered? <a href='./register'>Register</a></p>
</body>

</html>