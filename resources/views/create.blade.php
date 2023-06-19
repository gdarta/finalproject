<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create new post</title>
    <link rel="stylesheet" href="..\css\app.css">
</head>

<body>
    <div class="logo">
        <p>HANG!</p>
    </div>
    <div id="post">
        <form method='POST' action='./store'>
            @csrf
            <label for='name'><h2>Name:</h2></label>
            <input type='text' name='name' id='name'>
            <p><h1>Where are you?</h1></p>
            <label for='city'><h2>City: </h2></label>
            <input type='text' name='city' id='city'>
            <label for='country'><h2>Country: </h2></label>
            <input type='text' name='country' id='country'>
            <label for="size"><h2>Sweater Size:</h2></label>
            <select id="size" name="size">
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
                <option value="extra-large">Extra Large</option>
            </select>
            <label for='tags'><h2>Tags: </h2></label>
            <input type='text' name='tags' id='tags'>
            <label for='description'><h2>Description:</h2> </label>
            <textarea name='description' id='description' placeholder='Write your description here...'></textarea><br><br>
            <button type='submit' class="button">Save</button>
        </form>
    </div>
</body>

</html>