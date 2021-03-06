@extends('layout')

@section('content')

<div class="h-screen flex flex-wrap content-center">
  <div class="w-4/5 md: text-center mx-auto">
    <h1 class="text-3xl md:text-5xl mb-5">Welcome to Volv Media Assignement</h1>
    <a
      href="{{route('articles.index')}}" 
      class="bg-blue-700 border-2 border-blue-700 inline-block px-5 py-2 rounded-md duration-200 m-2 text-gray-200 font-normal block hover:shadow-xl hover:bg-white hover:text-blue-700">
      Articles
    </a>
  </div>
</div>
@endsection