<x-app-layout>
    <x-slot name="slot">
       <!-- Content Wrapper. Contains page content -->

        <!-- /.content-header -->

        <!-- Main content -->

        @php
        $prefix = Request::route()->getPrefix();
        $route= Route::current()->getName();


          @endphp
        <section class="col-md-12">
            <div class="card card-warning">
                <div class="card-header">
                <h3 class="card-title">
                    JOIN ACTIVITY
                </h3>
                </div>

                <div class="card-body">
                    <form>
                            <label>ENTER ACTIVITY CODE:</label>
                            <input id="authenticationcode" class="form-control"  type="email" name="authenticationcode" :value="old('authenticationcode')" required  />
                            <div>
                                <a class="btn btn-primary" href="{{ route('viewjoin.joinactivity') }}" class="nav-link {{ ($route=='viewjoin.joinactivity')?'active':'' }}" role="button">JOIN ACTIVITY</a>
                            </div>
                </div>
            </form>


            </div>
        </section>




      <!-- Main Footer -->
    </x-slot>

</x-app-layout>
<!-- ChartJS -->



