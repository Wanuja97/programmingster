<!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Post</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a" action="{{route('searchresults')}}" method="POST">
        @csrf 
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Keyword</label>
              <input type="text" name="keyword"class="form-control form-control-lg form-control-a" placeholder="Keyword" required>
            </div>
          </div>
          
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Post</button>
          </div>
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->>
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <img src="{{asset('images/navbarlogo1.png')}}" alt="logo" class="img-b img-fluid">

      <div class="navbar-collapse collapse justify-content-right" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" href="{{route('home')}}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{url('/about')}}">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{url('/contact')}}">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route('privacypolicy')}}">Privacy policy</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>
      

    </div>
  </nav>
  