<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<a href="#" class="brand-link">
      <img src="{{ asset('admin/dist/img/logo.png') }}"
           alt="AdminLTE Logo"
           class="brand-image img-circle "
           style="opacity: .8">
      <span class="brand-text font-weight-light">Madayaw Gas</span>
    </a>
<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">

    <div class="info">
      <a href="#" class="d-block">{{ Auth::user() -> name ?? ''}}</a>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link active">
        <i class=" fa fa-regular fa-bars"></i>
          <p>
            MENU
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('dashboard')}}" class="nav-link {{ request()->is('dashboard*') ? 'active' : ''}}">
            <i class=" fa fa-solid fa-chart-line"></i>
              <p>Dashboard</p>
            </a>
          </li>
        <li class="nav-item">
            <a href="{{ route('purchases.index')}}" class="nav-link  {{ request()->is('purchases*') ? 'active' : ''}}">
            <i class="fa fa-regular fa-clipboard"></i>
              <p>Product Purchases Record</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('stocks.index')}}" class="nav-link {{ request()->is('stocks*') ? 'active' : ''}}">
            <i class="fa fa-solid fa-box"></i>
              <p>Product Stock</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('reports.index')}}" class="nav-link {{ request()->is('reports*') ? 'active' : ''}}">
           <i class="fa fa-solid fa-layer-group"></i>
              <p>Product Stock Report</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('users.index')}}" class="nav-link {{ request()->is('users*') ? 'active' : ''}}">
            <i class="fa fa-user"></i> 
              <p>Users</p>
            </a>
          </li>
          <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                
                                <a class="nav-link" href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                         <i class="far fa-circle"></i>{{ __(' Log Out') }}
                                </a>
                            </form>
          
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>