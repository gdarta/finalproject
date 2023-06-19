<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create new post</title>
</head>

<body>
    <form method='POST' action='./store'>
        @csrf
        <label for='name'>Name: </label>
        <input type='text' name='name' id='name'>
        <p>Where are you?</p>
        <label for='city'>City: </label>
        <input type='text' name='city' id='city'><br>
        <label for='country'>Country: </label>
        <input type='text' name='country' id='country'> <br>
        <label for='size'>Sweater size: </label>
        <input type='text' name='size' id='size'> <br>
        <label for='tags'>Tags: </label>
        <input type='text' name='tags' id='tags'> <br>
        <label for='description'>Description: </label>
        <textarea name='description' id='description' placeholder='Write your description here...'></textarea> <br>
        <button type='submit'>Save</button>
    </form>
</body>

</html>