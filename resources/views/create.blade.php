<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create new post</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <a href="./">
        <div class="logo">
            <p>HANG!</p>
        </div>
    </a>
    <div id="post">
        <form method='POST' action='./store' enctype="multipart/form-data">
            @csrf
        <label for='name'><h2>Name:</h2></label>
        <input type='text' name='name' id='name' value="{{ old('name') }}">
        @error('name')
            <p>{{$message}}</p>
        @enderror
        <p><h1>Where are you?</h1></p>
        <label for='city'><h2>City: </h2></label>
        <input type='text' name='city' id='city' value="{{ old('city') }}"><br>
        <label for='country'><h2>Country: </h2></label>
        <input type='text' name='country' id='country' value="{{ old('country') }}"> <br>
        @error('country')
            <p>{{$message}}</p>
        @enderror
        <label for='size'><h2>Sweater Size:</h2></label>
        <select id="size" name="size" value="{{ old('size') }}">
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
                <option value="extra-large">Extra Large</option>
        </select>
        @error('size')
            <p>{{$message}}</p>
        @enderror
        <label for='tags'><h2>Tags: </h2></label>
        <input type='text' name='tags' id='tags' value="{{ old('tags') }}"> <br>
        <label for='photo'><h2>Upload photo: </h2></label>
        <input type='file' name='photo'>
        <label for='description'><h2>Description:</h2> </label>
        <textarea name='description' id='description' placeholder='Write your description here...'>{{ old('description') }}</textarea><br><br>
        @error('description')
            <p>{{$message}}</p>
        @enderror
        <button type='submit' class="button">Save</button>
    </form>
</body>

</html>