<?php
namespace App\Http\Controllers;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    public function index()
    {
        $vehicules = Vehicule::orderBy("id", "asc")->paginate(5);
        return view('vehicule', compact('vehicules'));
    }

    public function create(Request $request)
    {
        $request->validate([
            "marque"=>"required",
            "modele"=>"required",
            "statut"=>"required"
        ]);
        Vehicule::create($request->all());

        return back()->with("succes", "vehicule ajouté avec succés !");
    }


    public function update_vehicule_traitement(Request $request){
        $request->validate([
            'marque'=>'required',
            'modele'=>'required',
            'statut'=>'required'
        ]);

        $rq = Vehicule::find($request->id);
        $rq->marque = $request->marque;
        $rq->modele = $request->modele;
        $rq->statut = $request->statut;
        $rq->update();

        return redirect('/vehicules')->with('status', 'les infos mis a jour ');
    }
  


    public function delete(Vehicule $vehicule){
        $vehicule->delete();
        return back()->with("succesDelete", "Vehicule supprimé avec succés !");
    }


    public function delete_vehicule($id){

        $vehicule = Vehicule::find($id);
        $vehicule->delete();
        return redirect('/vehicules')->with('status', 'les infos mis a jour ');

    }

    public function softDelete($id){

        Vehicule::find($id)->delete();

        return back();

    }

    public function forceDelete($id){

        Vehicule::find($id)->forceDelete();

        return back();
    }

    public function trashed(){
        $vehicules = Vehicule::onlyTrashed()->get();
        return view('archivage', compact('vehicules'));
    }

    public function restore($id){

        Vehicule::whereId($id)->restore();
        return back();
    }

    public function restoreAll(){

        Vehicule::onlyTrashed()->restore();

        return back();
    }

}




