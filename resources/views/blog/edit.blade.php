@extends('layouts.app')

@section('content')
<div class="m-5 ">
    <h1>تعديل الموضوع</h1>
<form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')


    <div class="form-group py-2">
      <label for="title">Title</label>
      <input type="text" name="title" class="form-control" id="title" aria-describedby="title" value="{{ $post->title }}">
    </div>
    

    <div class="form-group py-2">
      <label for="postText">Write Your Post Here..</label>
      <textarea  class="form-control" id="postText" name ="postText" >{{ $post->descriptions }}</textarea>
    </div>
    <div class="form-group py-2">
        <label for="postImg">Coose Image</label>
        <input type="file" class="form-control" id="postImg" name="postImg">
      
    </div>

    <div class="form-group py-2">
      <label for="yturl">Video</label>
      <input type="text" name="yturl" class="form-control" id="yturl" aria-describedby="yturl" value="{{ $post->yturl }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection