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
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{
    public function index()
    {
     
        

        return view('admin.users.index', ['users'=> User::paginate(10)]);


       /* $users = User::with('roles')->get();
        return view('users.index', compact('users'));*/
    }

    public function create()
    {
      

        return view('users.create', ['roles' => Role::all()]);
    }

    public function store(StoreUserRequest $request)
    {

        $user = new User();
        $user -> name = $request->name;
        $user -> email = $request->email;
        $user -> password = Hash::make( $request->password); 
        
        $user -> roles = $request->roles;
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
          'roles' => Role::all(),
          'user'=> User::find($id)
     ]);




        
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::find($id);
        $user-> name = $request->input('name');
        $user-> email = $request->input('email');
        $user-> roles = $request->input('roles');
        

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

        return redirect(route('users.index'));
    }
}
