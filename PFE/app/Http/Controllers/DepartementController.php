<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Departement;

use Illuminate\Http\Request;

class DepartementController extends Controller
{
    
    public function index(){
        $dp = Departement::orderBy("nom", "asc")->paginate(3);
       
        $rq=Admin::all();
        return view("departement",compact("dp","rq"));
   
       }
       
      public function create(Request $request){
       $request-> validate([
           'id' => 'required|max:255|',
           'nom' => 'required',
        
           'admin_id' => 'required'
       ]);
       
       Departement::create($request->all());  
       return back()->with("success", "La structure est ajoutée avec succés !"); 
      
      
      
       if($request==true){
       return back()->with("correct","agent bien ajouter");
      }else{
       return back()->with("icorrect","agent nest pas ajouter");
      }
   }
   
   public function update(Request $request)
   {
       $request->validate([  
           'nom' => 'required',
           'admin_id' => 'required'
           
       ]);
       $dp= Departement::find($request->id);
       $dp->nom=$request->nom;
       $dp->admin_id=$request->admin_id;
       $dp->update();
   
       return back()->with("success", "Le departement est mis à jour avec succés !");
   }

     public function delete($id){
       $dp=Departement::find($id);
       $dp->delete();
       return redirect('/departement')->with('status','Le departement a bien ete supprimer');
     }

     public function search(Request $request)
     {
         $search_text=$_GET['query'];
         $dp=Departement::where('id','LIKE','%'.$search_text.'%')->paginate(3);
         $rq=Admin::where('id','LIKE','%'.$search_text.'%')->paginate(3);
         return view('departement',compact('dp','rq'));
     }
     
   
   
}
