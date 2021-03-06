  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a> 
        </div>
      </div>

      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Blog Dashboard</li>
            <li class=""> {{-- active --}}
                <a href="{{ route('post.index') }}">
                    <i class="fa fa-file"></i> Posts
                </a>
            </li> 
            
            @can('posts.category', Auth::user())
            <li class="">
                <a href="{{ route('category.index') }}">
                    <i class="fa fa-list"></i> Categories 
                </a>
            </li>
            @endcan

            @can('posts.tag', Auth::user())
            <li class=""> 
                <a href="{{ route('tag.index') }}"> 
                    <i class="fa fa-list"></i> Tags
                </a>
            </li> 
            @endcan

            <li class=""> 
                <a href="{{ route('user.index') }}">      
                    <i class="fa fa-users"></i> Users
                </a>
            </li>   
            <li class=""> 
                <a href="{{ route('role.index') }}">      
                    <i class="fa fa-users"></i> Roles 
                </a>
            </li>  
            <li class=""> 
                <a href="{{ route('permission.index') }}">        
                    <i class="fa fa-shield"></i> Permissions
                </a>
            </li> 
            <li class=""> 
                 <a class="nav-link" href="{{ route('admin.logout') }}" 
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      <i class="fa fa-sign-out"></i> Sign Out 
                  </a>
                  <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
            </li>    
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>