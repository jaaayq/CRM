<x-app-layout>
    <x-slot name="slot">
       <!-- Content Wrapper. Contains page content -->

        <!-- /.content-header -->

{{--MAIN DASHBOARD BLADE--}}




@php
$feedbackcount = DB::table('feedback2s')->count();
$activitycount =  DB::table('activity1s')->count();


@endphp




        <!-- Main content -->
        <section class="content">
          <div class="container-fluid font-RO">
            <!-- Info boxes -->
            <div class="row">
              <!-- /.col -->
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-thumbs-up"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text ">FEEDBACKS</span>
                    <span class="info-box-number ">{{$feedbackcount}}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

              <!-- fix for small devices only -->
              <div class="clearfix hidden-md-up"></div>

              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text ">CREATED ACTIVITIES</span>
                    <span class="info-box-number ">{{$activitycount}}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
            </div>

          </div>


            <!-- BAR CHART -->
            <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title font-RO">Bar Chart</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
                </div>
                <div class="card-body">
               
       

                              <!-- Chart's container -->
                <div id="chart" style="height: 300px;"></div>

             
                    
                



            
                <script>

                  const fbchart = new Chartisan({
                    el: '#chart',
                    url: "{{ route('charts.feedback_chart') }}",
                    hooks: new ChartisanHooks()
                    .beginAtZero()
                    .datasets('pie')
                    .pieColors(['#f8a5c2','#34ace0']),
                    //.colors(['#f8a5c2','#34ace0']),
                    
                  });

                </script>


                
                 

  
                </div>
                </div>
                <!-- /.card-body -->
            </div>

             <!-- Charting library -->
             <script src="https://unpkg.com/chart.js@^2.9.3/dist/Chart.min.js"></script>
             <!-- Chartisan -->
             <script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>



           
        </section>
                 
      <!-- Main Footer -->
    </x-slot>


    
</x-app-layout>


