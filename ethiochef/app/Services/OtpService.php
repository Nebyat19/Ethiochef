<?php
namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class OtpService  
{
    protected $sms;
  
    function __construct()
    {
        $this->sms= new SmsService();      
        
    }
    public function verifyOtp(Request $request)
    {
       

        $validator=Validator::make($request->all(),[
            'phone'=>'required|regex:/^\d{10}$/',
            'otp' => 'required|size:6',
        ]);
        if($validator->fails()){
            return response()->json(
                [
                    "status"=>false,
                    "message"=>"Invalid Otp"
                ]
                            ); 
        }
       
      
        $user=User ::where('phone',$request->phone)->first();
        if(!$user){
            return response()->json(
                [
                    "status"=>false,
                    "message"=>"Invalid Otp"
                ]
                            );
        }
        $hashedOtp = $user->otp;
      
        if (!(Hash::check($request->otp, $hashedOtp))) {
         
          
             return response()->json(
                [
                    "status"=>false,
                    "message"=>"Invalid Otp..."
                ]
                            );
        } else{
            return response()->json(
[
    "status"=>true,
    "message "=> "OTP verified successfully."
]
            );
        }
       
    }


    public function newOtp(Request $request)
    {
      
        
       
       $user=User ::where('phone',$request->phone)->first();
        
       

        $otp = $this->generateRandomOTP();

      
        $this->sms->sendSms($user->phone, $otp);

        $user->otp = bcrypt($otp);
       
     
      $user->save();
    
        return response()->json(['message' => 'New OTP has been sent to your phone number.'], 200);
      
    }

    public function generateRandomOTP()
    {
        $otp = mt_rand(100000, 999999); // Generate a random 6-digit integer
        return $otp;
    }

}
