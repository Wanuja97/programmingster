@section('title')
About
@endsection
@extends('layouts.master_home')


@section('home_content')
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">About</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  About
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->
   <section class="section-about">
      <div class="container">
        <div class="row">
            
          <div class="col-md-12 section-t8 position-relative">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <img src="{{asset('images/author.jpg')}}" alt="" class="img-fluid" style="-webkit-box-shadow: -15px -10px 19px -5px rgba(98,100,110,0.75);
-moz-box-shadow: -15px -10px 19px -5px rgba(98,100,110,0.75);
box-shadow: -15px -10px 19px -5px rgba(98,100,110,0.75);" >
              </div>
              <div class="col-lg-2  d-none d-lg-block position-relative">
                <div class="title-vertical d-flex justify-content-start">
                  <span>About Author</span>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 section-md-t3">
                <div class="title-box-d">
                  <h3 class="title-d">
                    Nimash Wanuja
                    <br> Ranasinghe
                  </h3>
                </div>
                <p class="color-text-a">
                 I am an Undergraduate from University of Moratuwa, Faculty of Information Technology, eagerly looking for opportunities to broaden the knowledge on the craft of Software Engineering.

                </p>
                <p class="color-text-a">
                  I believe myself to be capable of achieving great things through hard and smart work using knowledge, leadership and personal skills. I am also a multi tasking individual contributing to both academics and youth activities. The passion to take responsibilities, the strive to win, seeking new knowledge, never giving up have been my key strengths.
                </p>
                
                <p>
                  <strong>Mobile: </strong>
                  <span class="color-text-a">+94775576412</span>
                </p>
                <p>
                  <strong>Email: </strong>
                  <span class="color-text-a"> wanuja18@gmail.com</span>
                </p>                                                                                                  <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="https://www.facebook.com/nalaka.ranasinghe.739/" class="link-one">
                          <i class="bi bi-facebook" target="_blank" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="https://github.com/Wanuja97" target="_blank" class="link-one">
                          <i class="bi bi-github" aria-hidden="true"></i>
                        </a>
                      </li>
                      
                      <li class="list-inline-item">
                        <a href="https://www.linkedin.com/in/wanujaranasinghe/" class="link-one" target="_blank">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
              </div>
              
                    
                  
                      
                  
            
          </div>
        </div>
      </div>
    </section>


@endsection