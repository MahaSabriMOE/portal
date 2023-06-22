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
  

   <div class="row justify-content-right">

  <!-- only loop the columns -->
  @foreach ($posts as $post)
  <div class="col-sm-3 p-2"> <!-- not "col-sm-3" -->
    <div class="card ">
      <img class="card-img" src="/images_folder/{{ $post->image_path }}" alt="Responsive image">
      <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
    <p class="card-text col-5 text-truncate">{{ $post->descriptions }}</p>

    <div>
      <span>By.{{$post->user->name}}</span>
      <span>On:{{date('d-m-Y',strtotime($post->updated_at))}}</span>
    </div>
    <a href="/blog/{{ $post->slug }}" class="btn btn-primary">للمزيد من التفاصيل</a>
      </div>
    </div>
  </div>
  @endforeach

</div>









    
@endsection
