<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UsersController;
use Closure;
use Illuminate\Http\Request;

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Illuminate\Support\Facades\Route;

class EnsureUserRoleIsAllowedToAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       // echo 'middleware gate. <br>';


        $userRole= auth()->user()->role;

        $currentRouteName = Route::currentRouteName();
        
//
      //  echo 'User role: '. $userRole .'<br>';
      //  echo 'Route Name: '. $currentRouteName .'<br>';


        if (in_array($currentRouteName, $this->userAccessRole()[$userRole])){
            return $next($request);
        } else {
            abort(403, 'You are not allowed to enter this page.');
        }

    }
        
        /**
         * list of accessible routes for specific user
         *
         * @return void
         */
        private function userAccessRole(){
            return [



                
                'user' => [
                    'dashboard',
                    'tasks.index',
                    'users.store',
                    'createfeedback',
                    'createactivity',
                    'joinactivity',
                    'aboutus',
                    'activity.status.update',
                    'view.createactivity'
                  
                ],
                'admin' => [
                    'users.store',
                    'users.index',
                    'users.create',
                    'users.edit',
                    'users.destroy',              
                    'user.edit',
                    'users.update',
                    'aboutus',
                    'users.status.update'
                  
                    
            
                ],
            ];
        }


}
