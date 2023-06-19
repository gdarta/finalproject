<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit: {{ $post->name }}</title>
</head>

<body>
    <form method='POST' action='./update'>
        @csrf
        @method('PUT')
        <label for='name'>Name: </label>
        <input type='text' name='name' id='name' value='{{ $post->name }}'>
        <p>Where are you?</p>
        <label for='city'>City: </label>
        <input type='text' name='city' id='city' value='{{ $post->city }}'><br>
        <label for='country'>Country: </label>
        <input type='text' name='country' id='country' value='{{ $post->country }}'> <br>
        <label for='size'>Sweater size: </label>
        <input type='text' name='size' id='size' value='{{ $post->size }}'> <br>
        <label for='tags'>Tags: </label>
        <input type='text' name='tags' id='tags' value='{{ $post->tags }}'> <br>
        <label for='description'>Description: </label>
        <textarea name='description' id='description'>{{ $post->description }}</textarea> <br>
        <button type='submit'>Save</button>
    </form>
</body>

</html>