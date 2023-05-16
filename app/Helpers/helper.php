<?php 

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;

class helper {

    public static function UpdateReferralCode($data) {


        $session_data=session()->get('referred_by');

        if($session_data!=$data){
            session()->put('referred_by', $data);
        }
        
    }

    public static function InitiateReferralTracking($data){

        session()->put('referred_by', $data);
        
    }

    public static function UserReferral(){
        if(session()->has('referred_by')){
            return session()->get('referred_by');
        } else {
            return 'System';
        }
    }

    public static function UserRole(){
        $role=Auth::user()->role;
        if($role === "admin" || $role === "affiliate"){

            return $role;
        } else {
            return "invalid";
        }
    }

}