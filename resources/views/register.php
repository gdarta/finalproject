<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register new account</title>
    <link rel="stylesheet" href="../css/app.css">
</head>

<body>
    <div class="logo">
        <p>HANG!</p>
    </div>
    <div id="post">
        <form method='POST' action='./store'>
            @csrf
            <h1>New account creation</h1>
            <label for='email'><h2>Email:</h2></label>
            <input type='text' name='email' id='email'>
            <label for='password'><h2>Password: </h2></label>
            <input type='password' name='password' id='password'>
            <label for='password_2'><h2>Repeat password: </h2></label> <!-- Te vajag piešaut klāt check vai p1 un p2 ir vienādi -->
            <input type='password_2' name='password_2' id='password_2'><br><br>
            <button type='submit' class="button">Register</button>
        </form>
    </div>
</body>

</html>