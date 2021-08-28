@extends('layout')

@section('content')

<div class="container rounded overflow-hidden shadow-lg mx-auto mt-5 bg-white">
  <div class="px-6 py-4">
    <span class="float-right bg-gray-300 px-3 rounded-full">Tag</span>
    <div class="font-bold text-xl mb-2 border-b  border-blue-700 pb-2">{{ $article->title }}</div>

    <div class="mt-3">
      <img src="{{ asset('storage/' . $article->image) }}" alt="">
      {{asset('storage/' . $article->image)}}
      {{ $article->body }}
    </div>

    <div class="mt-3 mb-20">
      <a class="float-right font-normal bg-transparent border-transparent border-2 hover:border-gray-400 inline-block px-5 py-2 rounded-md duration-200 mt-4 text-gray-400 font-normal block hover:shadow-xl hover:bg-white hover:bg-gray-100 hover:text-gray-500" href="{{route('articles.index')}}">Back</a>
    </div>
  </div>
</div>



@endsection