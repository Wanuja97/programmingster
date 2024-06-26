@section('title')
Search Results
@endsection

@extends('layouts.master_home')
@section('home_content')
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Our Amazing Posts</h1>
              <span class="color-text-a">Search Results</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{url('/')}}">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                 Search Items
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
            @endforeach
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-sm-12">
            <nav class="pagination-a">
              <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">
                    <span class="bi bi-chevron-left"></span>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item next">
                  <a class="page-link" href="#">
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div> -->
      </div>
    </section><!-- End Blog Grid-->
@endsection