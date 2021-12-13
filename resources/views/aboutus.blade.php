<x-app-layout>
    <x-slot name="slot">
       <!-- Content Wrapper. Contains page content -->

        <!-- /.content-header -->


{{--JOIN ACTIVITY AUTHENTICATION BLADE--}}


        <!-- Main content -->

        @php
        $prefix = Request::route()->getPrefix();
        $route= Route::current()->getName();
        @endphp



        <section class="col-md-12 font-RO ">
          <div class="pl-2 pr-2">
            <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title">
                    ABOUT THE SYSTEM
                </h3>
                </div>

                <div class="card-body ">
                   <h3> CUSTOMER RELATIONSHIP MANAGEMENT SYSTEM</h3>
                   <h6> -The system is able to create an activity and getting the feedback from the customer</h6>
                   <br>
                   <h5> RESPONSIVE</h5>
                   <h6>1.) Create Activity with Crud Opertations</h6>
                   <h6>2.) FeedBack Form</h6>
                   <h6>3.) Login and register</h6>
                   <h6>4.) Username</h6>
                   <h6>5.) Pie Chart</h6>
                   <h6>6.) Assigning roles</h6>
                   <h6>7.) Customer Code</h6>
                   <h6>8.) Account availability</h6>
                   <h6>9.) Feedback availability</h6>
                   <h6>10.) Admin Crud</h6>
                   <h6>11.) API Crud</h6>
                   <h6>12.) Soft Deletes</h6>
                   <h6>13.) Notifications on all CRUD Operations</h6>
                   <h6>14.) Validations</h6>
                   <h6>15.) Feedback Stats</h6>


                   <br>
                   <br>
                   <h5> ISSUES</h5>
                   <h6>1.) Join Activity Authentication</h6>
                   

                   <br>
                   <br>
                   <br>
                   <br>
                   <h5> For more information kindly contact:</h5>
                   <h6> Jay P. Quiñones</h6>
                   <h6>Contact Number:</h6>
                   <h6>Email:</h6>


                   <h6> Dex Karl R. Duque</h6>
                   <h6>Contact Number: 09950972831</h6>
                   <h6>Email: d.duque.401453@umindanao.edu.ph</h6>

                 </div>
            </div>
        </section>




      <!-- Main Footer -->
    </x-slot>

</x-app-layout>
<!-- ChartJS -->



