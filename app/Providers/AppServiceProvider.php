<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
    // public function logout(){
    //     Auth::logout();
    //     return response()->json([
    //         'status' => 'success',
    //         'messege' => 'logout successfully',


    //     ]);
    // }
    // public function refresh(){
    //     return response()->json([
    //         'status'=>'success',
    //         'messege'=>'Page refresh',
    //         'user'=>Auth::user(),
    //         'authorisation'=>([
    //             'token'=>Auth::refresh(),
    //             'type'=>'bearer',
    //         ])


    //         ]);
    // }
}
