<x-app-layout>
    <x-slot name="slot">
         <!-- Content Wrapper. Contains page content -->
  
          <!-- /.content-header -->
  
  
  {{--FEEDBACK FORM  LIST BLADE--}}
  
  
          <!-- Main content -->
          <section class="col-md-12">
              <div class="card card-primary">
                  <div class="card-header ">
                  <h3 class="card-title font-RO">FEEDBACK STATISTICS</h3>
                  </div>
                  <div class="card-body">
                      <section class="col-md-12">
                          <div class="card">
                              <div class="card-body" style="color: #070807; background: white;">
                                  <div id="table-scroll">
                                  <table id="myTable" class="table table-stripped tabel-bordered font-RO" style="width: 100% ">
                                      <thead>
                                          <tr>
                                              <th style="font-size: 12px">Activity Code</th>
                                              <th style="font-size: 12px">Feedback Count</th>
                                              <th style="font-size: 12px">T1</th>
                                              <th style="font-size: 12px">T2</th>
                                              <th style="font-size: 12px">AOS1</th>
                                              <th style="font-size: 12px">AOS2</th>
                                              <th style="font-size: 12px">QOS1</th>
                                              <th style="font-size: 12px">QOS2</th>
                                              <th style="font-size: 12px">UTM1</th>
                                              <th style="font-size: 12px">CTT1</th>
                                              <th style="font-size: 12px">RIP1</th>
                                              <th style="font-size: 12px">SAT1</th>
                                              <th style="font-size: 12px">SAT2</th>

                                          </tr>
                                      </thead>
  
                                      



                                      
                                      @foreach ($add as $column)
                                      <tr>
                                        <td> {{ $column->feedbackactivitycode }} </td>
                                      <td> {{ $column->occurences }} </td>
                                      
                                      <td> {{ $column->t1 }} </td>
                                      <td> {{ $column->t2 }} </td>
                                      <td> {{ $column->AOS1 }} </td>
                                      <td> {{ $column->AOS2 }} </td>
                                      <td> {{ $column->QOS1 }} </td>
                                      <td> {{ $column->QOS2 }} </td>
                                      <td> {{ $column->UTM1 }} </td>
                                      <td> {{ $column->CTT1 }} </td>
                                      <td> {{ $column->RIP1 }} </td>
                                      <td> {{ $column->SAT1 }} </td>
                                      <td> {{ $column->SAT2 }} </td>
                                      
                                     
                                      

                                    </tr>
                                      @endforeach
                                        
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                   
                                      
                                       
    
                                      
                                     
                                   



                                      
                                      

                                   


                                     
                                     
                                      
  
                                  </table>
                              </div>
                          </div>
                          </div>
  
  
          </section>
  
  
  
  
  
  
        <!-- Main Footer -->
      </x-slot>
  
    </x-app-layout>
  <!-- ChartJS -->
  
  <link rel="stylesheet" href="http://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <script src="http://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready( function () {
  
      $('#myTable').DataTable()
  
  } );
  
  </script>
  
  <style>
      #table-wrapper {
    position:relative;
  }
  #table-scroll {
    height:500px;
    overflow:auto;
    margin-top:20px;
  }
  #table-wrapper table {
    width:100%;
  
  }
  #table-wrapper table * {
    background:rgb(255, 255, 255);
    color:black;
  }
  #table-wrapper table thead th .text {
    position:absolute;
    top:-20px;
    z-index:2;
    height:20px;
    width:35%;
    border:1px solid red;
  }
  </style>
  