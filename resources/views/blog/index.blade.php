@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
    <h1 class="p-5">كافة المواضيع</h1>
   
</div>

@if (session()->has('success'))
<div class="alert alert-info">
   <h1>{!! session()->get('success')!!} </h1>        
</div>
@endif





<!-- don't loop here -->
<div class="row justify-content-center mx-5 ">
  
    @if (Auth::check())
      <a href="/blog/create" class="btn btn-success my-3 mx-2">أنشئ موضوعاً جديداً</a>
    @endif
    
    <div class="card-deck">
    @foreach ($posts as $post)

    <div class="card">
      <img class="card-img-top img-thumbnail" src="images_folder/{{ $post->image_path }}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{  $post->title }}</h5>
        <p class="card-text text-truncate">{{  $post->descriptions }}</p>
        <a href="/blog/{{ $post->slug }}" class="btn btn-primary">أقرأ المزيد</a>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated On:{{date('d-m-Y',strtotime($post->updated_at))}}</small>
        <small>By.{{$post->user->name}}</small>
      </div>
    </div>
       
    @endforeach
    </div><!--cards conrainer-->
    
</div>





    
@endsection
