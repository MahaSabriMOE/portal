@extends('layouts.app')

@section('content')
<div class="m-5 ">
<form action="/blog" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group py-2">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" aria-describedby="tilte" placeholder="Enter Title">
    </div>
    

    <div class="form-group py-2">
      <label for="postText">Write Your Post Here..</label>
      <textarea  class="form-control" id="postText" name ="postText" placeholder="Enter Post here"></textarea>
    </div>
    <div class="form-group py-2">
        <label for="postImg">Coose Image</label>
        <input type="file" class="form-control" id="postImg" name="postImg">
      
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection