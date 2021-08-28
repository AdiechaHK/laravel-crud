@extends('layout')

@section('content')


<div class="container mx-auto pt-5">

  <a href="{{route('articles.create')}}"
    class="float-right bg-blue-700 border-2 border-blue-700 inline-block px-5 py-2 rounded-md duration-200 mt-4 text-gray-200 font-normal block hover:shadow-xl hover:bg-white hover:text-blue-700"
  >Create</a>
  <h1 class="text-3xl md:text-5xl mb-5">Article list</h1>
  
  @if(count($articles) > 0)
  <table class="w-full border-collapse border border-green-800 bg-green-200 mt-6">
    <thead>
      <tr>
        <th class="bg-green-700 text-gray-200 p-2 text-left">Title</th>
        <th class="bg-green-700 text-gray-200 p-2 text-left">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($articles as $article)
      <tr class="hover:bg-green-400 duration-200">
        <td class="border border-green-800 p-2 text-left">
          <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
        </td>
        <td class="border border-green-800 p-2 text-left">
          <form action="{{route('articles.destroy', $article->id)}}" method="POST" class="flex gap-2">
            @method('DELETE')
            @csrf
            <a class="duration-200 rounded px-2 hover:text-gray-200  font-normal hover:bg-blue-700" href="{{route('articles.edit', $article->id)}}">Edit</a>
            <button class="duration-200 rounded px-2 hover:text-gray-200 font-normal hover:bg-red-700" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="mt-3">
    {{ $articles }}
  </div>
  @else
  <div>No articles to show</div>
  @endif  
  </div>
@endsection