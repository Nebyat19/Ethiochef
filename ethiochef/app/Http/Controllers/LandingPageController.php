<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;

class LandingPageController extends Controller
{
   
    public function login(){

       
          return redirect( route('home'));
    }
    public function authUser(Request $request){
        $validator = Validator::make($request->all(), [
            'phone' => ['required', 'regex:/^\d{10}$/'], 
        ]);
    
        if ($validator->fails()) {
            return response()->json(['status' => 'false',
                'message' => $validator->errors()], 200);
        }
        $data=$validator->validate();
        $user=User ::where('phone',$data['phone'])->first();
        if($user&&$user->is_active){
            Auth::login($user);
          
        }else return response()->json(

            ['status'=>'false',
                'message'=>"user not registered"]
            
        );
    }
    
}
