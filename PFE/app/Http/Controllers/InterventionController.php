<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Affecter;
use App\Models\Intervention;
use App\Models\Support;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class InterventionController extends Controller
{
    public function index()
    {
        $interventions = Intervention::orderBy("id", "asc")->paginate(5);
        $vehicules = Vehicule::all();
        $support = Support::all();
        $agents = Agent::all();


        return view('intervention', compact('interventions', 'vehicules','support', 'agents'));
    }



    public function create(Request $request){
        $request->validate([
            "Date"=>"required",
            "vehicules_id"=>"required",
            "support_id"=>"required"

        ]);

        // Vehicule::create($request->all());

        Intervention::create($request->all());
 //4e how li 6ara medyahaya
        $agent_vehicule = new Affecter;
        $agent_vehicule->agent_id  = $request->agent_id;
        $agent_vehicule->vehicules_id =$request->vehicules_id;
        $agent_vehicule->save();
        return back()->with("succes", "vehicule ajouté avec succés !");

    }

    public function update_intervention_traitement(Request $request){
        $request->validate([
            'Date'=>'required',
            'vehicules_id'=>'required',
            'support_id'=>'required'
        ]);

        $rq =  Intervention::find($request->id);
        $rq->Date = $request->Date;
        $rq->vehicules_id = $request->vehicules_id;
        $rq->support_id = $request->support_id;
        $rq->update();


        return redirect('/interventions')->with('status', 'les infos mis a jour ');
    }








    public function delete(Intervention $intervention){
        $intervention->delete();
        return back()->with("succesDelete", "Vehicule supprimé avec succés !");
    }


    public function delete_intervention($id){

        $intervention = Intervention::find($id);
        $intervention->delete();
        return redirect('/interventions')->with('status', 'les infos mis a jour ');

    }

    public function softDelete($id){

        Intervention::find($id)->delete();

        return back();

    }

    public function forceDelete($id){

        Intervention::find($id)->forceDelete();

        return back();
    }

    public function trashed(){
        $interventions = Intervention::onlyTrashed()->get();
        return view('archivage2', compact('interventions'));
    }

    public function restore($id){

        Intervention::whereId($id)->restore();
        return back();
    }

    public function restoreAll(){

        Intervention::onlyTrashed()->restore();

        return back();
    }




}
