<x-app-layout>
    <x-slot name="slot">
         <!-- Content Wrapper. Contains page content -->
  
          <!-- /.content-header -->
  
  
  {{--FEEDBACK STATS  LIST BLADE--}}
  
  
          <!-- Main content -->
          <section class="col-md-12">
            <div class="pl-2 pr-2">
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
                                              <th style="font-size: 12px">Timelesness</th>
                                              <th style="font-size: 12px">Staff</th>
                                              <th style="font-size: 12px">Quality</th>
                                              <th style="font-size: 12px">Satisfaction</th>
                                              <th style="font-size: 12px">Recommendation</th>
                                          

                                          </tr>
                                      </thead>
  
                                      


                    
                                      
                                              @foreach ($queryfinal as $query )

                                              <tr>                          

                                              <td> {{ $query->feedbackactivitycode }} </td>
                                              <td> {{ $query->occurences }} </td> 
                                              <td> {{ round($query->time / $query->occurences / 2 )}} </td>
                                              <td> {{ round($query->staff / $query->occurences / 2) }} </td>
                                              <td> {{ round($query->quality / $query->occurences / 5 ) }} </td>
                                              <td> {{ round($query->satisfaction / $query->occurences / 1) }} </td>
                                              <td> {{ round($query->recommend / $query->occurences  / 1 ) }} </td>
                                            
                                        

                                              </tr>

                                              @endforeach
                                        
                                      

                                 </table>
                              </div>
                        </div>
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
  