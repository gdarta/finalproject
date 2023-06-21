<x-layout>
    <h1>{{ $post->name }}</h1>
    <div class='single_post'>
        @php
            $tags = explode(",", $post->tags);
        @endphp
        <img src="{{ $post->photo ? asset('storage/'.$post->photo) : asset('assets/images/no-image.jpg')}}">
        <p><b>{{ __('msg.owner')}}: </b>{{ $post->user->name }}<p>
        <p><b>{{ __('msg.posted')}}: </b>{{ $post->created_at }}</p>
        <p><b>{{ __('msg.location')}}: </b>{{ $post->city }}, {{ $post->country }}</p>
        <div class="tags">
        @foreach ($tags as $tag)
            <a href="./?tag={{ $tag }}" class="tag">{{ $tag }}</a>
        @endforeach
        </div>
        <p><b>{{ __('msg.size')}}: </b>{{ $post->size }}</p>
        <p><b>{{ __('msg.description')}}: </b>{{ $post->description }}</p>
    </div>

    <div style="border: 5px outset red; border-radius: 20px; width: 30%; margin-left: auto; margin-right: auto; padding:10px;">
        <form method="POST" action="./{{ $post->id }}/comment">
            @csrf 
            <textarea name='body' id='body' placeholder="{{ __('msg.write_comment')}}"></textarea><br><br>
            <button type='submit' class="button">Comment</button>
        </form>
            @if (count($comments) == NULL)
                <p>Be the first to comment...</p>
            @else
            @foreach ($comments as $comment)
                <p><strong><i>{{ $comment->user->name }}</i> {{ __('msg.said_comment')}}: </strong> {{ $comment->body }}</p>
            @endforeach
            {{ $comments->links() }}
            @endif
    </div>
</x-layout>