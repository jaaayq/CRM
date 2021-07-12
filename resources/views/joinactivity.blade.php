<x-app-layout>
    <x-slot name="slot">
       <!-- Content Wrapper. Contains page content -->

        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
  <!-- general form elements disabled -->
        <div class="card card-warning">
            <div class="card-header">
            <h3 class="card-title">CUSTOMER SATISFACTION FEEDBACK FORM</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form class="center" method="POST" action="{{ route('store.createfeedback') }}" enctype="multipart/form-data"  >
                    @csrf
                    <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label>Name of Company</label>
                        <input type="text" name="feedbackcompanyname" class="form-control" placeholder="Enter ...">
                    </div>

                    {{--DATE--}}
                    <div class="form-group col-sm-6">
                        <label>Date:</label>
                          <div class="input-group date" id="reservationdate" data-target-input="nearest">
                              <input type="text" name="feedbackdate" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                          </div>
                      </div>

                      <div class="form-group col-sm-6">
                        <label>Address</label>
                        <input type="text" name="feedbackaddress" class="form-control" placeholder="Enter ...">
                    </div>

                    <div class="form-group col-sm-6">
                        <label>Telephone No.</label>
                        <input type="text" name="feedbacktelephone" class="form-control" placeholder="Enter ...">
                    </div>

                    <div class="form-group col-sm-6">
                        <label>Email Address</label>
                        <input type="text" name="feedbackemail" class="form-control" placeholder="Enter ...">
                    </div>

                    <div class="form-group col-sm-6">
                        <label>Gender</label>
                        <select class="form-control " name="feedbackgender" style="width: 100%;">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                    </div>

                    <div class="form-horizontal" >
                        <label>Nature of Business (please check):</label>
                        <div class="checkbox">
                            <label><input type="checkbox" name="feedbacknature"/> Food/Beverage </label>
                            <label><input type="checkbox" name="feedbacknature"/> Agriculture/Horticulture </label>
                            <label><input type="checkbox" name="feedbacknature"/> Metals & Engineering </label>
                            <label><input type="checkbox" name="feedbacknature"/> Construction </label>
                            <label><input type="checkbox" name="feedbacknature"/> Pharmaceuticals </label>
                            <label><input type="checkbox" name="feedbacknature"/> Electronics/Semiconductors </label>
                            <label><input type="checkbox" name="feedbacknature"/> Transport </label>
                            <label><input type="checkbox" name="feedbacknature"/> Plastic/Rubber </label>
                            <label><input type="checkbox" name="feedbacknature"/> Chemicals/Petrochemicals </label>
                            <label><input type="checkbox" name="feedbacknature"/> Mining </label>
                            <label><input type="checkbox" name="feedbacknature"/> Trading </label>
                            <label><input type="checkbox" name="feedbacknature"/> Academe </label>
                            <label><input type="checkbox" name="feedbacknature"/> Government </label>
                            <input type="text" class="form-control"  name="feedbacknature" placeholder="Others, Please specify">
                    </div>
                </div>

                      <div class="form-group col-sm-6">
                            <div class="checkbox">
                            <label>Is it your first time to avail of the programs and services of DOST XI?</label>
                            <label><input type="checkbox" name="feedbackyesno1" /> Yes </label>
                             <label><input type="checkbox" name="feedbackyesno1" /> No </label>
                            </div>
                     </div>

                     <div>
                        <label style="font-size: 20px">1 . Services availed from DOST XI</label>
                    <div class="form-row">
                        <label>Technology Intervention (please specify):</label>
                        <input type="text" class="form-control" name="feedbackserviceavailed1" placeholder="Enter ...">
                        <label>Technology Intervention (please specify):</label>
                        <input type="text" class="form-control" name="feedbackserviceavailed2" placeholder="Enter ...">
                    </div>
                    </div>

                    <div class="form-col-sm-6" >
                        <label>Consultancy Service:</label>
                        <div class="checkbox">
                            <label><input type="checkbox" name="feedbackconsultancy"/> Energy Audit </label>
                            <label><input type="checkbox" name="feedbackconsultancy"/> MPEX </label>
                            <label><input type="checkbox" name="feedbackconsultancy"/> Plant Layout Design </label>
                            <label><input type="checkbox" name="feedbackconsultancy"/> CPT </label>
                            <label><input type="checkbox" name="feedbackconsultancy"/> GMP Assessment </label>
                            <input type="text" class="form-control" name="feedbackconsultancy" placeholder="Others (specify):">
                    </div>
                </div>

                <div class="form-col-sm-6">
                    <label>Packaging and Labeling Services:</label>
                    <div class="checkbox">
                        <label><input type="checkbox" name="feedbackpackaging"/> Label Design </label>
                        <label><input type="checkbox" name="feedbackpackaging"/> Nutrition Facts Labeling </label>
                        <label><input type="checkbox" name="feedbackpackaging"/> PTD Services </label>
                        <input type="text" class="form-control" name="feedbackpackaging" placeholder=" Others (specify):">
                </div>
            </div>

                <div class="form-row">
                    <label>Scholarship (please indicate assistance):</label>
                    <input type="text" class="form-control" name="feedbackscholarship" placeholder="Enter ...">
                    <label>Formula of Conversion (please indicate product):</label>
                    <input type="text" class="form-control" name="feedbackconversion" placeholder="Enter ...">
                    <label>R&D Management (please specify):</label>
                    <input type="text" class="form-control" name="feedbackmanagement" placeholder="Enter ...">
                    <input type="text" class="form-control" name="feedbackmanagementspecify" placeholder="Others (Specify): ">

                </div>

                <div class="center">
                    <label style="font-size: 20px">2 . Delivery Services </label>
                <div class="form-row">
                    <label style="font-size: 20px">1- Poor 2- Fair 3-Satisfactory 4- Very Satisfactory 5- Excellent</label>
                    <table class="table table-stripped table-bordered">
                        <thead>
                            <tr>
                                <th style="font-size: 20px">ASPECTS</th>
                                <th style="font-size: 20px">1</th>
                                <th style="font-size: 20px">2</th>
                                <th style="font-size: 20px">3</th>
                                <th style="font-size: 20px">4</th>
                                <th style="font-size: 20px">5</th>
                            </tr>
                        </thead>

                            <tr>
                                <th style="font-size: 20px">1. Timelessness</th>
                            </tr>

                            <tr>
                                <th style="font-size: 15px">Timelessness on the conduct of the activity as indicated
                                in the program (time started, time allotted per topic, time ended)</th>
                                <th style="font-size: 15px"> <input type="radio" id="timelessness101" name="t1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="timelessness102" name="t1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="timelessness103" name="t1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="timelessness104" name="t1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="timelessness105" name="t1" ></th>
                            </tr>
                            <tr>
                                <th style="font-size: 15px">Timelessness on the delivery of service,per agreed terms</th>
                                <th style="font-size: 15px"> <input type="radio" id="timelessness201" name="t2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="timelessness202" name="t2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="timelessness203" name="t2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="timelessness204" name="t2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="timelessness205" name="t2" ></th>
                            </tr>

                            <tr>
                                <th style="font-size: 20px">2. Attitude of Staff</th>
                            </tr>

                            <tr>
                                <th style="font-size: 15px">Courtesy and professionalism of the staff assigned to assist you</th>
                                <th style="font-size: 15px"> <input type="radio" id="AOS101" name="AOS1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="AOS102" name="AOS1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="AOS103" name="AOS1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="AOS104" name="AOS1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="AOS105" name="AOS1" ></th>
                            </tr>
                            <tr>
                                <th style="font-size: 15px">Courtesy and professionalism of the trainers/experts for the
                                     training/service</th>
                                <th style="font-size: 15px"> <input type="radio" id="AOS201" name="AOS2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="AOS202" name="AOS2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="AOS203" name="AOS2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="AOS204" name="AOS2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="AOS205" name="AOS2" ></th>
                            </tr>

                            <tr>
                                <th style="font-size: 20px">3. Quality of Service</th>
                            </tr>

                            <tr>
                                <th style="font-size: 15px">Achievement of training objectives</th>
                                <th style="font-size: 15px"> <input type="radio" id="QOS101" name="QOS1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="QOS102" name="QOS1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="QOS103" name="QOS1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="QOS104" name="QOS1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="QOS105" name="QOS1" ></th>
                            </tr>
                            <tr>
                                <th style="font-size: 15px">Delivery and mastery of the trainers on the topic/s</th>
                                <th style="font-size: 15px"> <input type="radio" id="QOS201" name="QOS2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="QOS202" name="QOS2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="QOS203" name="QOS2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="QOS204" name="QOS2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="QOS205" name="QOS2" ></th>
                            </tr>
                            <tr>
                                <th style="font-size: 15px">Usefulness of the training materials</th>
                                <th style="font-size: 15px"> <input type="radio" id="UTM101" name="UTM1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="UTM102" name="UTM1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="UTM103" name="UTM1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="UTM104" name="UTM1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="UTM105" name="UTM1" ></th>
                            </tr>
                            <tr>
                                <th style="font-size: 15px">Conductiveness of training venue for teaching</th>
                                <th style="font-size: 15px"> <input type="radio" id="CTT101" name="CTT1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="CTT102" name="CTT1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="CTT103" name="CTT1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="CTT104" name="CTT1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="CTT105" name="CTT1" ></th>
                            </tr>
                            <tr>
                                <th style="font-size: 15px">Relevance of the interventions/assistance provided</th>
                                <th style="font-size: 15px"> <input type="radio" id="RIP101" name="RIP1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="RIP102" name="RIP1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="RIP103" name="RIP1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="RIP104" name="RIP1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="RIP105" name="RIP1" ></th>
                            </tr>

                            <tr>
                                <th style="font-size: 20px">4. Over-all perception of the service  </th>
                            </tr>

                            <tr>
                                <th style="font-size: 15px">Your over-all satisfaction with the service provided by DOST XI </th>
                                <th style="font-size: 15px"> <input type="radio" id="SAT101" name="SAT1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="SAT102" name="SAT1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="SAT103" name="SAT1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="SAT104" name="SAT1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="SAT105" name="SAT1" ></th>
                            </tr>

                            <tr>
                                <th style="font-size: 20px">5. Would you like to recommend the programs and services of DOST XI to others?  </th>
                            </tr>

                            <tr>
                                <th style="font-size: 15px">Considering the services availed, how likely are you to recommend DOST XI</th>
                                <th style="font-size: 15px"> <input type="radio" id="SAT201" name="SAT2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="SAT202" name="SAT2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="SAT203" name="SAT2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="SAT204" name="SAT2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="SAT205" name="SAT2" ></th>
                            </tr>

                    </table>

                </div>
                </div>

                                <div class="center">
                                    <label style="font-size: 20px">6 . What other agencies/organizations/institutions that have assisted you with similar service?</label>
                                <div class="form-row">
                                    <label>Please Rank.</label>
                                    <table class="table table-stripped table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="font-size: 20px">RANK</th>
                                                <th style="font-size: 20px">Name of Agency/Organization/Instituition</th>
                                            </tr>
                                        </thead>

                                        <tr>
                                            <th style="font-size: 15px"><input type="text" class="form-control" name="feedbackrank1" placeholder="Enter ..."></th>
                                            <th style="font-size: 15px">Department of Science and Technology XI</th>
                                        </tr>

                                        <tr>
                                            <th style="font-size: 15px"><input type="text" class="form-control" name="feedbackrank2" placeholder="Enter ..."></th>
                                            <th style="font-size: 15px">Department of Trade and Industry XI</th>
                                        </tr>

                                        <tr>
                                            <th style="font-size: 15px"><input type="text" class="form-control" name="feedbackrank3" placeholder="Enter ..."></th>
                                            <th style="font-size: 15px">Technical Skill and Development Authority XI</th>
                                        </tr>

                                        <tr>
                                            <th style="font-size: 15px"><input type="text" class="form-control" name="feedbackrank4" placeholder="Enter ..."></th>
                                            <th style="font-size: 15px">University of Immaculate Concepcion</th>
                                        </tr>

                                        <tr>
                                            <th style="font-size: 15px"><input type="text" class="form-control" name="feedbackrank5" placeholder="Enter ..."></th>
                                            <th style="font-size: 15px">Others:</th>
                                        </tr>


                                    </table>

                                </div>
                                </div>

                                <div class="form-row ">
                                    <div class="form-group col-lg-8">
                                       <label>7. Give at least three words that best describe your experience with the services availed:</label>
                                       <label>1.)<input type="text" class="form-control" name="feedbackexp1" placeholder="Enter ..."></label>
                                       <label>2.)<input type="text" class="form-control" name="feedbackexp2" placeholder="Enter ..."></label>
                                       <label>3.)<input type="text" class="form-control" name="feedbackexp3" placeholder="Enter ..."></label>
                                <div >
                                    <label>8. Any other suggestions to improve our service?</label>
                                        <textarea class="form-control" rows="8" name="feedbacksuggest" placeholder="Enter ..."></textarea>
                                        <label>Signature:<input type="text" class="form-control" name="feedbacksignature" placeholder="Enter ..."></label>
                                        <label>Designation:<input type="text" class="form-control" name="feedbackdesignation" placeholder="Enter ..."></label>

                                    </div>
                                </div>


                                    </div>





                    </div>
                </div>

                    <button class="btn btn-primary" id="update" type="submit">SUBMIT FEEDBACK</button>


                    </form>



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


<style>

.center {
margin: auto;
width: 100%;
border: 5px solid #f5b042;
padding: 10px;
}

</style>


