@section('title')
Programmingster
@endsection
@extends('layouts.master_home')



@section('home_content')

     <!-- ======= Categories Section ======= -->
     <section id="hero">
      <div class="hero-container">
        <h3>Welcome to <strong>Programmingster</strong></h3>
        <h1>Sample h1 title goes here</h1>
        <h2>Sample h2 Description goes here</h2>
        <a href="#category" class="btn-get-started scrollto btn-border">Get Started</a>
      </div>
  </section><!-- End Hero -->
     
  <section id="category">
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
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad doloribus unde, odio sed est doloremque, voluptatibus,.</p>
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
          <h3>Latest Articles</h3>
        </header>
        
        
         <div id="property-carousel" class="swiper-container">
          <div class="swiper-wrapper">
            @foreach($latestposts as $item)
            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="{{asset($item->post_img)}}" alt="" class="img-b img-fluid" >
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="{{url('post/'.$item->id)}}">
                          <br> {{$item ->title}}</a>
                      </h2>
                      <p>{{substr(strip_tags($item ->description . '...'),0,80)}}</p>
                    </div>
                    <div class="card-category-b">
                      <a href="{{url('post/'.$item->id)}}" class="category-b">View More</a>
                    </div><br>
                    <div class="card-date">
                      <span class="date-b">{{Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</span>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
          <div class="news-carousel-pagination carousel-pagination"></div> 
        <!-- <div class="news-carousel-pagination carousel-pagination"></div>-->
      </div>
    </section>

@endsection