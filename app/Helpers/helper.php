<?php 

namespace App\Helpers; 

class helper {

    public static function UpdateReferralCode($data) {

        $session_data=session()->get('referred_by');

        if(!$session_data===$data) {
            session()->put('referred_by', $data);
        }
        
    }

    public static function InitiateReferralTracking($data){

        session()->put('referred_by', $data);
        
    }

}