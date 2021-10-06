@section('title')
Posts
@endsection
@extends('layouts.master_home')
@section('home_content')
<!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Our Amazing Posts</h1>
              <span class="color-text-a"></span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Posts
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- =======  Blog Grid ======= -->
   <section id="category">
      <div class="container" >
        <div class="row about-cols">
          @foreach($posts as $post)
           <div class="col-lg-4 col-sm-6 mb-4">
              <article class="card shadow">
                <img class="rounded card-img-top img-fluid" src="{{asset($post->post_img)}}" alt="post-thumb">
                <div class="card-body">
                  <h4 class="card-title"><a class="text-dark" href="blog-single.html">{{$post -> title}}</a>
                  </h4>
                  <p class="cars-text">{{substr(strip_tags($post ->description . '...'),0,80)}}</p>
                  <div class="card-date">
                        <span class="date-b">{{Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</span>
                  </div>
                  <a href="{{url('post/'.$post->id)}}" class="btn btn-xs btn-primary">Read More</a>
                </div>
              </article>
            </div>
          <!-- <div class="col-md-4" >
             <a href="{{url('post/'.$post->id)}}">
            <div class="about-col" >
              <div class="img">
                <img src="{{asset($post->post_img)}}" alt="" class="img-fluid" style="width:400px;height:200px">
                <div class="icon"><i class="bi bi-code-slash"></i></div>
              </div>
              <h2 class="title"><a href="{{url('post/'.$post->id)}}"> {{$post -> title}}</a></h2>
             <div class="myclass">
               <p>{{substr(strip_tags($post ->description . '...'),0,80)}}</p>
             </div>
             <div class="card-date">
                  <span class="date-b">{{Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</span>
              </div>
            </div>
            
            </a>
          </div> -->
          
            @endforeach
           

        </div>
      </div>
    </section><!-- End Blog Grid-->
