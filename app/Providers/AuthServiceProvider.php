<?php

namespace App\Providers;
use Illuminate\Support\Facades\Gate;
//use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
//        $this->registerPolicies();
//        Gate::define('view-users', function($user){
//            if($user->admin == "1"){
//                return true;
//            }
//            return false;
//        });
//        Gate::define('view-guest',function($user){
//            if($user->admin == "1" ||$user->admin == "0" ){
//                return true;
//            }
//            return false;
//        });
    }
}
