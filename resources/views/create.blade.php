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
        <input type='text' name='name' id='name' value="{{ old('name') }}">
        @error('name')
            <p>{{$message}}</p>
        @enderror
        <p>Where are you?</p>
        <label for='city'>City: </label>
        <input type='text' name='city' id='city' value="{{ old('city') }}"><br>
        
        <label for='country'>Country: </label>
        <input type='text' name='country' id='country' value="{{ old('country') }}"> <br>
        @error('country')
            <p>{{$message}}</p>
        @enderror
        <label for='size'>Sweater size: </label>
        <input type='text' name='size' id='size' value="{{ old('size') }}"> <br>
        @error('size')
            <p>{{$message}}</p>
        @enderror
        <label for='tags'>Tags: </label>
        <input type='text' name='tags' id='tags' value="{{ old('tags') }}"> <br>
        <label for='description'>Description: </label>
        <textarea name='description' id='description' placeholder='Write your description here...'>{{ old('description') }}</textarea> <br>
        @error('description')
            <p>{{$message}}</p>
        @enderror
        <button type='submit'>Save</button>
    </form>
</body>

</html>