@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-left my-5">
        <div>
            <h1 class="text-6xl">
                Create Post
            </h1>
        </div>
    </div>

    @if ($errors->any())
        <div class="w-4/5 m-auto">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="w-1/5 mb-4 text-gray-50 bg-sea-green-500 rounded-2xl py-4">
                        {{ $error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="w-4/5 m-auto pt-20">
        <form action="/blog" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title" placeholder="Title..." 
            class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none" ></input>

            <textarea name="description" placeholder="Description..." 
            class="py-24 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

            <div class="bg-grey-lighter pt-16">
                <label class="w-44 flex flex-col items-center py-3 bg-sea-green-500 rounded-3xl text-white font-extrabold tracking-wide cursor-pointer">
                    <span class="my-auto text-base leading-normal">
                        Select a file
                    </span>
                    <input 
                        type="file" name="image" class="hidden">
                </label>
            </div>

            <button type="submit" class="mt-8 bg-merlin-500 text-white text-lg font-extrabold py-2 px-4 rounded-3xl">
                Submit Post
            </button>

        </form>
    </div>





@endsection
