<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Requests;
use Illuminate\Support\Facades\Gate;
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

       $user = User::create($request->except(['_token', 'roles']));

       $user->roles()->sync($request->roles);
        
       /* $user = User::create($request->validated());
        $user->roles()->sync($request->input('roles', []));
*/
        return redirect()->route('users.index');
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

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('users.index');
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
