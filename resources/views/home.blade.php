@section('title')
Programmingster
@endsection
@extends('layouts.master_home')



@section('home_content')

     <!-- ======= Categories Section ======= -->
     <section id="hero">
      <div class="hero-container">
        <h3>Welcome to <strong>Programmingster</strong></h3>
        <h1><q>Make it Work - Make it Right - Make it Fast</q></h1>
        <h2>-- Kent Beck</h2>
        <a href="#category" class="btn-get-started  btn-border">Get Started</a>
      </div>
  </section><!-- End Hero -->
     
  <section id="category" style="text-align:center;">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Categories</h3>
        </header>

        <div class="row about-cols">
          @foreach($category as $item)
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
             <a href="{{url('category/'.$item->id)}}">
            <div class="about-col">
              <div class="img">
                <img src="{{$item ->image}}" alt="" class="img-fluid" style="width:400px;height:200px">
                <div class="icon"><i class="bi bi-file-earmark-code-fill"></i></div>
              </div>
              <h2 class="title"><a href="#">{{$item -> category_name}}</a></h2>
              <p>{{$item ->description}}</p>
            </div>
            </a>
          </div>
            @endforeach

        </div>

      </div>
  </section><!-- End About Us Section -->


    <!-- ======= Latest Articles Section ======= -->
    <section class="section-news section-t8" id="latest" data-aos="fade-up">
      <div class="container">
        <header class="section-header">
          <h3>Latest Posts</h3>
        </header>
        <div class="row about-cols">
        @foreach($latestposts as $item)
        <div class="col-lg-4 col-sm-6 mb-4">
              <article class="card shadow">
                <img class="rounded card-img-top img-fluid" src="{{asset($item->post_img)}}" alt="post-thumb">
                <div class="card-body">
                  <h4 class="card-title"><a class="text-dark" href="{{url('post/'.$item->id)}}">{{$item -> title}}</a>
                  </h4>
                  <p class="cars-text">{{substr(strip_tags($item ->description . '...'),0,40)}}</p>
                  <div class="card-date">
                        <span class="date-b">{{Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</span>
                  </div>
                  <a href="{{url('post/'.$item->id)}}" class="btn btn-xs btn-primary">Read More</a>
                </div>
              </article>
            </div>
            @endforeach
            </div>
         
      </div>
    </section>

@endsection