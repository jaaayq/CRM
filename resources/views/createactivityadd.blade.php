<x-app-layout>
    <x-slot name="slot">
       <!-- Content Wrapper. Contains page content -->

        <!-- /.content-header -->

        <!-- Main content -->
 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="{{asset('../../plugins/fontawesome-free/css/all.min.css') }}">
 <!-- daterange picker -->
 <link rel="stylesheet" href="{{asset('../../plugins/daterangepicker/daterangepicker.css') }}">
 <!-- iCheck for checkboxes and radio inputs -->
 <link rel="stylesheet" href="{{asset('./../plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
 <!-- Bootstrap Color Picker -->
 <link rel="stylesheet" href="{{asset('../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
 <!-- Tempusdominus Bootstrap 4 -->
 <link rel="stylesheet" href="{{asset('../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
 <!-- Select2 -->
 <link rel="stylesheet" href="{{asset('../../plugins/select2/css/select2.min.css') }}">
 <link rel="stylesheet" href="{{asset('../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
 <!-- Bootstrap4 Duallistbox -->
 <link rel="stylesheet" href="{{asset('../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
 <!-- BS Stepper -->
 <link rel="stylesheet" href="{{asset('../../plugins/bs-stepper/css/bs-stepper.min.css ') }}">
 <!-- dropzonejs -->
 <link rel="stylesheet" href="{{asset('../../plugins/dropzone/min/dropzone.min.css') }}">
 <!-- Theme style -->
 <link rel="stylesheet" href="{{asset('../../dist/css/adminlte.min.css ') }}">


 {{--CREATE ACITVITY BLADE--}}

        <section class="col-md-12">

          @if ($errors->any())
          <div class="alert alert-danger">
          <ul>
          @foreach ($errors->all() as $error)
          <li class="text-white"> {{$error}} </li>
            
          @endforeach
          </ul>
          </div>
            
          @endif


            <div class="card card-primary">
                <div class="card-header ">
                <h3 class="card-title font-RO">
                    @if (isset($editdata))
                    EDIT INFORMATION
                    @else
                    CREATE ACTIVITY
                    @endif
                </h3>


                </div>
                <div class="card-body">

                


                    <form method="POST" action="{{ (@$editdata)?route('update.createactivity', $editdata->id): route('store.createactivity') }}" enctype="multipart/form-data">
                        @csrf



                        <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label>Name of Activity</label>
                            <input type="text" name="activityname"  class="form-control" required value="{{ (@$editdata->activityname) }}" placeholder="Name Activity">
                            </div>

                        <div class="form-group col-sm-6">
                            <label>Start time:</label>
                         <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                            <input type="text" name="activitydate" class="form-control" required value="{{ (@$editdata->activitydate) }}" datetimepicker-input" data-target="#reservationdatetime"/>
                        <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                             </div>
                             </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-sm-6">
                            <label>Activity Description</label>
                            <input type="text" name="activitydescription" class="form-control" required value="{{ (@$editdata->activitydescription) }}" placeholder="Activity Description">
                            <label>Activity Code:</label>
                            <input type="text" name="activitycode" class="form-control" required value="{{ (@$editdata->activitycode) }}" placeholder="Activity Code">
                        </div>

                        <div class="form-group col-sm-6">
                          
                          <label>Finish Time:</label>
                          <div class="input-group date" id="finishtime" data-target-input="nearest">
                             <input type="text" name="date_finished" class="form-control" required value="{{ (@$editdata->date_finished) }}" datetimepicker-input data-target="#finishtime"/>
                         <div class="input-group-append" data-target="#finishtime" data-toggle="datetimepicker">
                               <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                           </div>
                           </div>
                          </div>



                        </div>
                        <div><button class="btn btn-primary" id="update" type="submit">{{  (@$editdata)?'Update':'Submit' }}</button></div>


                        </form>
                        </div>
                        </div>


        </section>






      <!-- Main Footer -->
    </x-slot>

</x-app-layout>
<!-- ChartJS -->


<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="../../plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })


    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })

</script>

<!-- datetimepicker2 -->

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#finishtime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })


    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })

</script>
