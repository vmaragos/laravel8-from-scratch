<x-layout>
    @foreach ($posts as $post)
    <article>
        <h1>
            <a href="{{url('post/'.$post->slug)}}">
                {!! $post->title !!}
            </a>
        </h1>
        <p>
            {{-- @dd($post->category->id); --}}
            <a href="{{ url('categories/'. $post->category->slug) }}">{{$post->category->name}}</a>
        </p>
        <div>
            {!!$post->excerpt!!}
        </div>
    </article>

    @endforeach
</x-layout>