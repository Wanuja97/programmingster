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
              <span class="color-text-a"> News</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  News Grid
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- =======  Blog Grid ======= -->
    <section class="news-grid grid">
      <div class="container">
        <div class="row">
          @foreach($posts as $post)
          <div class="col-md-4">
            <div class="card-box-b card-shadow news-box">
              <div class="img-box-b">
                <img src="{{asset($post->post_img)}}" alt="" class="img-b img-fluid" style="width:500px;height:500px">
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  <div class="card-category-b">
                    <a href="{{url('post/'.$post->id)}}" class="category-b">View More</a>
                  </div>
                  <div class="card-title-b">
                    <h2 class="title-2">
                      <a href="blog-single.html">
                        <br> {{$post -> title}}</a>
                    </h2>
                     <p>{{substr(strip_tags($post ->description . '...'),0,80)}}</p>
                  </div>
                  <div class="card-date">
                    <span class="date-b">{{Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        
      </div>
    </section><!-- End Blog Grid-->
@endsection