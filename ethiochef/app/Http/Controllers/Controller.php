<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\OtpService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    private $sms;
    private $otp;
    function __construct()
    {
       
        $this->otp=new OtpService();
    }


    public function registerUser(Request $request){
     
        $validator = Validator::make($request->all(), [
          'phone' => ['required', 'regex:/^\d{10}$/'], 
        ]);
    
        if ($validator->fails()) {
            return response()->json(['status' => 'false',
                'errors' => $validator->errors()], 200);
        }
        //if user already exists
        $user=User::where('phone',$request->phone)->first();
        if(!$user){
          $data=$validator->validate();
          $data['otp']="";
          $data['is_active']=false;
        $user= User::create($data);
        
        }
     
      
    return  $this->otp->newOtp( $request);
       return response()->json(['status' => 'success',
        'message' => 'User created successfully'], 200);
      }
      public function verifyOtp(Request $request){
      return  $this->otp->verifyOtp($request);
      }
      public function logout(){
        Auth::logout();
        return redirect(route('home'));
      }
}

