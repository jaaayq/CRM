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
                <form >
                    <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label>Name of Company</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                    </div>

                    {{--DATE--}}
                    <div class="form-group col-sm-6">
                        <label>Date:</label>
                          <div class="input-group date" id="reservationdate" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                          </div>
                      </div>

                      <div class="form-group col-sm-6">
                        <label>Address</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                    </div>

                    <div class="form-group col-sm-6">
                        <label>Telephone No.</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                    </div>

                    <div class="form-group col-sm-6">
                        <label>Email Address</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                    </div>

                    <div class="form-group col-sm-6">
                        <label>Gender</label>
                        <select class="form-control select2" style="width: 100%;">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                    </div>

                    <div class="form-horizontal" >
                        <label>Nature of Business (please check):</label>
                        <div class="checkbox">
                            <label><input type="checkbox"/> Food/Beverage </label>
                            <label><input type="checkbox"/> Agriculture/Horticulture </label>
                            <label><input type="checkbox"/> Metals & Engineering </label>
                            <label><input type="checkbox"/> Construction </label>
                            <label><input type="checkbox"/> Pharmaceuticals </label>
                            <label><input type="checkbox"/> Electronics/Semiconductors </label>
                            <label><input type="checkbox"/> Transport </label>
                            <label><input type="checkbox"/> Plastic/Rubber </label>
                            <label><input type="checkbox"/> Chemicals/Petrochemicals </label>
                            <label><input type="checkbox"/> Mining </label>
                            <label><input type="checkbox"/> Trading </label>
                            <label><input type="checkbox"/> Academe </label>
                            <label><input type="checkbox"/> Government </label>
                            <label><input type="checkbox"/> Others, please specify </label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                </div>

                      <div class="form-group col-sm-6">
                            <div class="checkbox">
                            <label>Is it your first time to avail of the programs and services of DOST XI?</label>
                            <label><input type="checkbox"/> Yes </label>
                             <label><input type="checkbox"/> No </label>
                            </div>
                     </div>

                     <div>
                        <label style="font-size: 20px">1 . Services availed from DOST XI</label>
                    <div class="form-row">
                        <label>Technology Intervention (please specify):</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                        <label>Technology Intervention (please specify):</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                    </div>

                    <div class="form-col-sm-6" >
                        <label>Consultancy Service:</label>
                        <div class="checkbox">
                            <label><input type="checkbox"/> Energy Audit </label>
                            <label><input type="checkbox"/> MPEX </label>
                            <label><input type="checkbox"/> Plant Layout Design </label>
                            <label><input type="checkbox"/> CPT </label>
                            <label><input type="checkbox"/> GMP Assessment </label>
                            <label><input type="checkbox"/> Others (specify): </label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                </div>

                <div class="form-col-sm-6">
                    <label>Packaging and Labeling Services:</label>
                    <div class="checkbox">
                        <label><input type="checkbox"/> Label Design </label>
                        <label><input type="checkbox"/> Nutrition Facts Labeling </label>
                        <label><input type="checkbox"/> PTD Services </label>
                        <label><input type="checkbox"/> Others (specify): </label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>

                <div class="form-row">
                    <label>Scholarship (please indicate assistance):</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                    <label>Formula of Conversion (please indicate product):</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                    <label>R&D Management (please specify):</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                    <label>Others (please specify):</label>
                    <input type="text" class="form-control" placeholder="Enter ...">

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
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r3" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r4" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r5" ></th>
                            </tr>
                            <tr>
                                <th style="font-size: 15px">Timelessness on the delivery of service,per agreed terms</th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r3" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r4" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r5" ></th>
                            </tr>

                            <tr>
                                <th style="font-size: 20px">2. Attitude of Staff</th>
                            </tr>

                            <tr>
                                <th style="font-size: 15px">Courtesy and professionalism of the staff assigned to assist you</th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r3" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r4" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r5" ></th>
                            </tr>
                            <tr>
                                <th style="font-size: 15px">Courtesy and professionalism of the trainers/experts for the
                                     training/service</th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r3" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r4" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r5" ></th>
                            </tr>

                            <tr>
                                <th style="font-size: 20px">3. Quality of Service</th>
                            </tr>

                            <tr>
                                <th style="font-size: 15px">Achievement of training objectives</th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r3" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r4" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r5" ></th>
                            </tr>
                            <tr>
                                <th style="font-size: 15px">Delivery and mastery of the trainers on the topic/s</th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r3" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r4" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r5" ></th>
                            </tr>
                            <tr>
                                <th style="font-size: 15px">Usefulness of the training materials</th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r3" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r4" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r5" ></th>
                            </tr>
                            <tr>
                                <th style="font-size: 15px">Conductiveness of training venue for teaching</th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r3" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r4" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r5" ></th>
                            </tr>
                            <tr>
                                <th style="font-size: 15px">Relevance of the interventions/assistance provided</th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r3" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r4" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r5" ></th>
                            </tr>

                            <tr>
                                <th style="font-size: 20px">4. Over-all perception of the service  </th>
                            </tr>

                            <tr>
                                <th style="font-size: 15px">Your over-all satisfaction with the service provided by DOST XI </th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r3" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r4" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r5" ></th>
                            </tr>

                            <tr>
                                <th style="font-size: 20px">5. Would you like to recommend the programs and services of DOST XI to others?  </th>
                            </tr>

                            <tr>
                                <th style="font-size: 15px">Considering the services availed, how likely are you to recommend DOST XI</th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r1" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r2" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r3" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r4" ></th>
                                <th style="font-size: 15px"> <input type="radio" id="radioPrimary1" name="r5" ></th>
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
                                            <th style="font-size: 15px"><input type="text" class="form-control" placeholder="Enter ..."></th>
                                            <th style="font-size: 15px">Department of Science and Technology XI</th>
                                        </tr>

                                        <tr>
                                            <th style="font-size: 15px"><input type="text" class="form-control" placeholder="Enter ..."></th>
                                            <th style="font-size: 15px">Department of Trade and Industry XI</th>
                                        </tr>

                                        <tr>
                                            <th style="font-size: 15px"><input type="text" class="form-control" placeholder="Enter ..."></th>
                                            <th style="font-size: 15px">Technical Skill and Development Authority XI</th>
                                        </tr>

                                        <tr>
                                            <th style="font-size: 15px"><input type="text" class="form-control" placeholder="Enter ..."></th>
                                            <th style="font-size: 15px">University of Immaculate Concepcion</th>
                                        </tr>

                                        <tr>
                                            <th style="font-size: 15px"><input type="text" class="form-control" placeholder="Enter ..."></th>
                                            <th style="font-size: 15px">Others:</th>
                                        </tr>


                                    </table>

                                </div>
                                </div>




                    </div>
                </div>

                    <div><button class="btn btn-primary" type="submit">SUBMIT FEEDBACK</button></div>


                    </form>



        </section>


      <!-- Main Footer -->
    </x-slot>

</x-app-layout>
<!-- ChartJS -->

<style>

.center {
margin: auto;
width: 100%;
border: 5px solid #f5b042;
padding: 10px;
}

</style>

