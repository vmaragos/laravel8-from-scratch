<x-layout>

    <article>
        <h1>{{ $post->title }}</h1>

        <p>
            Author: <a href="{{url('authors/'.$post->author->username)}}">{{ $post->author->name }}</a>, Category: <a href="{{ url('categories/'. $post->category->slug) }}">{{$post->category->name}}</a>.
        </p>

        <div>
            {!!$post->body!!}
        </div>
    </article>
    <a href="{{url('/')}}"><-- Back to Main page</a>
</x-layout>
