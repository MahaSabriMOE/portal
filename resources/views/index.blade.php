@extends('layouts.app')

@section('content')


<!--<img src="/images_folder/cover.jpg" class="img-fluid" alt="">-->
<!--Carousel-->

  
  <!-- Hero -->
<div class="p-5 text-center bg-image rounded-3" style="
background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
height: 400px;
">

<div class="d-flex justify-content-center align-items-center h-100">
  <div class="text-white">
    <h1 class="mb-3">ترويسة </h1>
    <h4 class="mb-3">This is Index page</h4>
    <a class="btn btn-outline-light btn-lg" href="#!" role="button">Call to action</a>
  </div>
</div>
</div>
</div>
<!-- Hero -->
</header>


  
  
  <!-- Counters-->
  <div class="container">
    <div class="row">
        <br/>
       <div class="col text-center">
      <h2>قالب عدادات</h2>
      <p>counter to count up to a target number</p>
      </div>
      
               
      
    </div>
  
      <div class="row text-center">
            <div class="col">
            <div class="counter">
        <i class="fa fa-code fa-2x"></i>
        <h2 class="timer count-title count-number" data-to="{{ $postsCount }}" data-speed="1500"></h2>
         <p class="count-text ">عدد المواضيع</p>
      </div>
            </div>
                <div class="col">
                 <div class="counter">
        <i class="fa fa-coffee fa-2x"></i>
        <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
        <p class="count-text ">Happy Clients</p>
      </div>
                </div>
                <div class="col">
                    <div class="counter">
        <i class="fa fa-lightbulb-o fa-2x"></i>
        <h2 class="timer count-title count-number" data-to="11900" data-speed="1500"></h2>
        <p class="count-text ">Project Complete</p>
      </div></div>
                <div class="col">
                <div class="counter">
        <i class="fa fa-bug fa-2x"></i>
        <h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
        <p class="count-text ">Coffee With Clients</p>
      </div>
                </div>
           </div>
  </div>

  

  




@endsection
