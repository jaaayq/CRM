<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;

use Illuminate\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Type\Integer;
use Symfony\Component\HttpFoundation\Response;
use Throwable;


class UsersController extends Controller
{
    public function index()
    {

        return view('admin.users.index', ['users'=> User::withoutTrashed()->paginate(10)]);

    }

    
    public function create()
    {
    
        return view('users.create', ['role' => Role::all()]);
    }



    public function store(StoreUserRequest $request)
    {
  

        $user = new User();
        $user -> name = $request->name;
        $user -> username = $request->username;
        $user -> email = $request->email;
        $user -> password = Hash::make( $request->password); 
        
        $user -> role = $request->role;
        $user->save();

        $notification = array(
            'message' => ' User added successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('users.index')->with($notification);
    }

    public function show(User $user)
    {
        /* abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('users.show', compact('user'));*/
    }

    public function edit($id)
    {
   


        return view('users.edit', 
       [
          'role' => Role::all(),
          'user'=> User::find($id)
     ]);




        
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::find($id);
        $user-> name = $request->input('name');
        $user-> username = $request->input('username');
        $user-> email = $request->input('email');
        $user-> role = $request->input('role');
        

       $user->save();

       $notification = array(
        'message' => ' User updated successfully',
        'alert-type' => 'success'
    );
    return redirect()->route('users.index')->with($notification);


       // return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        /* abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->delete();

        return redirect()->route('users.index');*/
   
        User::destroy($id);
        $notification = array(
            'message' => ' Account Deleted ',
            'alert-type' => 'error');

        return redirect()->route('users.index')->with($notification);
    }
    




/***
 * Update status of user
 * @param Integer $user_id
 *  @param Integer $status_code
 *  return success
 */

    public function updatestatus($user_id, $status_code)
    {

        $notificationsuccess = array(
            'message' => ' Account status updated',
            'alert-type' => 'warning'
        );

        $notificationfail = array(
            'message' => ' User status update fail',
            'alert-type' => 'error'
        );

        try {

            $update_user = User::whereId($user_id)->update([
                'status' => $status_code
            ]);
           

            if($update_user){
                return redirect()->route('users.index')->with($notificationsuccess);
            }


            return redirect()->route('users.index')->with($notificationfail);

        }catch (Throwable $th) {
            throw $th;
        }

        }

        public function Redirect()
        {

           
            $user= auth()->user()->role == 'admin';
            


            if($user){
                return redirect()->route('users.index');
            }   
                // or return route('routename');
            
        
            return redirect('dashboard');
            // or return route('routename');
                 
            
      
        }
    }


  

