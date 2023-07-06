@extends('layouts.app')

@section('content')


<h1>This is Index page</h1>
<!--<img src="/images_folder/cover.jpg" class="img-fluid" alt="">-->
<!--Carousel-->
<header>
  <h1>This is header section</h1>
  
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
</header>

@endsection