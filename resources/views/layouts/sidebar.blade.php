<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
      <img src="{{asset('dist/img/crm.png')}}" alt="CRM Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-heavy">CRM</span>
    </a>


  @php
$prefix = Request::route()->getPrefix();
$route= Route::current()->getName();


  @endphp
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name}}</a>
        </div>
      </div>

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info">
          <a href="#" class="d-block">JOIN ACTIVITY</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ ($route=='dashboard')?'active':'' }}">
              <p>
                Dashboard
              </p>
            </a>

          </li>
          <li class="nav-item {{ ($prefix=='createactivity')?'menu-open':''}}">
            <a href="{{ route('view.createactivity') }}" class="nav-link {{ ($route=='view.createactivity')?'active':'' }}">
              <p>
                Create Activity
              </p>
            </a>
          </li>

         {{-- <li class="nav-item {{ ($prefix=='viewactivity')?'menu-open':''}}">
            <a href="{{ route('view') }}" class="nav-link {{ ($route=='view')?'active':'' }}">
              <p>
                View Activity
              </p>
            </a>
          </li>--}}

    </div>
    <!-- /.sidebar -->
  </aside>
