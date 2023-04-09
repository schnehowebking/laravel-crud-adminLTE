<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Rescore</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('backend/dist/img/demo.jpg') }}" class="img-circle elevation-2"
                    alt="IMG">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
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
                <li class="nav-item menu-open">
                  <a href="{{ route('home') }}" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Dashboard

                    </p>
                  </a>
                </li>
                @if(auth()->user()->role == "admin")
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                      User List
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ route('lists.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lists</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('lists.create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add List</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('autoreplies.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Auto-replies</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                      Campaigns
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ route('usercampaigns.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('usercampaigns.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>New</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('usercampaigns.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Sent</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('autoreplies.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Scheduled</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('autoreplies.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Draft</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('autoreplies.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pending</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                      User Account
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ route('useraccount.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Status</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('billing') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Billing</p>
                      </a>
                    </li>

                  </ul>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                                 <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Logout') }}</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
