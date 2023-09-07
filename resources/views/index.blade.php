@extends('layouts.app')

@section('content')
  <div class="background-image grid grid-cols-1 mt-0 h-screen ">
    <div class="flex text-white">
      <div class="m-auto pt-4 pb-16 sm:m-auto w-2/4 block text-center">
        <h1 class="sm:text-white text-5xl font-bold pb-14">
        Spreading <span class="text-candy-corn-500">knowledge</span> gained throught experience in <span class="text-candy-corn-500">agriculture</span>
        </h1>
        <p
          class="text-center font-light text-white py-2 px-4 font-bold text-xl ">
          This blog shares knowledge in the agricultural and livestock sector, based on the experience of producers. Everyone is welcome as long as they have something to contribute, techniques and cultures must always be transmitted.
        </p>
      </div>
    </div>
  </div>

  <div class="bg-sea-green-500 w-auto">
    <div class="flex text-white">
        <div class="m-auto py-6 sm:m-auto w-2/4 block text-center">
          <h2 class="text-3xl font-bold py-6 ">
          About <span class="text-candy-corn-500">US</span>
          </h2>
        </div>
    </div>

      <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 ">
      <div class="m-auto sm:m-auto text-center w-4/5 block ">

        <div>
          <img class="mx-auto pb-8" src="/images/agriculture.svg" width="" alt="">
        </div>

        
        <h2 class="font-extrabold text-candy-corn-500 text-xl">
            Agriculture
        </h2>

        <p class="py-8 text-white text-lg pb-36">
          This blog shares knowledge in the agricultural and livestock sector, based on the experience of producers. Everyone is welcome as long as they have something to contribute, techniques and cultures must always be transmitted.
        </p>
      </div>

      <div class="m-auto sm:m-auto text-center w-4/5 object-center">

        <div>
          <img class="mx-auto pb-8" src="/images/cowface.svg" width="" alt="">
        </div>

        <h2 class="font-extrabold text-candy-corn-500 text-xl">
            Livestock
        </h2>

        <p class="py-8 text-white text-lg pb-36">
        This blog shares knowledge in the agricultural and livestock sector, based on the experience of producers. Everyone is welcome as long as they have something to contribute, techniques and cultures must always be transmitted.
        </p>
      </div>
    </div>
  </div>

  <div class="flex text-merlin-500">
      <div class="m-auto py-6 sm:m-auto w-2/4 block text-center">
        <h2 class="text-3xl font-bold py-6">
          Recent <span class="text-sea-green-500">Post</span>
        </h2>
      </div>

  </div>

  <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto">
    
    <div>
      <img src="https://cdn.pixabay.com/photo/2016/09/21/04/46/barley-field-1684052_960_720.jpg" width="" alt="">
    </div>

    <div class="m-auto sm:m-auto text-left w-4/5 block">

      <h2 class="text-3xl font-extrabold text-sea-green-500">
        Wheat Prices This Year
      </h2>

      <p class="py-6 text-black text-s">
        This blog shares knowledge in the agricultural and livestock sector, based on the experience of producers. Everyone is welcome as long as they 
      </p>

      <p class="font-extrabold text-sea-green-500 pb-8">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, repellendus.
      </p>

      <a class="bg-merlin-500 text-white text-lg font-extrabold py-2 px-6 rounded-3xl" href="/blog">
        Keep Reading
      </a>
    </div>

  </div>
  

@endsection