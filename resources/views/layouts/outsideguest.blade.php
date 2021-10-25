<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback</title>


     <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">




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
<!-- font awesome -->
<script src="https://use.fontawesome.com/62e8d6d224.js"></script>











 <!-- default styles -->


 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



</head>


<body>
   
    <div class="bg-gray-1000">
   

           @yield('contentoutside')


     
        </div>

   
  
  





 





</body>
</html>
