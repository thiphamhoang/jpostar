<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Auth;
use App\Model\M_type;
use App\Model\M_permission;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate){
        $this->registerPolicies($gate);
        if(! $this->app->runningInConsole()){
           //foreach tat cac quyen
             foreach(M_permission::all() as $permission){
                 //kiem tra xem co quyen hien khong - neu lon hon 0 -> co quyen
                 gate::define($permission->name,function($user) use ($permission){
                    //get quyen user
                     foreach($user->f_user_type->f_permission as $permission_user){
                         $permi_user[$permission_user->name] = $permission_user->name;
                     }
                     if(isset($permi_user[$permission->name])){
                         return $permi_user[$permission->name];
                     }
                 });
              }
        }
     }
}
