@extends('layouts.app')

@section('content')
<div class="m-5 ">
  <h1>أضف موضوعا جديدا</h1>
<form action="/blog" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group py-2">
      <label for="title">Title</label>
      <input type="text" name="title" class="form-control" id="title" aria-describedby="title" placeholder="Enter Title">
    </div>
    

    <div class="form-group py-2">
      <label for="postText">Write Your Post Here..</label>
      <textarea  class="form-control" id="postText" name ="postText" placeholder="Enter Post here"></textarea>
    </div>
    <div class="form-group py-2">
        <label for="postImg">Coose Image</label>
        <input type="file" class="form-control" id="postImg" name="postImg">
      
    </div>

    <div class="form-group py-2">
      <label for="yturl">Video ID</label>
      <input type="text" name="yturl" class="form-control" id="yturl" aria-describedby="yturl" placeholder="Enter YouTube URL">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection