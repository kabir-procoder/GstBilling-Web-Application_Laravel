@php
  $logoRecord = App\Models\LogoModel::first();
@endphp


  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ url('public/dist/img/AdminLTELogo.png') }}" alt="" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      {{-- Full Screen --}}
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('logout') }}" role="button">
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin/dashboard') }}" class="brand-link">
      <img src="{{ url('public/images/mainlogo/'.$logoRecord->image) }}" alt="" class="brand-image img-circle elevation-3" style="opacity: .8" height="40" width="40">
      <span class="brand-text font-weight-light">GstBilling</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('public/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="javascript:;" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          {{-- Dashboard --}}
          <li class="nav-item">
            <a href="{{ url('admin/dashboard') }}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          {{-- Parties Type --}}
          <li class="nav-item">
            <a href="{{ url('admin/parties_type') }}" class="nav-link @if(Request::segment(2) == 'parties_type') active @endif">
              <i class="nav-icon fas fa-th-large"></i>
              <p>
                Parties Type
              </p>
            </a>
          </li>

          {{-- Parties --}}
          <li class="nav-item">
            <a href="{{ url('admin/parties') }}" class="nav-link @if(Request::segment(2) == 'parties') active @endif">
              <i class="nav-icon fas fa-info"></i>
              <p>
                Parties
              </p>
            </a>
          </li>

          {{-- GST Bills --}}
          <li class="nav-item">
            <a href="{{ url('admin/gst_bills') }}" class="nav-link @if(Request::segment(2) == 'gst_bills') active @endif">
              <i class="nav-icon fas fa-concierge-bell"></i>
              <p>
                GST Bills
              </p>
            </a>
          </li>

          {{-- GST Bills --}}
          <li class="nav-item">
            <a href="{{ url('admin/users') }}" class="nav-link @if(Request::segment(2) == 'users') active @endif">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
              </p>
            </a>
          </li>

          {{-- Logo/Favicon --}}
          <li class="nav-item">
            <a href="#" class="nav-link @if(Request::segment(2) == 'logo') active @endif">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/logo/mainlogo') }}" class="nav-link @if(Request::segment(3) == 'mainlogo') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/logo/favicon') }}" class="nav-link @if(Request::segment(3) == 'favicon') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Favicon</p>
                </a>
              </li>

            </ul>
          </li>

          {{-- Logout --}}
          <li class="nav-item">
            <a href="{{ url('logout') }}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>