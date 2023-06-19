@extends('layouts.app')

@section('content')
@if (session()->has('success'))
        <div class="alert alert-success">
           <h1>{!! session()->get('success')!!} </h1>        
        </div>
@endif
  
  

<h1>this is show post page</h1>
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
          
        </div>
    </div>
</div>
@if(Auth::user() && Auth::user()->id == $post->user_id)
<div>
    <a href="/blog/{{ $post->slug }}/edit">Edit Post</a>
</div>
@endif



@endsection