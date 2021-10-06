<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){

        $role=Auth::user()->roles;
        $users = User::all();

        if ($role =='admin')
        {
            return view ('users.create');
        }
        else
        {
            return view ('dashboard');
        }
       

       

    }
}
