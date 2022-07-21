  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('dashboard')}}" class="brand-link">
      <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url('dashboard')}}" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    
       
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Setting 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('website/setting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Web Site Setting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('choose/us')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Choose Us</p>
                </a>
              </li>
            
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Slider 
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('add/slider')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Slider </p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="{{url('all/slider')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Slider</p>
                </a>
              </li> 
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Facilitie 
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('add/facilitie')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Facilitie </p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="{{url('all/facilitie')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Facilitie</p>
                </a>
              </li> 
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Our Work 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('all/work/category')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Work Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('add/work')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Work</p>
                </a>
              </li>
             
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Our Team 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('add/team')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Team</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('all/team')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Team</p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                CLient Review 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('add/review')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Review</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('all/review')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Review</p>
                </a>
              </li>
             
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Our CLient  
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('all/clientcategory')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Client Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('add/client')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Client</p>
                </a>
              </li>

                  <li class="nav-item">
                <a href="{{url('all/client')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>all Client</p>
                </a>
              </li>
             
             
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Our Service  
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('all/category')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('all/subcategory')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub Category</p>
                </a>
              </li>

                  <li class="nav-item">
                <a href="{{url('all/service')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Service</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Our Course  
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('all/coursecategory')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('all/coursesubcategory')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub Category</p>
                </a>
              </li>

                  <li class="nav-item">
                <a href="{{url('all/service')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Service</p>
                </a>
              </li>

                
             
             
            </ul>
          </li>


            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                About Us  
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('all/about')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add About</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('add/about')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All About</p>
                </a>
              </li>             
            </ul>
          </li>



            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Blog  
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('all/blogcategory')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('add/blog')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Blog</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('all/blog')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Blog</p>
                </a>
              </li>

          

                
             
             
            </ul>
          </li>

          

      

         
          <li class="nav-item">
            <a href="{{url('logout')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Log Out</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>