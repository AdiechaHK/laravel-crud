@extends('layout')

@section('content')

<div class="container rounded overflow-hidden shadow-lg mx-auto mt-5 bg-white">
  
  <form
    enctype="multipart/form-data"
    action="{{ @$article? route('articles.update', $article->id): route('articles.store') }}"
    method="POST">
    @csrf
    
    @if(@$article)
      @method('PUT')
    @endif

    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2 border-b  border-blue-700 pb-2">Article</div>

      <div class="mt-3">
        @if(@$errors && $errors->has('title'))
          <span class="float-right text-sm text-red-700 font-normal">{{$errors->first('title')}}</span>
        @endif
        <label class="block">Title</label>
        <input
          type="text"
          class="border-2 border-gray-400 w-full p-2 rounded hover:border-blue-700 active:border-blue-700 focus:border-blue-700 outline-none"
          placeholder="Title"
          name="title"
          value="{{old('title', @$article->title)}}">
      </div>

      <div class="mt-3">
        @if(@$errors && $errors->has('body'))
          <span class="float-right text-sm text-red-700 font-normal">{{$errors->first('body')}}</span>
        @endif
        <label class="block">Body</label>
        <textarea
          class="border-2 border-gray-400 w-full p-2 rounded hover:border-blue-700 active:border-blue-700 focus:border-blue-700 outline-none"
          placeholder="Start writing your article..."
          name="body"
          rows="20">{{old('body', @$article->body)}}</textarea>
      </div>

      <div class="mt-3">
        @if(@$errors && $errors->has('image'))
          <span class="float-right text-sm text-red-700 font-normal">{{$errors->first('image')}}</span>
        @endif
        <label class="block">Image</label>
        <input
          type="file"
          class="border-2 border-gray-400 w-full p-2 rounded hover:border-blue-700 active:border-blue-700 focus:border-blue-700 outline-none"
          placeholder="Select an image"
          name="image">
        {{ @$article->image }}
      </div>

      <div class="mt-3">
        @if(@$errors && $errors->has('category'))
          <span class="float-right text-sm text-red-700 font-normal">{{$errors->first('category')}}</span>
        @endif
        <label class="block">Category</label>
        <select
          class="border-2 border-gray-400 w-full p-2 rounded hover:border-blue-700 active:border-blue-700 focus:border-blue-700 outline-none"
          placeholder="Select Category"
          name="category"
          >
          <option {{old('category', @$article->title) == 'sport' ? "selected": ""}} value="sport">Sport</option>
          <option {{old('category', @$article->title) == 'sci_tech' ? "selected": ""}} value="sci_tech">Science & tech</option>
          <option {{old('category', @$article->title) == 'pop_culture' ? "selected": ""}} value="pop_culture">Pop Culture</option>
        </select>
      </div>

      <div class="mt-3">
        <button class="bg-blue-700 border-2 font-normal border-blue-700 inline-block px-5 py-2 rounded-md duration-200 mt-4 text-gray-200 font-normal block hover:shadow-xl hover:bg-white hover:text-blue-700" type="submit"> Save </button>
        <a class="float-right font-normal bg-transparent border-transparent border-2 hover:border-gray-400 inline-block px-5 py-2 rounded-md duration-200 mt-4 text-gray-400 font-normal block hover:shadow-xl hover:bg-white hover:bg-gray-100 hover:text-gray-500" href="{{route('articles.index')}}">Back</a>
      </div>
    </div>
  </form>
</div>



@endsection