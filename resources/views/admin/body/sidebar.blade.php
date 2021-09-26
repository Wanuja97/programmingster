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
                  <li  class="has-sub active">
                    <a class="sidenav-item-link" href="{{route('all.category')}}" 
                      >
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Categories</span>
                    </a>
                   
                  </li>
                  <li  class="has-sub active">
                    <a class="sidenav-item-link" href="{{route('all.contact')}}" 
                      >
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Contact Details</span>
                    </a>
                   
                  </li>
                  <li  class="has-sub active">
                    <a class="sidenav-item-link" href="{{route('all.slider')}}" 
                      >
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Sliders</span>
                    </a>
                   
                  </li>
                  
              </ul>

            </div>

            <hr class="separator" />

            
          </div>
        </aside>