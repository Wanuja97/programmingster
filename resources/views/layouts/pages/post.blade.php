@section('title')
{{$post->title}}
@endsection

@extends('layouts.master_home')
@section('home_content')
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">{{$post->title}}</h1>
              
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->
    <br>
    <section class="news-single nav-arrow-b">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="news-img-box d-flex justify-content-center" >
              <img src="{{asset($post->post_img)}}" alt="" class="img-b img-fluid" >
            </div>
          </div>
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <div class="post-information">
              <ul class="list-inline text-center color-a">
                <li class="list-inline-item mr-2">
                  <strong>Author: </strong>
                  <span class="color-text-a">{{$post->user->name}}</span>
                </li>
                <!-- <li class="list-inline-item mr-2">
                  <strong>Category: </strong>
                  <span class="color-text-a"></span>
                </li> -->
                <li class="list-inline-item">
                  <strong>Date: </strong>
                  <span class="color-text-a">{{ date('M j, Y', strtotime($post->created_at))}}</span>
                </li>
              </ul>
            </div>
            <div class="post-content color-text-a">
             {!! html_entity_decode($post->content)  !!}
            </div>
            <div class="post-footer">
              <div class="post-share">
                <span>Share: </span><br>
                
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"
              </div>
            
               
              </div>
            </div>
          </div>
          <div id="disqus_thread"></div>
          <script>
              var disqus_config = function () {
              this.page.url = '{{\Illuminate\Support\Facades\Request::url()}}';  // Replace PAGE_URL with your page's canonical URL variable
              this.page.identifier = '{{$post->id}}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
              };
              
              (function() { // DON'T EDIT BELOW THIS LINE
              var d = document, s = d.createElement('script');
              s.src = 'https://programmingster.disqus.com/embed.js';
              s.setAttribute('data-timestamp', +new Date());
              (d.head || d.body).appendChild(s);
              })();
          </script>
          <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
         
        </div>
      </div>
    </section><!-- End Blog Single-->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6154429420af3516"></script>
@endsection
