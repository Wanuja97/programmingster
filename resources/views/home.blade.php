@section('title')
Programmingster
@endsection
@extends('layouts.master_home')
@include('layouts.body.slider')
@section('home_content')

     <!-- ======= Categories Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Categories</h2>
              </div>
            </div>
          </div>
        </div>
        
        <div id="property-carousel" class="swiper-container">
          <div class="swiper-wrapper">
            @foreach($category as $item)
            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="{{$item ->image}}" alt="" class="img-a img-fluid" style="width:500px;height:300px">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="{{url('category/'.$item->id)}}">{{$item -> category_name}}
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <a href="{{url('category/'.$item->id)}}" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->
        @endforeach
            
        <!-- <div class="propery-carousel-pagination carousel-pagination"></div> -->
        
      </div>
    </section><!-- End Categories Section -->


    <!-- ======= Latest Articles Section ======= -->
    <section class="section-news section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Latest Articles</h2>
              </div>
              <div class="title-link">
                <a href="blog-grid.html">All Articles
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="news-carousel" class="swiper-container">
          <div class="swiper-wrapper">
            @foreach($latestposts as $item)
            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="{{asset($item->post_img)}}" alt="" class="img-b img-fluid" style="width:500px;height:300px">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="{{url('post/'.$item->id)}}" class="category-b">View More</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="blog-single.html">
                          <br> {{$item ->title}}</a>
                      </h2>
                      <p>{{substr(strip_tags($item ->description . '...'),0,80)}}</p>
                    </div>
                    <div class="card-date">
                      <span class="date-b">{{Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->
            @endforeach
          </div>
        </div>

        <!-- <div class="news-carousel-pagination carousel-pagination"></div> -->
      </div>
    </section><!-- End Latest Articles Section -->

@endsection