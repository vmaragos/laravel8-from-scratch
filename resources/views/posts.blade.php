<x-layout>
    @foreach ($posts as $post)
    <article>
        <h1>
            <a href="{{url('post/'.$post->slug)}}">
                {!! $post->title !!}
            </a>
        </h1>
        {{-- <p>
            <a href="{{ url('categories/'. $post->category->slug) }}">{{$post->category->name}}</a>
        </p> --}}
        <p>
            Author: <a href="{{url('authors/'.$post->author->username)}}">{{ $post->author->name }}</a>, Category: <a href="{{ url('categories/'. $post->category->slug) }}">{{$post->category->name}}</a>.
        </p>

        <div>
            {!!$post->excerpt!!}
        </div>
    </article>

    @endforeach
</x-layout>