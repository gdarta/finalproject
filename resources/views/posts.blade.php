<x-layout>
    <br><a href="./posts"><h1>{{ __('msg.all_posts')}}</h1></a>
    <form action="./posts/" class="search">
        <input type="text" name="search" placeholder="{{ __('msg.search_sweaters')}}" >
        <button type="submit" class="button">{{ __('msg.search')}}</button>
    </form>
    @if (count($posts) == null)
        <p class='error'>{{ __('msg.there_are_no_records_in_the_database')}}</p>
    @else
        <div class='all-posts'>
            @foreach ($posts as $post)
            @php
                $tags = explode(",", $post->tags);
            @endphp
                <div class="post_display">
                    <h2><a href='./posts/{{ $post->id }}' class="name_link">{{ $post->name }}</a></h2>
                    <img src="{{ $post->photo ? asset('storage/'.$post->photo) : asset('assets/images/no-image.jpg')}}">
                    <p><b>{{ __('msg.owner')}}: </b>{{ $post->user->name }}<p>
                    <p><b>{{ __('msg.posted')}}: </b>{{ $post->created_at }}</p>
                    <p><b>{{ __('msg.location')}}: </b>{{ $post->city }}, {{ $post->country }}</p>
                    <div class="tags">
                    @foreach ($tags as $tag)
                       <a href="./posts/?tag={{ $tag }}" class="tag">{{ $tag }}</a>
                    @endforeach
                    </div>
                    <p><b>{{ __('msg.size')}}: </b>{{ $post->size }}</p>
                    <p><b>{{ __('msg.description')}}: </b>{{ $post->description }}</p>
                </div>
            @endforeach
        </div>
    @endif
    {{ $posts->links() }}
</x-layout>