<x-layout>    

    @include('_posts-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        
        @if( $posts->count() )
            <x-posts-grid :posts="$posts" />
        @else
                <p class="text-center">No posts yet. Please check back later.</p>
        @endif

      {{--  <div class="lg:grid lg:grid-cols-3">

            <x-post-card />
            <x-post-card />
            <x-post-card />

        </div> --}}
    </main>

    
    {{-- @foreach ($posts as $post)
    <article>
        <h1>
            <a href="{{url('post/'.$post->slug)}}">
                {!! $post->title !!}
            </a>
        </h1>
        <p>
            Author: <a href="{{url('authors/'.$post->author->username)}}">{{ $post->author->name }}</a>, Category: <a href="{{ url('categories/'. $post->category->slug) }}">{{$post->category->name}}</a>.
        </p>

        <div>
            {!!$post->excerpt!!}
        </div>
    </article>

    @endforeach --}}

</x-layout>