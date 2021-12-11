<x-admin-layout>
    <x-slot name="header">

<!-- Main content -->
 

@php
$disablecount = DB::table('users')->where('status', 0)->count();
$accountcount =  DB::table('users')->where('deleted_at', null)->count();
@endphp


       

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid font-RO">
            <!-- Info boxes -->
            <div class="row">
              <!-- /.col -->
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text ">Accounts Created</span>
                    <span class="info-box-number ">{{$accountcount}}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

              

              <!-- fix for small devices only -->
              <div class="clearfix hidden-md-up"></div>
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-alt-slash"></i></span>
    
                  <div class="info-box-content">
                    <span class="info-box-text ">Disabled Accounts</span>
                    <span class="info-box-number ">{{$disablecount}}</span>
                  </div>

                  
              
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
            </div>

          </div>

          


         




<section class="content">
 
    
 
  <div class="container-fluid font-RO">


      <div class="row"> 
        <div  class="col-12">

          

        <h2 class="float-left" style="font-size: 25px"> Users List  </h2>

        
           
        <a class="btn btn-sm btn-success float-right" href="{{ route('users.create') }}" role="button"> <i class="fas fa-user-plus"></i> ADD</a>
      
      </div>
      </div>
      


  
          

     
       <!-- <div class="card"> -->
          
            
          
  
         
            <table class="table table-bordered  table-hover">
              
                <thead class="thead-dark" style="font-size:15px;">
                  <tr>
                  <!--  <th scope="col">Id</th> -->
                    <th scope="col">Role</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>


                
                <tbody style="font-size:15px">
                    @foreach ($users as $user)
                    <tr>
                     <!--   <th scope="row">{{$user->id}}</th> -->
                        <td>{{$user->role}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>



                          @if ($user->status == 1)

                          <a title="Deactivate" class="btn btn-sm btn-success " href="{{ route('users.status.update', ['user_id' => $user->id, 'status_code'=>0]) }}" role="button"><i class="fas fa-toggle-on"></i></a>
                          
                          @else

                          <a title="Activate" class="btn btn-sm btn-danger " href="{{ route('users.status.update', ['user_id'=>$user->id, 'status_code'=>1]) }}" role="button"><i class="fas fa-toggle-off"></i></a>
                          

                          @endif

                            <a class="btn btn-sm btn-primary m-2" title="Edit" href="{{ route('users.edit', $user->id) }}" role="button"><i class="fa fa-pencil-square-o"></i></a>
                           
                           
                      
                           



                            <button type="button"   class="btn btn-sm btn-danger"
                            onclick="event.preventDefault();
                            document.getElementById('delete-user-form-{{ $user->id}}').submit()">
                            <i class="far fa-trash-alt"></i>
                            </button>

                            <form id="delete-user-form-{{$user->id}}"action="{{route('users.destroy', $user->id)  }}" method="POST" style="display: none">
                                @csrf
                                @method("DELETE")
                            </form>
                        </td>
                      </tr>
                    @endforeach
         
                </tbody>
              </table>
              {{$users->links()}}
        </div> <!-- div class -->
        </div>  <!-- container fluid class -->
      </section>
 

</x-admin-layout>
