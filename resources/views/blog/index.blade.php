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

<!-- *****************************************************************************************************************-->
<div class="row">

  <!-- Column -->
  <div class="col-lg-12 col-xlg-12 col-md-12">
      <div class="card">
          <div class="">
          </div>
          <div class="card-body">

              <div class="white-box">
                  <a class="btn btn-outline-primary mb-2" title="إضافة خبر" href="http://www.tulkarm.edu.ps/admin/news/add-news"><i class="fas fa-plus"></i></a><a>

                  <div class="table-responsive">
                      <table class="table text-nowrap">
                          <thead>
                              <tr>
                                  <th class="border-top-0">الرقم</th>
              
                                  <th class="border-top-0">عنوان الخبر</th>
                                  <th class="border-top-0">الوصف</th>

                                  <th class="border-top-0"></th>
                              </tr>
                          </thead>
                          <tbody>
                              
                            @foreach ($posts as $post)
                              <tr>
                                  <td>{{ $post->id }}</td>
                                  <td>{{ $post->title }}</td>
                                  <td> <p class="col-5 text-truncate">{{ $post->descriptions }}  <br>

                                  </p></td>


                                  <td>
                                    <img  src="/images_folder/{{ $post->image_path }}" alt="Responsive image">




                                  </td>
                                  <td>
                                  <a title="عرض" href="http://www.tulkarm.edu.ps/admin/news/news-show/5" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                  <a title="تعديل" href="http://www.tulkarm.edu.ps/admin/news/news-edit/5" class="btn btn-warning"><i class=" fas fa-pencil-alt"></i></a>
                                  <a title="حذف" href="http://www.tulkarm.edu.ps/admin/news/deletefile/5" class="btn btn-danger"><i class=" fas fa-trash-alt"></i></a>
                                  </td>
                              </tr>
                              

                              @endforeach
                              
                          </tbody>
                      </table>
                  </div>
              </a></div><a>

          </a></div><a>
      </a></div><a>
  </a></div><a>
  <!-- Column -->
</a></div>


    
@endsection
