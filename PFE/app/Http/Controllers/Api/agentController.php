<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class agentController extends Controller

{
     
     public function login(Request $req){
        $rules = [
            'email' => 'required',
            'motPs'=>'required'
        ];
        $req->validate($rules);
        $agents=Agent::where('email',$req->email)->first();
        if($agents && Hash::check($req->motPs, $agents->motPs)){
         $token = $agents->createToken('Personal Access Token')->plainTextToken;
         $response=['agents'=>$agents,'succes'=>true, 'token'=>$token];
            return response()->json($response, 200);

        }
        $response =['message'=>'Incorrect email or password','succes'=>false];
        return response()->json($response,400);
        

     }
    //  $req->validate([
    //     'email' => 'required',
    //     'motPs' => 'required',
    // ]);
    
    // $agents = Agent::where('email', $req->email)->first();
    
    // if ($agents && $req->motPs === $agents->motPs) {
    //     $token = $agents->createToken('Personal Access Token')->plainTextToken;
    //     $response = ['agents' => $agents, 'token' => $token];
    //     return response()->json($response, 200);
    // }
    
    // return response()->json(['message' => 'Adresse e-mail ou mot de passe incorrect'], 401);
    
}
