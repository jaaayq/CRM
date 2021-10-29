<x-app-layout>
    <x-slot name="slot">
       <!-- Content Wrapper. Contains page content -->

        <!-- /.content-header -->

{{--MAIN DASHBOARD BLADE--}}

<?php
 
$dataPoints = array(
	array("x"=> 10, "y"=> 41),
	array("x"=> 20, "y"=> 35, "indexLabel"=> "Lowest"),
	array("x"=> 30, "y"=> 50),
	array("x"=> 40, "y"=> 45),
	array("x"=> 50, "y"=> 52),
	array("x"=> 60, "y"=> 68),
	array("x"=> 70, "y"=> 38),
	array("x"=> 80, "y"=> 71, "indexLabel"=> "Highest"),
	array("x"=> 90, "y"=> 52),
	array("x"=> 100, "y"=> 60),
	array("x"=> 110, "y"=> 36),
	array("x"=> 120, "y"=> 49),
	array("x"=> 130, "y"=> 41)
);
	
?>

<script>
  window.onload = function () {
   
  var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    exportEnabled: true,
    theme: "dark2", // "light1", "light2", "dark1", "dark2"
    title:{
      text: "Statistics for Feedback"
    },
    axisY:{
      includeZero: true
    },
    data: [{
      type: "column", //change type to bar, line, area, pie, etc
      //indexLabel: "{y}", //Shows y value on all Data Points
      indexLabelFontColor: "#5A5757",
      indexLabelPlacement: "outside",   
      dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }]
  });
  chart.render();
   
  }
  </script>

@php
$feedbackcount = DB::table('feedback2s')->count();
$activitycount =  DB::table('activity1s')->count();

$gendermale = DB::table('feedback2s')->where('feedbackgender', 'male')->count();
$genderfemale = DB::table('feedback2s')->where('feedbackgender', 'female')->count();


@endphp




        <!-- Main content -->
        <section class="content">
          <div class="container-fluid font-RO">
            <!-- Info boxes -->
            <div class="row">
              <!-- /.col -->
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

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
                  <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

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
            <div class="card card-info">
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
               
       





                  <div id="chartContainer" style="height: 370px; width: 100%;"></div>

  
                </div>
                </div>
                <!-- /.card-body -->
            </div>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        </section>


      <!-- Main Footer -->
    </x-slot>


    
</x-app-layout>


