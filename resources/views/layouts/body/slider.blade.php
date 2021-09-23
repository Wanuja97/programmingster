@php
$sliders = DB::table('sliders')->get();

@endphp

<div class="intro intro-carousel swiper-container position-relative">

    <div class="swiper-wrapper">
      @foreach($sliders as $key=>$slider)  
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url({{asset($slider->image)}})">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    
                    <h1 class="intro-title mb-4 ">
                      <span class="color-b">{{$slider->title}}</span> 
                      
                    </h1>
                    <p class="intro-subtitle intro-price">
                    {{$slider->decription}}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="swiper-pagination"></div>
  </div>