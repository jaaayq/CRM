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
            <form>
                <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <div class="row">
                    <div class="col-sm-6">
                    <label>Name of Company</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                    <label>Email Address</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                    </div>

                    <div class="form-group">
                    <label>Date:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                    </div>

                    <label>Telephone No.</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                    <label>Gender</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                    </div>

                    <form class="form-horizontal">
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
                    </form>


                </div>
                <label>Is it your first time to avail of the programs and services of DOST XI?</label>
                <form class="form-horizontal">
                    <div class="checkbox">
                    <label><input type="checkbox"/> Yes </label>
                    <label><input type="checkbox"/> No </label>
                    </div>
                </form>

                    </div>
                    <label>1. Services availed from DOST XI:</label>
                    <div>
                    <label>Technology Intervention (please specify:)</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                    <label>Traning/Seminar/Forum (please indicate title:)</label>
                    <input type="text" class="form-control" placeholder="Enter ...">

                    <label>Consultancy:</label>
                    <form class="form-horizontal">
                        <div class="checkbox">
                        <label><input type="checkbox"/> Energy Audit </label>
                        <label><input type="checkbox"/> MPEX </label>
                        <label><input type="checkbox"/> Plant Layout Design </label>
                        <label><input type="checkbox"/> CPT </label>
                        <label><input type="checkbox"/> GMP Assessment </label>
                        <label><input type="checkbox"/> Others (specify): </label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                    </form>


                    </div>


                    </form>
                    </div>






             </div>
            </div>
            </div>
            </div>
            </form>

        </div>


        </section>


      <!-- Main Footer -->
    </x-slot>

</x-app-layout>
<!-- ChartJS -->


