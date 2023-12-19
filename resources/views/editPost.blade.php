@extends('layouts.layout')
@section('title')
Home
@endsection

@section('content')
<x-app-layout>
    <!-- post -->

    <div id="create-post mt-5">

        <form class="search mb-5 container w-50" action="{{ route('updatePost') }}">
            <h1 class="fs-1 text-success">Edit Post</h1>
            <input type="number" hidden name="id" value="{{$postData->id}}">
            <input class="w-100 p-2 mb-5 search-field" type="text" name="title" value="{{ $postData->title }}" placeholder="Title" >

            <input type="file" id="imageInput" accept="image/*" style="display: none;">
            <label for="imageInput" class="btn btn-outline-dark cursor-pointer"><i
                    class="fa-regular fa-image"></i></label>
            <button for="imageInput" class="btn btn-outline-dark cursor-pointer"><i class="fa-solid fa-a"></i></button>


            <textarea name="post_content" type="text" 
                class="w-100 border border-none mt-1" placeholder="Write here..." cols="30" rows="10">{{ $postData->post_content }}</textarea>


            <div class=" mt-5">
                <input type="submit" class="btn btn-success text-dark" value="Talk">
            </div>
        </form>
    </div>
   

</x-app-layout>
@endsection