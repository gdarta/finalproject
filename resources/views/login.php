<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/app.css">
</head>

<body>
    <div class="logo">
        <p>HANG!</p>
    </div>
    <div id="post">
        <form method='POST' action='./store'>
            @csrf
            <h1>Login</h1>
            <label for='email'><h2>Email:</h2></label>
            <input type='text' name='email' id='email'>
            <label for='password'><h2>Password: </h2></label>
            <input type='password' name='password' id='password'><br><br>
            <button type='submit' class="button">Login</button>
        </form>
    </div>
</body>

</html>