<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>
    <h1>Log into your account to post sweaters</h1>
    <form method='POST' action='./users/authenticate'>
        @csrf
        <!--TODO: add username authentication-->
        <label for='email'>Enter your e-mail: </label>
        <input type='text' name='email' id='email' value="{{ old('email') }}"> <br>
        @error('email')
        <p class="error">{{ $message }}</p>
        @enderror

        <label for='password'>Enter password: </label>
        <input type='text' name='password' id='password'> <br>
        @error('password')
        <p class="error">{{ $message }}</p>
        @enderror

        <button type='submit'>Login</button>
    </form>
    <p>Are not registered? <a href='./register'>Register</a></p>
</body>

</html>