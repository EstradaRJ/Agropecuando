@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center my-5">
        <div>
            <h1 class="text-6xl">
                Blog Post
            </h1>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="w-1/6 mb-4 font-bold text-white rounded-3xl py-4 px-4 bg-sea-green-500">
                {{ session()->get('message') }}
            </p>

        </div>
    @endif

    @if (Auth::check())
    <div class="py-6 w-4/5 m-auto">
        <a href="/blog/create" class="bg-merlin-500 text-white text-lg font-extrabold py-2 px-6 rounded-3xl">
            Create a Post
        </a>

    </div>
    @endif

    @foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 ">
        <div class="my-3">
            <img src="{{ asset('images/' . $post->image_path) }}" width="" alt="">
        </div>
        <div>
            <h2 class="text-sea-green-500 font-bold text-4xl py-4">
                {{ $post->title}}
            </h2>

            <span class="text-sea-green-500">
                By <span class="font-bold italic text-merlin-500">{{ $post->user->name }}</span>, Created on {{date('jS M Y', strtotime($post->updated_at))}}
            </span>

            <p class="text-xl text-merlin-500 pt-8 pb-10 leading-8 font-light">
                {{ $post->description }}
            </p>

            <a href="/blog/{{ $post->slug }}" class="bg-merlin-500 text-white text-lg font-extrabold py-2 px-6 rounded-3xl" href="/blog">
                Keep Reading
            </a>

            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <span class="float-right">
                    <a 
                        href="/blog/{{ $post->slug }}/edit"
                        class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                        Edit
                    </a>
                </span>

                <span class="float-right">

                    <form action="/blog/{{ $post->slug }}" method = "POST">
                        @csrf    
                        @method('delete')

                        <button class = "text-torch-red-700 pr-3" type = "submit">
                            Delete
                        </button>

                    </form>    
                </span>

            @endif
        </div>
    </div>
    @endforeach



@endsection
