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
                    <form action="{{ route('data.index') }}" method="GET" role="search">
                            <label>ENTER ACTIVITY CODE:</label>
                            <input class="form-control mr-2" name="code" placeholder="Activity Code" id="code" required  />

                                {{--<a class="btn btn-primary" href="{{ route('viewjoin.joinactivity') }}" class="nav-link {{ ($route=='viewjoin.joinactivity')?'active':'' }}" role="button">JOIN ACTIVITY</a>
                           --}}
                        <div>
                           <a href="{{ route('viewjoin.joinactivity') }}" class=" mt-1">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button" title="Refresh page">JOIN ACTIVITY
                                </button>
                        </div>

            </form>


            </div>

        </section>




      <!-- Main Footer -->
    </x-slot>

</x-app-layout>
<!-- ChartJS -->



