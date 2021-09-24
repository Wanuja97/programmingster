 <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/index.html">
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33"
                >
                  <g fill="none" fill-rule="evenodd">
                    <path
                      class="logo-fill-blue"
                      fill="#7DBCFF"
                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                    />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>
                <span class="brand-name">Programmingster</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                
                 <li  class="has-sub active expand" >
                    <a class="sidenav-item-link" href="/">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">User View</span> 
                    </a>
                </li>
            
                  <li  class="has-sub active">
                    <a class="sidenav-item-link" href="{{route('dashboard')}}" 
                      >
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Dashboard</span>
                    </a>
                   
                  </li>
                

                

                
                  <li  class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#categories"
                      aria-expanded="false" aria-controls="categories">
                      <i class="mdi mdi-folder-multiple-outline"></i>
                      <span class="nav-text">Categories</span> 
                    </a>
                     <ul  class="collapse show"  id="categories"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                              <li  class="active" >
                                <a class="sidenav-item-link" href="{{route('all.category')}}">
                                  <span class="nav-text">All Categories</span>
                                  
                                </a>
                              </li>
                      </div>
                    </ul>
                  </li>

                  <li  class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#contact"
                      aria-expanded="false" aria-controls="contact">
                      <i class="mdi mdi-folder-multiple-outline"></i>
                      <span class="nav-text">Contact Details</span> 
                    </a>
                     <ul  class="collapse show"  id="contact"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                              <li  class="active" >
                                <a class="sidenav-item-link" href="{{route('all.contact')}}">
                                  <span class="nav-text">Contact Info</span>
                                  
                                </a>
                              </li>
                              <li  class="active" >
                                <a class="sidenav-item-link" href="{{route('show.messages')}}">
                                  <span class="nav-text">Client Messages</span>
                                  
                                </a>
                              </li>
                      </div>
                    </ul>
                  </li>

                  

                  <li  class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#slider"
                      aria-expanded="false" aria-controls="slider">
                      <i class="mdi mdi-folder-multiple-outline"></i>
                      <span class="nav-text">Slider</span> 
                    </a>
                    <ul  class="collapse show"  id="slider"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                              <li  class="active" >
                                <a class="sidenav-item-link" href="{{route('all.slider')}}">
                                  <span class="nav-text">All Sliders</span>
                                  
                                </a>
                              </li>
                      </div>
                    </ul>
                  </li>

                  <li  class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#posts"
                      aria-expanded="false" aria-controls="posts">
                      <i class="mdi mdi-folder-multiple-outline"></i>
                      <span class="nav-text">Posts</span> 
                    </a>
                    <ul  class="collapse show"  id="posts"
                      data-parent="#posts-menu">
                      <div class="sub-menu">
                              <li  class="active" >
                                <a class="sidenav-item-link" href="{{route('add.post')}}">
                                  <span class="nav-text">Add Post</span>
                                  
                                </a>
                              </li>
                              <li  class="active" >
                                <a class="sidenav-item-link" href="{{route('all.article')}}">
                                  <span class="nav-text">Articles</span>
                                  
                                </a>
                              </li>
                              <li  class="active" >
                                <a class="sidenav-item-link" href="{{route('all.hackerank')}}">
                                  <span class="nav-text">HackerRank Posts</span>
                                  
                                </a>
                              </li>
                              <li  class="active" >
                                <a class="sidenav-item-link" href="{{route('all.codechef')}}">
                                  <span class="nav-text">Code Chef</span>
                                  
                                </a>
                              </li>
                              
                      </div>
                    </ul>
                  </li>
                 
                 
                



                
              </ul>

            </div>

            <hr class="separator" />

            
          </div>
        </aside>