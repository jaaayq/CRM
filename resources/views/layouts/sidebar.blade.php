<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
      <img src="{{asset('dist/img/crm.png')}}" alt="CRM Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-heavy">CRM</span>
    </a>

{{--SIDEBAR NAVIGATION--}}

  @php
$prefix = Request::route()->getPrefix();
$route= Route::current()->getName();


  @endphp
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info">

          <a href="#" class="d-block"><i class="fas fa-user">{{ Auth::user()->name}}</i></a>

        </div>
      </div>

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="nav-item {{ ($prefix=='joinactivitytest')?'menu-open':''}}">
          <a href="{{ route('viewjointest.joinactivitytest') }}" class="nav-link {{ ($route=='viewjointest.joinactivitytest')?'active':'' }}"> <i class="fas fa-sign-in-alt">
              Join Activity </i> </a>
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
                <i class="fas fa-columns">
              <p>
                Dashboard
              </p>
                </i>
            </a>

          </li>
          <li class="nav-item {{ ($prefix=='createactivity')?'menu-open':''}}">
            <a href="{{ route('view.createactivity') }}" class="nav-link {{ ($route=='view.createactivity')?'active':'' }}">
              <p>
                <i class="fas fa-plus-circle">
                Create Activity
                </i>
              </p>
            </a>
          </li>

          <li class="nav-item {{ ($prefix=='joinactivityview')?'menu-open':''}}">
            <a href="{{ route('joinactivityview') }}" class="nav-link {{ ($route=='joinactivityview')?'active':'' }}">
              <p>
                <i class="fas fa-list">
                Feedback Log
                </i>
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
