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
            <a href="" class="tag">{{ $tag }}</a>
        @endforeach
        </div>
        <p><b>{{ __('msg.size')}}: </b>{{ $post->size }}</p>
        <p><b>{{ __('msg.description')}}: </b>{{ $post->description }}</p>
    </div>
    @auth
    <form method="POST" action="./{{ $post->id }}/comment">
        @csrf 
        <textarea name='body' id='body' placeholder='Write your comment here...'></textarea><br><br>
        <button type='submit' class="button">Comment</button>
    </form>
    @endauth

    @if (count($comments) == NULL)
        <p>Be the first to comment...</p>
    @else
    @foreach ($comments as $comment)
        <h3>{{ $comment->user->name }} said: <h3>
        <p>{{ $comment->body }}</p>
    @endforeach
    {{ $comments->links() }}
    @endif
</x-layout>