@auth
                    
<x-panel>

    <form action="{{ url('/posts/'.$post->slug.'/comment') }}" method="POST">
        @csrf
        
        <header class="flex items-center">
            <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full">
            <h2 class="ml-4">Want to participate ?</h2>
        </header>

        <div class="mt-6">
            <textarea required name="body" class="w-full text-sm focus:outline-none focus:ring" cols="30" rows="5" placeholder="Quick, think of something to say !"></textarea>

            @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror

        </div>

        <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
            <x-submit-button>Post</x-submit-button>
        </div>
    </form>
</x-panel>

@else

<p class="font-semibold">
    <a href="{{ url('/register') }}" class="text-blue-500 hover:underline">Register</a> or <a href="{{ url('/login') }}" class="text-blue-500 hover:underline">Log in</a> to participate.
</p>

@endauth