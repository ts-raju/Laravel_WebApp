<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('backend/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">आ.नि</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('backend/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{ __('msg.Raj Lama') }} </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="/admin" class="nav-link @yield('dashboard')">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                {{ __('msg.Dashboard') }}
              </p>
            </a>
          </li>



          <li class="nav-item has-treeview @yield('popen')">
            <a href="#" class="nav-link @yield('main-profile')">
              <i class="nav-icon fas fa-user"></i>
              <p>
                {{ __('msg.Profile') }}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/profile" class="nav-link @yield('profile')">
                  <i class="far fa-circle nav-icon"></i>
                  <p> {{ __('msg.Add Profile') }} </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/view-profile" class="nav-link @yield('view-profile')">
                  <i class="far fa-circle nav-icon"></i>
                  <p> {{ __('msg.View Profile') }} </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview @yield('lopen')">
            <a href="#" class="nav-link @yield('links')">
              <i class="nav-icon fas fa-link"></i>
              <p>
                {{ __('msg.Link Setup') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/create-links" class="nav-link @yield('create_links')">
                  <i class="far fa-circle nav-icon"></i>
                  <p> {{ __('msg.Create Links') }} </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/profile-links" class="nav-link @yield('view_links')">
                  <i class="far fa-circle nav-icon"></i>
                  <p> {{ __('msg.Linked Profiles') }} </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-header"> {{ __('msg.ATTRIBUTE SETUP') }} </li>

          <li class="nav-item has-treeview @yield('aopen')">
            <a href="#" class="nav-link @yield('address')">
              <i class="nav-icon fas fa-street-view"></i>
              <p>
               	{{ __('msg.Address Setup') }}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/province" class="nav-link @yield('state')">
                  <i class="far fa-circle nav-icon"></i>
                  <p> {{ __('msg.Add Province') }} </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('district.index') }}" class="nav-link @yield('district')">
                  <i class="far fa-circle nav-icon"></i>
                  <p> {{ __('msg.Add District') }} </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-header"> {{ __('msg.Extra') }} </li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Item 1
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Item 2
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Item 3
              </p>
            </a>
        	</li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
