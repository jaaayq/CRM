<x-app-layout>
    <x-slot name="slot">
       <!-- Content Wrapper. Contains page content -->

        <!-- /.content-header -->

        <!-- Main content -->

        <section class="col-md-12">
            <div class="card card-warning">
                <div class="card-header">
                <h3 class="card-title">
                    JOIN ACTIVITY
                </h3>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ (@$editdata)?route('update.createactivity', $editdata->id): route('store.createactivity') }}" enctype="multipart/form-data">
                            <label>ENTER ACTIVITY CODE:</label>
                            <input id="authenticationcode" class="form-control" type="email" name="authenticationcode" :value="old('authenticationcode')" required autofocus />
                            <div>
                                <button class="btn btn-primary" id="update" type="submit">ENTER ACTIVITY</button>
                            </div>
                </div>
            </form>


            </div>
        </section>




      <!-- Main Footer -->
    </x-slot>

</x-app-layout>
<!-- ChartJS -->



