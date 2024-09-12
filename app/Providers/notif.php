<?php

namespace App\Providers;

use App\Models\contact;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
class notif extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void { 
        View::composer('*',function($view) { 
            
               $users=User::where("role","Simple User")->get();
                $count=contact::where("read","0")->count(); 
          
             $view->with('count',$count,'user',$users);
            
            } );

            View::composer('*',function($view) { 
            
                $simpleuser=User::where("role","Simple User")->get();
                
           
              $view->with('simpleuser',$simpleuser);
             
             } );
         } 
        }

