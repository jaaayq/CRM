@extends('layouts.outsideguest')

@section('contentoutside')
       <!-- Content Wrapper. Contains page content -->

        <!-- /.content-header -->




{{--FEEDBACK FORM BLADE--}}


        <!-- Main content -->
        <section class="content">
            
  <!-- general form elements disabled -->
  <div class="w-4/5 container-sm bg-gray-1000">
    
        <div class="card card-info">
            <div class="card-header">
            <h3 class="card-title">CUSTOMER SATISFACTION FEEDBACK FORM</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body bg-gray-1300 font-RO text-sm">
                <!--border --> <div class="border-gray-1200 border-l border-r border-dashed">
                <form class="center border-2 border-transparent" method="POST" action="{{ route('store.createfeedback') }}" enctype="multipart/form-data"  >
                    @csrf
                    <div class="form-row">
                    <div class="form-group col-sm-6 ">
                        <label>Name of Company</label>
                        <input type="text" name="feedbackcompanyname" class="form-control "  required placeholder="Enter ..." >
                    </div>
                    
                  
                    
                    {{--DATE--}}
                    <div class="form-group col-sm-6">
                        <label>Date:</label>
                          <div class="input-group date " id="reservationdate" data-target-input="nearest">
                              <input type="text" name="feedbackdate" class="form-control datetimepicker-input"  required data-target="#reservationdate"/>
                              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                          </div>
                      </div>

                      <div class="form-group col-sm-6">
                        <label>Address</label>
                        <input type="text" name="feedbackaddress" class="form-control" required placeholder="Enter ...">
                    </div>

                    <div class="form-group col-sm-6">
                        <label>Telephone No.</label>
                        <input type="text" name="feedbacktelephone" class="form-control" required placeholder="Enter ...">
                    </div>

                    <div class="form-group col-sm-6">
                        <label>Email Address</label>
                        <input type="text" name="feedbackemail" class="form-control" required placeholder="Enter ...">
                    </div>

                    <div class="form-group col-sm-6 ">
                        <label>Gender</label>
                        <select class="form-control" name="feedbackgender" style="width: 100%;">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                    </div>

                    <div class="form-horizontal mt-1 p-1 space-x-0.5 " >
                        <label>Nature of Business (please check):</label>
                        <div class="checkbox">
                            <label><input type="checkbox" name="feedbacknature" value="Food/Beverage "/> Food/Beverage </label>
                            <label><input type="checkbox" name="feedbacknature" value="Agriculture/Horticulture "/> Agriculture/Horticulture </label>
                            <label><input type="checkbox" name="feedbacknature" value="Metals & Engineering "/> Metals & Engineering </label>
                            <label><input type="checkbox" name="feedbacknature" value="Construction"/> Construction </label>
                            <label><input type="checkbox" name="feedbacknature" value="Pharmaceuticals "/> Pharmaceuticals </label>
                            <label><input type="checkbox" name="feedbacknature" value="Electronics/Semiconductors "/> Electronics/Semiconductors </label>
                            <label><input type="checkbox" name="feedbacknature" value="Transport"/> Transport </label>
                            <label><input type="checkbox" name="feedbacknature" value="Plastic/Rubber"/> Plastic/Rubber </label>
                            <label><input type="checkbox" name="feedbacknature" value="Chemicals/Petrochemicals"/> Chemicals/Petrochemicals </label>
                            <label><input type="checkbox" name="feedbacknature" value="Mining"/> Mining </label>
                            <label><input type="checkbox" name="feedbacknature" value="Trading" /> Trading </label>
                            <label><input type="checkbox" name="feedbacknature" value="Academe"/> Academe </label>
                            <label><input type="checkbox" name="feedbacknature" value="Government"/> Government </label>
                            <input type="text" class="w-1/2 p-1.5"  name="feedbacknature"  placeholder="Others, Please specify"> <br>
                    </div>
                </div>

                      <div class="form-group col-sm-6 border-b border-dashed border-gray-1200">
                            <div class="checkbox">
                            <label>Is it your first time to avail of the programs and services of DOST XI?</label>
                            <label><input type="checkbox" name="feedbackyesno1" value="yes" /> Yes </label>
                             <label><input type="checkbox" name="feedbackyesno1" value="no"/> No </label>
                            </div>
                     </div>

               </div>      <!-- end of border -->
               <br>
                   

                     <div class="border-gray-1100 ">
                        <label class="text-lg "><strong> 1. Services availed from DOST XI </strong></label>
                    <div class="form-row">
                        &nbsp;
                        <label>Technology Intervention (please specify):</label>
                        <input type="text" class="form-control" required name="feedbackserviceavailed1" placeholder="Enter ..."> 
                        <label>Technology Intervention (please specify):</label> 
                        <input type="text" class="form-control" required name="feedbackserviceavailed2" placeholder="Enter ...">  &nbsp;
                    </div>
                    </div>

                    <div class="form-col-sm-6 p-2" >
                        <label>Consultancy Service:</label>
                        <div class="checkbox">
                            <label><input type="checkbox" name="feedbackconsultancy" value="Energy Audit"/> Energy Audit </label>
                            <label><input type="checkbox" name="feedbackconsultancy" value="MPEX"/> MPEX </label>
                            <label><input type="checkbox" name="feedbackconsultancy" value="Plant Layout Design"/> Plant Layout Design </label>
                            <label><input type="checkbox" name="feedbackconsultancy" value="CPT"/> CPT </label>
                            <label><input type="checkbox" name="feedbackconsultancy" value="GMP Assessment"/> GMP Assessment </label>
                            <input type="text" class="form-control " name="feedbackconsultancy" placeholder="Others (specify):">
                    </div>
                </div>

                <div class="form-col-sm-6 p-2">
                    <label>Packaging and Labeling Services:</label>
                    <div class="checkbox">
                        <label><input type="checkbox"  name="feedbackpackaging" value="Label Design"/> Label Design </label>
                        <label><input type="checkbox" name="feedbackpackaging" value="Nutrition Facts Labeling"/> Nutrition Facts Labeling </label>
                        <label><input type="checkbox" name="feedbackpackaging" value="PTD Services"/> PTD Services </label>
                        <input type="text" class="form-control" name="feedbackpackaging" placeholder=" Others (specify):">   &nbsp;
                </div>
            </div>
          
                <div class="pb-3 border-b border-dashed border-gray-1200">
                    
                    <label>Scholarship (please indicate assistance):</label> <br>
                    <input type="text" class="w-1/2 p-1.5" name="feedbackscholarship"  required placeholder="Enter ..."> <br>
                    <label>Formula of Conversion (please indicate product):</label><br>
                    <input type="text" class="w-1/2 p-1.5" name="feedbackconversion"  required placeholder="Enter ..."><br>
                    <label>R&D Management (please specify):</label> <br>
                    <input type="text" class="w-1/2 p-1.5" name="feedbackmanagement" required placeholder="Enter ..."><br>
                    <br>
                    <input type="text" class="w-3/12 p-1.5" name="feedbackmanagementspecify"  placeholder="Others (Specify): ">

                </div>

                <div class="center border-transparent">
                    <label class="text-lg">2 . Delivery Services </label>
                <div class="form-row">
                    <label class="text-sm text-center">1- Poor 2- Fair 3-Satisfactory 4- Very Satisfactory 5- Excellent</label>
                    <table class="table table-stripped table-bordered">
                        <thead>
                            <tr>
                                <th class="text-sm">ASPECTS</th>
                                <th class="text-sm">1</th>
                                <th class="text-sm">2</th>
                                <th class="text-sm">3</th>
                                <th class="text-sm">4</th>
                                <th class="text-sm">5</th>
                            </tr>
                        </thead>

                            <tr>
                                <th class="text-lg">1. Timelessness</th>
                            </tr>

                            <tr>
                                <th class="text-sm">Timelessness on the conduct of the activity as indicated
                                in the program (time started, time allotted per topic, time ended)</th>
                                <th style="font-size: 15px"> <input type="radio" id="timelessness101" name="t1" value="1"></th>
                                <th style="font-size: 15px"> <input type="radio" id="timelessness102" name="t1" value="2"></th>
                                <th style="font-size: 15px"> <input type="radio" id="timelessness103" name="t1" value="3"></th>
                                <th style="font-size: 15px"> <input type="radio" id="timelessness104" name="t1" value="4"></th>
                                <th style="font-size: 15px"> <input type="radio" id="timelessness105" name="t1" value="5"></th>
                            </tr>
                            <tr>
                                <th class="text-sm">Timelessness on the delivery of service,per agreed terms</th>
                                <th style="font-size: 15px"> <input type="radio" id="timelessness201" name="t2" value="1"></th>
                                <th style="font-size: 15px"> <input type="radio" id="timelessness202" name="t2" value="2"></th>
                                <th style="font-size: 15px"> <input type="radio" id="timelessness203" name="t2" value="3"></th>
                                <th style="font-size: 15px"> <input type="radio" id="timelessness204" name="t2" value="4"></th>
                                <th style="font-size: 15px"> <input type="radio" id="timelessness205" name="t2" value="5"></th>
                            </tr>

                            <tr>
                                <th style="font-size: 20px">2. Attitude of Staff</th>
                            </tr>

                            <tr>
                                <th class="text-sm">Courtesy and professionalism of the staff assigned to assist you</th>
                                <th style="font-size: 15px"> <input type="radio" id="AOS101" name="AOS1" value="1"></th>
                                <th style="font-size: 15px"> <input type="radio" id="AOS102" name="AOS1" value="2"></th>
                                <th style="font-size: 15px"> <input type="radio" id="AOS103" name="AOS1" value="3"></th>
                                <th style="font-size: 15px"> <input type="radio" id="AOS104" name="AOS1" value="4"></th>
                                <th style="font-size: 15px"> <input type="radio" id="AOS105" name="AOS1" value="5"></th>
                            </tr>
                            <tr>
                                <th class="text-sm">Courtesy and professionalism of the trainers/experts for the
                                     training/service</th>
                                <th style="font-size: 15px"> <input type="radio" id="AOS201" name="AOS2" value="1"></th>
                                <th style="font-size: 15px"> <input type="radio" id="AOS202" name="AOS2" value="2"></th>
                                <th style="font-size: 15px"> <input type="radio" id="AOS203" name="AOS2" value="3"></th>
                                <th style="font-size: 15px"> <input type="radio" id="AOS204" name="AOS2" value="4"></th>
                                <th style="font-size: 15px"> <input type="radio" id="AOS205" name="AOS2" value="5"></th>
                            </tr>

                            <tr>
                                <th class="text-lg">3. Quality of Service</th>
                            </tr>

                            <tr>
                                <th class="text-sm">Achievement of training objectives</th>
                                <th style="font-size: 15px"> <input type="radio" id="QOS101" name="QOS1" value="1"></th>
                                <th style="font-size: 15px"> <input type="radio" id="QOS102" name="QOS1" value="2"></th>
                                <th style="font-size: 15px"> <input type="radio" id="QOS103" name="QOS1" value="3"></th>
                                <th style="font-size: 15px"> <input type="radio" id="QOS104" name="QOS1" value="4"></th>
                                <th style="font-size: 15px"> <input type="radio" id="QOS105" name="QOS1" value="5"></th>
                            </tr>
                            <tr>
                                <th class="text-sm">Delivery and mastery of the trainers on the topic/s</th>
                                <th style="font-size: 15px"> <input type="radio" id="QOS201" name="QOS2" value="1"></th>
                                <th style="font-size: 15px"> <input type="radio" id="QOS202" name="QOS2" value="2"></th>
                                <th style="font-size: 15px"> <input type="radio" id="QOS203" name="QOS2" value="3"></th>
                                <th style="font-size: 15px"> <input type="radio" id="QOS204" name="QOS2" value="4"></th>
                                <th style="font-size: 15px"> <input type="radio" id="QOS205" name="QOS2" value="5"></th>
                            </tr>
                            <tr>
                                <th class="text-sm">Usefulness of the training materials</th>
                                <th style="font-size: 15px"> <input type="radio" id="UTM101" name="UTM1" value="1"></th>
                                <th style="font-size: 15px"> <input type="radio" id="UTM102" name="UTM1" value="2"></th>
                                <th style="font-size: 15px"> <input type="radio" id="UTM103" name="UTM1" value="3"></th>
                                <th style="font-size: 15px"> <input type="radio" id="UTM104" name="UTM1" value="4"></th>
                                <th style="font-size: 15px"> <input type="radio" id="UTM105" name="UTM1" value="5"></th>
                            </tr>
                            <tr>
                                <th class="text-sm">Conductiveness of training venue for teaching</th>
                                <th style="font-size: 15px"> <input type="radio" id="CTT101" name="CTT1" value="1"></th>
                                <th style="font-size: 15px"> <input type="radio" id="CTT102" name="CTT1" value="2"></th>
                                <th style="font-size: 15px"> <input type="radio" id="CTT103" name="CTT1" value="3"></th>
                                <th style="font-size: 15px"> <input type="radio" id="CTT104" name="CTT1" value="4"></th>
                                <th style="font-size: 15px"> <input type="radio" id="CTT105" name="CTT1" value="5"></th>
                            </tr>
                            <tr>
                                <th class="text-sm">Relevance of the interventions/assistance provided</th>
                                <th style="font-size: 15px"> <input type="radio" id="RIP101" name="RIP1" value="1"></th>
                                <th style="font-size: 15px"> <input type="radio" id="RIP102" name="RIP1" value="2"></th>
                                <th style="font-size: 15px"> <input type="radio" id="RIP103" name="RIP1" value="3"></th>
                                <th style="font-size: 15px"> <input type="radio" id="RIP104" name="RIP1" value="4"></th>
                                <th style="font-size: 15px"> <input type="radio" id="RIP105" name="RIP1" value="5"></th>
                            </tr>

                            <tr>
                                <th class="text-lg">4. Over-all perception of the service  </th>
                            </tr>

                            <tr>
                                <th class="text-sm">Your over-all satisfaction with the service provided by DOST XI </th>
                                <th style="font-size: 15px"> <input type="radio" id="SAT101" name="SAT1" value="1"></th>
                                <th style="font-size: 15px"> <input type="radio" id="SAT102" name="SAT1" value="2"></th>
                                <th style="font-size: 15px"> <input type="radio" id="SAT103" name="SAT1" value="3"></th>
                                <th style="font-size: 15px"> <input type="radio" id="SAT104" name="SAT1" value="4"></th>
                                <th style="font-size: 15px"> <input type="radio" id="SAT105" name="SAT1" value="5"></th>
                            </tr>

                            <tr>
                                <th class="text-lg">5. Would you like to recommend the programs and services of DOST XI to others?  </th>
                            </tr>

                            <tr>
                                <th class="text-sm">Considering the services availed, how likely are you to recommend DOST XI</th>
                                <th style="font-size: 15px"> <input type="radio" id="SAT201" name="SAT2" value="1"></th>
                                <th style="font-size: 15px"> <input type="radio" id="SAT202" name="SAT2" value="2"></th>
                                <th style="font-size: 15px"> <input type="radio" id="SAT203" name="SAT2" value="2"></th>
                                <th style="font-size: 15px"> <input type="radio" id="SAT204" name="SAT2" value="2"></th>
                                <th style="font-size: 15px"> <input type="radio" id="SAT205" name="SAT2" value="2"></th>
                            </tr>

                    </table>

                </div>
                </div>

                                <div class="center border-transparent">
                                    <label class="text-lg">6 . What other agencies/organizations/institutions that have assisted you with similar service?</label>
                                <div class="form-row w-auto">
                                   <!-- <label>Please Rank.</label>-->
                                    <table class="table table-stripped table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-sm">RANK</th>
                                                <th class="text-sm">Name of Agency/Organization/Instituition</th>
                                            </tr>
                                        </thead>

                                        <tr>
                                            <th style="font-size: 15px"><input type="text" class="form-control" required name="feedbackrank1" placeholder="Enter ..."></th>
                                            <th class="text-sm">Department of Science and Technology XI</th>
                                        </tr>

                                        <tr>
                                            <th style="font-size: 15px"><input type="text" class="form-control" required name="feedbackrank2" placeholder="Enter ..."></th>
                                            <th class="text-sm">Department of Trade and Industry XI</th>
                                        </tr>

                                        <tr>
                                            <th style="font-size: 15px"><input type="text" class="form-control" required name="feedbackrank3" placeholder="Enter ..."></th>
                                            <th class="text-sm">Technical Skill and Development Authority XI</th>
                                        </tr>

                                        <tr>
                                            <th style="font-size: 15px"><input type="text" class="form-control" required name="feedbackrank4" placeholder="Enter ..."></th>
                                            <th class="text-sm">University of Immaculate Concepcion</th>
                                        </tr>

                                        <tr>
                                            <th style="font-size: 15px"><input type="text" class="form-control" required name="feedbackrank5" placeholder="Enter ..."></th>
                                            <th class="text-sm">Others:</th>
                                        </tr>


                                    </table>

                                </div>
                                </div>

                                <div class="form-row ">
                                    <div class="form-group col-lg-8">
                                       <div class="p-1">
                                      <label class="text-sm"> Give at least three words that best describe your experience with the services availed:</label> 

                                      <br>
                                     
                                      <tr>
                                      <th> 1.)<input type="text" class="form-control" required name="feedbackexp1" placeholder="Enter ..."></th>
                                       <th>2.)<input type="text" class="form-control" required name="feedbackexp2" placeholder="Enter ..."></th>
                                      <th>3.)<input type="text" class="form-control" required name="feedbackexp3" placeholder="Enter ..."></th>
                                        </tr>

                                    </div>
                                

                                    <br>
                                    <label>8. Any other suggestions to improve our service?</label>
                                        <textarea class="form-control" rows="8" name="feedbacksuggest" placeholder="Enter ..."></textarea> <br>
                                        <label>Signature:<input type="text" class="form-control" required name="feedbacksignature" placeholder="Enter ..."></label>
                                        <label>Designation:<input type="text" class="form-control"  required name="feedbackdesignation" placeholder="Enter ..."></label>

                                   




                                     </div>


                                </div>



                    

                    </div>
                </div>

                    <button class="btn btn-info" id="update" type="submit">Submit Feedback</button>

                   

                    </form>
    </div>
               

        </section>


      <!-- Main Footer -->
      @endsection
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


<style>

.center {
margin: auto;
width: 100%;
border: 5px solid #f5b042;
padding: 10px;
}

</style>


