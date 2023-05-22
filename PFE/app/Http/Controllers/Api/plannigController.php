<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use  App\Models\Planning;

use Illuminate\Http\Request;

class plannigController extends Controller
{
    function getPlanningsByagent($id) {
        $plannings = Planning::where('agent_id', '=', $id)->with('agent')->get();
      
        return response()->json([
          'plannings' => $plannings
        ]);
      }

      
      

}
