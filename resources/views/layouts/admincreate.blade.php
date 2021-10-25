<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

 
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
{{-- DATATABLES CSS--}}
<link rel="stylesheet" href="{{asset('http://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css')}}">
{{--TOASTR--}}
<link rel="stylesheet" href="{{asset('http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css')}}">
{{--SWEETALERT2--}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

</head>


<body class="hold-transition dark-mode sidebar-mini layout-fixed ">

   <div class="min-h-screen bg-gray-100">
       <!-- add livewire nav here-->
     

       <main>

          {{--}} {{ $slot }} --}}
          <div class="wrapper">

        

        <!-- Navbar -->

       <!-- /.navbar -->

           <!-- Main Sidebar Container -->
           <aside class="main-sidebar sidebar-dark-primary elevation-4">
             <!-- Brand Logo -->
             <a href="{{ route('users.index') }}" class="brand-link">
               <img src="{{asset('dist/img/dostlogo.png')}}" alt="CRM Logo" class="brand-image img-circle elevation-3 " style="opacity: .8">
               <span class="brand-text font-weight-heavy font-RO">CRM</span>
             </a>


            
           <!-- Sidebar -->
           @php
           $prefix = Request::route()->getPrefix();
           $route= Route::current()->getName();
         @endphp
         
             <!-- Sidebar -->
             <div class="sidebar">
               <!-- Sidebar user panel (optional) -->
               <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
         
                     <div class="info">
         
                     <a href="#" class="d-block font-RO "> 
                       &nbsp;
                       <i class="fas fa-user"></i> &nbsp;
                       {{Auth::user()->name}} 
                     </a>
         
                     </div>
         
               </div>
         
             <!--  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         
                 <div class="nav-item  {{ ($prefix=='joinactivitytest')?'menu-open':''}}">
                   <a href="{{ route('viewjointest.joinactivitytest') }}" class="nav-link font-RO {{ ($route=='viewjointest.joinactivitytest')?'active':'' }}"> 
                     <i class="fas fa-sign-in-alt"></i>
                       Join Activity 
                   </a>
                 </div>
               </div> -->
               
               <!-- SidebarSearch Form -->
         
         
               <!-- Sidebar Menu -->
               <nav class="mt-2 ">
                 <ul class="nav nav-pills nav-sidebar flex-column">
                   <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                   <li class="nav-item">
                    
          
         
         
                
         
         
                
             </div>
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
            </div>
          </div>
       </main>

       <footer class="main-footer font-RO">
           <strong>Copyright &copy; 2014-2021 <a href="#">CRM</a>.</strong>
           All rights reserved.
           <div class="float-right d-none d-sm-inline-block">
             <b>Version</b> 1
           </div>
         </footer>
   

   @stack('modals')

   @livewireScripts





 

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
<script src="{{asset('http://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js')}}"></script>
<script>
$(document).ready( function () {
   $('#myTable').DataTable();
} );

</script>


<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<script>
@if(Session::has('message'))
   var type = "{{ Session::get('alert-type', 'info') }}";
   switch(type){
       case 'info':
           toastr.info("{{ Session::get('message') }}");
           break;

       case 'warning':
           toastr.warning("{{ Session::get('message') }}");
           break;
       case 'success':
           toastr.success("{{ Session::get('message') }}");
           break;

       case 'error':
           toastr.error("{{ Session::get('message') }}");
           break;
   }
   @endif
</script>

{{--SWEET ALERT 2 FUNCTION---}}
<script type="text/javascript">
$(function(){
   $(document).on ('click', '#delete',function(e){
       e.preventDefault();
       var link = $(this).attr("href");
       Swal.fire({
           title: 'Are you sure you want to delete this activity?',
           text: "You won't be able to revert this!",
           icon: 'warning',
           showCancelButton: true,
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Yes, Delete Activity!'
       }).then((result) =>  {
           if (result.value) {
               window.location.href = link;
               Swal.fire(
                   'Deleted',
                   'You Activity has been deleted.',
                   'success'
               )
           }
       })
   });
});
</script>





</body>
</html>
