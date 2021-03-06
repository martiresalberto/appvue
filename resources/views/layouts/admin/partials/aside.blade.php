<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/home" class="brand-link">
    <img src="/img/logo.png" alt="" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">AppVue</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
         
         <photouser></photouser>  
      
      </div>
      <div class="info">
          <a href="#" class="d-block">
            {{-- {{ Auth::user()->name }}  --}}
          </a>
        </div>
      
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        
     {{-- <router-view></router-view> --}}
        
        <li class="nav-item">
          <router-link to="/home" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
             Muro
            </p>
          </router-link>
        </li>   

         <li class="nav-item">
          <router-link to="/mispublicaciones" class="nav-link">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>
              Mis publicaciones
            </p>
          </router-link>
        </li>
        
        @can('isAdmin')

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cog green"></i>
            <p>
              Management
              <i class="right fa fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <router-link to="/users" class="nav-link">
                <i class="fas fa-users nav-icon"></i>
                <p>User</p>
              </router-link>
            </li>
           
            
          </ul>
        </li>
              
        <li class="nav-item">
          <router-link to="/developer" class="nav-link">
            <i class="nav-icon fas fa-cogs"></i>
            <p>
              Developer
            </p>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/profile" class="nav-link">
            <i class="nav-icon fas fa-user orange"></i>
            <p>
              Profile
            </p>
          </router-link>
        </li>
        
        <li class="nav-item">

        <a class="nav-link" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <i class="nav-icon fas fa-power-off red"></i>
          {{ __('Logout') }}
        </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           @csrf
         </form>

        </li>
        
         @endcan
      </ul>
  
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>