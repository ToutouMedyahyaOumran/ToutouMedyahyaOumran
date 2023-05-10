<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Agent;
use Illuminate\Http\Request;
use App\Models\Planning;

class PlanningController extends Controller
{
    public function index(){

        $pl = Planning::orderBy("id", "asc")->paginate(3);
        $rq= Admin::all();
        $ag= Agent::all();
        return view("planning",compact("pl","rq","ag"));
   
   
       }
      public function create(Request $request){
       $request-> validate([
           
           'heurs' => 'required',
           'jours' => 'required',
           'admin_id' => 'required',
           'agent_id' => 'required'
       ]);
       
       Planning::create($request->all());  
       return back()->with("success", "Le planning est ajoutée avec succés !"); 
       
      if($request==true){
       return back()->with("correct","agent bien ajouter");
      }else{
       return back()->with("icorrect","agent nest pas ajouter");
      }
   
   }
   
   public function update(Request $request)
   {
        $request->validate([
            'heure' => 'required',
           'jour' => 'required',
           'admin_id' => 'required',
           'agent_id' => 'required'
      
       ]);
       $pl= Planning::find($request->id);
       $pl->heure=$request->heure;
       $pl->jour=$request->jour;
       $pl->admin_id=$request->admin_id;
       $pl->agent_id=$request->agent_id;
       
       $pl->update();
   
       return back()->with("success", "La structure est mis à jour avec succés !");
   }

     public function delete($id){
        $pl = Planning::find($id);
        $pl->delete();
       return redirect('/planning')->with('status','L\'agent a bien ete supprimer');
     }


     public function search(Request $request)
     {
         $search_text=$_GET['query'];
         $pl=Planning::where('id','LIKE','%'.$search_text.'%')->paginate(3);
         $rq=Admin::where('id','LIKE','%'.$search_text.'%')->paginate(3);
         $ag=Agent::where('id','LIKE','%'.$search_text.'%')->paginate(3);
         return view('planning',compact('pl','rq','ag'));
 
     }

}