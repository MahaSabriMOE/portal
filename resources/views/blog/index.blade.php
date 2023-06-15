@extends('layouts.app')

@section('content')





<div class="">
    <h1>All Posts</h1>
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
          <img src="https://picsum.photos/200/300">
        </div>
        <div class="col">
           <h2>{{ $post->title }}</h2>
            <div>
              <span>By.{{$post->user->name}}</span>
              <span>On:{{date('d-m-Y',$post->updated_at)}}</span>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              <a href="/blog/{{ $post->slug }}">Read More</a>
            </div>
        </div>
   </div>
   @endforeach
</div>
@endsection