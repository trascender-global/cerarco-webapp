<?php


namespace App\Http\Traits;


use Illuminate\Support\Facades\Auth;

trait AuthTrait
{

    public function isAdmin(){
        return (Auth::check())
            ? Auth::user()->role_id == config('constants.roles.super_admin') || Auth::user()->role_id == config('constants.roles.admin')
            : false;
    }
}
