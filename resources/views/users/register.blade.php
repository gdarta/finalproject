<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <a href="./">
        <div class="logo">
            <p>HANG!</p>
        </div>
    </a>
    <h1>Create an account to post your sweaters</h1>
    <div id="post">
        <form method='POST' action='./users'>
            @csrf
            <label for='name'>Enter your name: </label>
            <input type='text' name='name' id='name' value="{{ old('name') }}"> <br>
            @error('name')
            <p class="error">{{ $message }}</p>
            @enderror

            <label for='username'>Enter your username: </label>
            <input type='text' name='username' id='username' value="{{ old('username') }}"> <br>
            @error('username')
            <p class="error">{{ $message }}</p>
            @enderror

            <label for='email'>Enter your e-mail: </label>
            <input type='text' name='email' id='email' value="{{ old('email') }}"> <br>
            @error('email')
            <p class="error">{{ $message }}</p>
            @enderror

            <label for='password'>Enter password: </label>
            <input type='text' name='password' id='password' value="{{ old('password') }}"> <br>
            @error('password')
            <p class="error">{{ $message }}</p>
            @enderror

            <label for='password_confirmation'>Confirm password: </label>
            <input type='text' name='password_confirmation' id='password_confirmation'> <br>
            @error('password_confirmation')
            <p class="error">{{ $message }}</p>
            @enderror

            <button type='submit'>Register</button>
        </form>
    </div>
    <p>Already registered? <a href='./login'>Login</a></p>
</body>

</html>