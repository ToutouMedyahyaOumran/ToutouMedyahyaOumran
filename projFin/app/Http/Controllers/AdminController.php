<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

     
       //  $rq=Agent::all();
        $re=Admin::all();
       ;
   
   //         $data=DB::select("select*from agents");
   //         $dat=DB::select("select*from departements");
   //    return view("agent")->with("data",$data,"dat",$dat);
   
       }
}
