@extends('layouts.app')

@section('content')





<div class="">
    <h1>All Posts maha</h1>
</div>
@if (Auth::check())
<div>
  <a href="/blog/create">Create Post</a>
</div>
@endif


<div calss="container ">
  @foreach ($posts as $post)
    
   
    <div class="row">

        <div class="col">
          <img src="/images_folder/{{ $post->image_path }}">
        </div>
        <div class="col">
           <h2>{{ $post->title }}</h2>
            <div>
              <span>By.{{$post->user->name}}</span>
              <span>On:{{date('d-m-Y',strtotime($post->updated_at))}}</span>
              <p>{{ $post->descriptions }}</p>
              <a href="/blog/{{ $post->slug }}">Read More</a>
            </div>
        </div>
   </div>
   @endforeach
</div>
@endsection