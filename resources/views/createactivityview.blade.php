<x-app-layout>
    <x-slot name="slot">
       <!-- Content Wrapper. Contains page content -->

        <!-- /.content-header -->


{{--CREATE ACITVITY VIEW BLADE--}}


        <!-- Main content -->
        <section class="col-md-12">
            <div class="card card-warning">
                <div class="card-header">
                <h3 class="card-title">ACIVITIES</h3>
                </div>
                <div class="card-body">
                    <section class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>
                                    <a class="btn btn-success float-right btn-sm" href="{{route('create.createactivity')}}"><i class="fa fa-list"> CREATE ACTIVITY</i></a>
                                </h3>
                            </div>

                            <div class="card-body" style="color: #070807; background: white;">
                                <table id="myTable" class="table table-stripped tabel-bordered" style="width: 100% ">
                                    <thead>
                                        <tr>
                                            <th style="font-size: 12px">Activity No.</th>
                                            <th style="font-size: 12px">Acitvity Name</th>
                                            <th style="font-size: 12px">Date of Activity</th>
                                            <th style="font-size: 12px">Activity Description</th>
                                            <th style="font-size: 12px">Activity Code</th>

                                            <th style="font-size: 12px">Action</th>
                                        </tr>
                                    </thead>

                                    @foreach ($alldata as $key => $data)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $data->activityname }}</td>
                                        <td>{{ $data->activitydate }}</td>
                                        <td>{{ $data->activitydescription }}</td>
                                        <td>{{ $data->activitycode }}</td>
                                        <td>
                                        <a title="Edit" class="btn btn-sm btn-primary" href="{{ route('edit.createactivity', $data->id) }}">EDIT</a>
                                        <a title="Delete" id="delete" class="btn btn-sm btn-danger" href="{{ route('delete.createactivity', $data->id) }}">DELETE</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </table>
                            </div>
                            </div>
                    </section>
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
    $('#myTable').DataTable();
} );

</script>
