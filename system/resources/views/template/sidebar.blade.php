<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ url('public/admin') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">TIM MEGA PRATIWI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('public/admin') }}/dist/img/profile.jpeg" class="brand-image img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Mega Pratiwi</a>
          @if(Auth::check())
            {{request()->user()->nama}}
          @elseif(Auth::guard('pembeli')->check())
            {{Auth::guard('pembeli')->user()->nama}}
            <br>Pembeli</br>
          @elseif(Auth::guard('penjual')->check())
            {{Auth::guard('penjual')->user()->nama}}
            <br>Penjual</br>
          @else
            Silahkan Login
          @endif  
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
            <a href=" {{ url('dashboard') }}  " class="nav-link {{request()->is('dashboard') ? 'active' : ''}} ">
              <i class="nav-icon fas fa-home "></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" {{ url('admin/produk') }}  " class="nav-link {{request()->is('admin/produk') ? 'active' : ''}} ">
              <i class="fa fa-th-large nav-icon"></i>
              <p>
                Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" {{ url('kategori') }}  " class="nav-link {{request()->is('kategori') ? 'active' : ''}} ">
              <i class="fa fa-th-large nav-icon"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>


          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="fa fa-list" aria-hidden="true"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ url('admin/user') }} " class="nav-link {{request()->is('admin/user') ? 'active' : ''}} ">
                  <i class="far fa-user nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /sidebar -->
  </aside>