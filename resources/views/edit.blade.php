<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit: {{ $post->name }}</title>
    <link rel="stylesheet" href="app.css">
</head>

<body>
    <div class="logo">
        <p>HANG!</p>
    </div>
    <div id="post">
        <form method='POST' action='./update'>
            @csrf
            @method('PUT')
            <label for='name'><h2>Name:</h2></label>
                <input type='text' name='name' id='name' value='{{ $post->name }}' >
                <p><h1>Where are you?</h1></p>
                <label for='city'><h2>City: </h2></label>
                <input type='text' name='city' id='city' value='{{ $post->city }}'>
                <label for='country'><h2>Country: </h2></label>
                <input type='text' name='country' id='country' value='{{ $post->country }}'>
                <label for="size"><h2>Sweater Size:</h2></label>
                <select id="size" name="size" value='{{ $post->size }}'>
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                    <option value="extra-large">Extra Large</option>
                </select>
                <label for='tags'><h2>Tags: </h2></label>
                <input type='text' name='tags' id='tags' value='{{ $post->tags }}'>
                <label for='description'><h2>Description:</h2> </label>
                <textarea name='description' id='description'>{{ $post->description }}</textarea><br><br>
                <button type='submit' class="button">Save</button>
        </form>
    </div>
</body>

</html>