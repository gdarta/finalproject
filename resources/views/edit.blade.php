<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit: {{ $post->name }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <a href="./">
        <div class="logo">
            <p>HANG!</p>
        </div>
    </a>
    <div id="post">
        <form method='POST' action='./update'>
            @csrf
            @method('PUT')
            <label for='name'><h2>{{ __('msg.name')}}:</h2></label>
                <input type='text' name='name' id='name' value='{{ $post->name }}' >
                <p><h1>{{ __('msg.where_are_you')}}?</h1></p>
                <label for='city'><h2>{{ __('msg.city')}}: </h2></label>
                <input type='text' name='city' id='city' value='{{ $post->city }}'>
                <label for='country'><h2>{{ __('msg.country')}}: </h2></label>
                <input type='text' name='country' id='country' value='{{ $post->country }}'>
                <label for="size"><h2>{{ __('msg.sweater_size')}}:</h2></label>
                <select id="size" name="size" value='{{ $post->size }}'>
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                    <option value="extra-large">Extra Large</option>
                </select>
                <label for='tags'><h2>{{ __('msg.tags')}}: </h2></label>
                <input type='text' name='tags' id='tags' value='{{ $post->tags }}'>
                <label for='photo'><h2>{{ __('msg.upload_photo')}}: </h2></label>
                <input type='file' name='photo' value ='{{ $post->photo }}'>
                <label for='description'><h2>{{ __('msg.description')}}:</h2> </label>
                <textarea name='description' id='description'>{{ $post->description }}</textarea><br><br>
                <button type='submit' class="button">{{ __('msg.save')}}</button>
        </form>
    </div>
</body>

</html>