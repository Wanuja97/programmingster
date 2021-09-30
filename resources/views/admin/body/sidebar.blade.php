 <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/">
              <img src="{{asset('images/icon.png')}}" alt="icon" style="width:40px;height:40px;">
                <span class="brand-name">Programmingster</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">           
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