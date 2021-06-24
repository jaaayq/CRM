<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  @livewireStyles


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href={{ asset("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback") }}>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href={{ asset("plugins/fontawesome-free/css/all.min.css") }}>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href={{ asset("plugins/overlayScrollbars/css/OverlayScrollbars.min.css") }}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{ asset("dist/css/adminlte.min.css") }}>
 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}" defer></script>


</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed ">

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')


        <main>
           {{--}} {{ $slot }} --}}
           <div class="wrapper">

            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
              <img class="animation__wobble" src="dist/img/crm.png" alt="CRMLogo" height="60" width="60">
            </div>

  <!-- Navbar -->

  <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
              <!-- Brand Logo -->
              <a href="index3.html" class="brand-link">
                <img src="dist/img/crm.png" alt="CRM Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-heavy">CRM</span>
              </a>

              <!-- Sidebar -->
            @include('layouts.sidebar')
              <!-- /.sidebar -->
            </aside>

            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                  <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-6">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                          </li>
                        </ul>
                      </div><!-- /.col -->

                    </div><!-- /.row -->
                  </div><!-- /.container-fluid -->
                </div>

                {{$slot}}


          </div>
        </main>

        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="#">CRM</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
              <b>Version</b> 1
            </div>
          </footer>
    </div>

    @stack('modals')

    @livewireScripts



<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/crm.png" alt="CRMLogo" height="60" width="60">
  </div>

  <!-- Navbar -->

  <!-- /.navbar -->










<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src={{ asset('plugins/jquery/jquery.min.js') }}></script>
<!-- Bootstrap -->
<script src={{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
<!-- overlayScrollbars -->
<script src={{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}></script>
<!-- AdminLTE App -->
<script src={{ asset('dist/js/adminlte.js') }}></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src={{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js') }}></script>
<script src={{ asset('plugins/raphael/raphael.min.js') }}></script>
<script src={{ asset('plugins/jquery-mapael/jquery.mapael.min.js') }}></script>
<script src={{ asset('plugins/jquery-mapael/maps/usa_states.min.js') }}></script>
<!-- ChartJS -->
<script src={{ asset('plugins/chart.js/Chart.min.js') }}></script>

<!-- AdminLTE for demo purposes -->
<script src={{ asset('dist/js/demo.js') }}></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src={{ asset('dist/js/pages/dashboard2.js') }}></script>
</body>
</html>
