<x-dropdown>

    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
            
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"/>
        </button>
    </x-slot>

    <x-dropdown-item href="{{ url('/') }}" :active="request()->routeIs('home')">All Categories</x-dropdown-item>
    {{-- <x-dropdown-item href="{{ url('/') }}">All Categories</x-dropdown-item> //Alternative way to link to home page --}}
    @foreach ($categories as $category)
        <x-dropdown-item 
        href="{{ url('/?category='.$category->slug) }}" 
            {{-- :active="isset($currentCategory) && $currentCategory->is($category)"  // Alternative way to find which category is the current one --}}
            :active="request()->is('categories/'.$category->slug)"
            >{{ ucwords($category->name) }}</x-dropdown-item>
    @endforeach
</x-dropdown>