<x-app-layout>
    <x-slot name="slot">
       <!-- Content Wrapper. Contains page content -->

        <!-- /.content-header -->

        <!-- Main content -->
        <section class="col-md-12">
            <div class="card card-warning">
                <div class="card-header">
                <h3 class="card-title">FEEDBACK LOG</h3>
                </div>
                <div class="card-body">
                    <section class="col-md-12">
                        <div class="card">
                            <div class="card-body" style="color: #070807; background: white;">
                                <table id="myTable" class="table table-stripped tabel-bordered" style="width: 100% ">
                                    <thead>
                                        <tr>
                                            <th style="font-size: 12px">Feedback ID.</th>
                                            <th style="font-size: 12px">Company Name</th>
                                            <th style="font-size: 12px">Date</th>
                                            <th style="font-size: 12px">Address</th>
                                            <th style="font-size: 12px">Telephone</th>
                                            <th style="font-size: 12px">Email</th>
                                            <th style="font-size: 12px">Gender</th>
                                            <th style="font-size: 12px">Nature</th>
                                            <th style="font-size: 12px">Yes/No</th>
                                            <th style="font-size: 12px">Service Availed 1</th>
                                            <th style="font-size: 12px">Service Availed 2</th>
                                            <th style="font-size: 12px">Consultancy</th>
                                            <th style="font-size: 12px">Packaging</th>
                                            <th style="font-size: 12px">Scholarship</th>
                                            <th style="font-size: 12px">Conversion</th>
                                            <th style="font-size: 12px">Management</th>
                                            <th style="font-size: 12px">Management Specify</th>
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
                                            <th style="font-size: 12px">Rank 1 </th>
                                            <th style="font-size: 12px">Rank 2 </th>
                                            <th style="font-size: 12px">Rank 3 </th>
                                            <th style="font-size: 12px">Rank 4 </th>
                                            <th style="font-size: 12px">Rank 5 </th>
                                            <th style="font-size: 12px">Experience 1 </th>
                                            <th style="font-size: 12px">Experience 2 </th>
                                            <th style="font-size: 12px">Experience 3  </th>
                                            <th style="font-size: 12px">Suggestion </th>
                                            <th style="font-size: 12px">Signature </th>
                                            <th style="font-size: 12px">Designation </th>


                                        </tr>
                                    </thead>

                                    @foreach ($alldata as $key => $data)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $data->feedbackcompanyname }}</td>
                                        <td>{{ $data->feedbackdate }}</td>
                                        <td>{{ $data->feedbackaddress }}</td>
                                        <td>{{ $data->feedbacktelephone }}</td>
                                        <td>{{ $data->feedbackemail }}</td>
                                        <td>{{ $data->feedbackgender }}</td>
                                        <td>{{ $data->feedbacknature }}</td>
                                        <td>{{ $data->feedbackyesno1 }}</td>
                                        <td>{{ $data->feedbackserviceavailed1 }}</td>
                                        <td>{{ $data->feedbackserviceavailed2 }}</td>
                                        <td>{{ $data->feedbackconsultancy }}</td>
                                        <td>{{ $data->feedbackpackaging }}</td>
                                        <td>{{ $data->feedbackscholarship }}</td>
                                        <td>{{ $data->feedbackconversion }}</td>
                                        <td>{{ $data->feedbackmanagement }}</td>
                                        <td>{{ $data->feedbackmanagementspecify }}</td>
                                        <td>{{ $data->t1 }}</td>
                                        <td>{{ $data->t2 }}</td>
                                        <td>{{ $data->AOS1 }}</td>
                                        <td>{{ $data->AOS2 }}</td>
                                        <td>{{ $data->QOS1 }}</td>
                                        <td>{{ $data->QOS2 }}</td>
                                        <td>{{ $data->UTM1 }}</td>
                                        <td>{{ $data->CTT1 }}</td>
                                        <td>{{ $data->RIP1 }}</td>
                                        <td>{{ $data->SAT1 }}</td>
                                        <td>{{ $data->SAT2 }}</td>
                                        <td>{{ $data->feedbackrank1 }}</td>
                                        <td>{{ $data->feedbackrank2 }}</td>
                                        <td>{{ $data->feedbackrank3 }}</td>
                                        <td>{{ $data->feedbackrank4 }}</td>
                                        <td>{{ $data->feedbackrank5 }}</td>
                                        <td>{{ $data->feedbackexp1 }}</td>
                                        <td>{{ $data->feedbackexp2 }}</td>
                                        <td>{{ $data->feedbackexp3 }}</td>
                                        <td>{{ $data->feedbacksuggest }}</td>
                                        <td>{{ $data->feedbacksignature }}</td>
                                        <td>{{ $data->feedbackdesignation }}</td>

                                    </tr>
                                    @endforeach

                                </table>

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
