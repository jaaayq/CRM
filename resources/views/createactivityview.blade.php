<x-app-layout>
    <x-slot name="slot">
       <!-- Content Wrapper. Contains page content -->

        <!-- /.content-header -->


{{--CREATE ACITVITY VIEW BLADE--}}


        <!-- Main content -->
        <section class="col-md-12  ">
            <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title font-RO">ACTIVITIES</h3>
                </div>
                <div class="card-body">
                    <section class="col-md-12">
                        <div class="card">
                            <div class="card-header ">
                                <h3>
                                    <a title="Add Activity" class="btn btn-success float-right btn-sm " href="{{route('create.createactivity')}}"><i class="fas fa-plus-square"></i> &nbsp;ADD</a>
                                </h3>
                            </div>

                            <div class="card-body" style="color: #070807; background: white;">
                                <table id="myTable" class="table table-stripped tabel-bordered" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th style="font-family:Inter; font-size: 12px">Activity No.</th>
                                            <th style="font-family:Inter; font-size: 12px">Activity Name</th>
                                            <th style="font-family:Inter; font-size: 12px">Start Time</th>
                                            <th style="font-family:Inter; font-size: 12px">Finish Time</th>
                                            <th style="font-family:Inter; font-size: 12px">Activity Description</th>
                                            <th style="font-family:Inter; font-size: 12px">Activity Code</th>

                                           <!-- <th style="font-size: 12px">Activity Code</th> -->

                                            <th style="font-family:Inter; font-size: 12px">Action</th>
                                        </tr>
                                    </thead>

                                    @foreach ($alldata as $key => $data)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $data->activityname }}</td>
                                        <td>{{ $data->activitydate }}</td>
                                        <td>{{ $data->date_finished }}</td>
                                        <td>{{ $data->activitydescription }}</td>
                                        <td>{{ $data->activitycode }}</td>
                                        <td>
                                            
                                          
                           
                                            @if ($data->activity_status == 1)
                  
                                            <a title="De-activate" class="btn btn-sm btn-success m-0" href="{{ route('activity.status.update', ['act_id' => $data->id, 'act_status'=>0]) }}" role="button"><i class="fa fa-check"></i></a>
                                            
                                            @else
                  
                                            <a title="Activate" class="btn btn-sm btn-danger m-0" href="{{ route('activity.status.update', ['act_id'=>$data->id, 'act_status'=>1]) }}" role="button"><i class="fa fa-ban"></i></a>
                                            
                  
                                            @endif



                                        <a title="Edit" class="btn btn-sm btn-primary m-1" href="{{ route('edit.createactivity', $data->id) }}"><i class="fas fa-pencil-square-o"></i></a>
                                        <a title="Delete" id="delete" class="btn btn-sm btn-danger" href="{{ route('delete.createactivity', $data->id) }}"><i class="far fa-trash-alt"></i></a>
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
