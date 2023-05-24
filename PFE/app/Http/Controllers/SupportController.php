<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    
    public function index(){

        $sp = Support::orderBy("nom", "asc")->paginate(3);
       //  $rq=Agent::all();
        $rq=Admin::all();
        return view("support",compact("sp","rq"));
   
   //         $data=DB::select("select*from agents");
   //         $dat=DB::select("select*from departements");
   //    return view("agent")->with("data",$data,"dat",$dat);
   
       }
      public function create(Request $request){
       $request-> validate([
           'id' => 'required|max:255|',
           'nom' => 'required',
           'prenom' => 'required',
           'email' => 'required',
           'motPs' => 'required',
           'role' => 'required',
           'admin_id' => 'required'
       ]);
       
       Support::create($request->all());  
       return back()->with("success", "La structure est ajoutée avec succés !"); 
       // $rq = Agent::create($validateData);
       //     return redirect('/Ajouter agent');
   
   
       
      
      
   //    insert([
   //     'textid' => $request->textid,
   //     'txetname' => $request->txetname,
   //     'textpre' => $request->textpre,
   //     'textphon' => $request->textphon,
   //     'textmail' => $request->textmail,
   //     'textpas' => $request->textpas,
   //     'texteid' => $request->input('texteid', '')
       
   // ]);
      
      
   //    insert(" insert into agents(id,nom,prenom,phone,email,motPs)values(?,?,?,?,?,?) ",[
   //      $request->textid,
   //      $request->txetname,
   //      $request->textpre,
   //      $request->textphon,
   //      $request->textmail,
   //      $request->textpas,
   //     //  $request->texteid
      
   //    ]);
      if($request==true){
       return back()->with("correct","agent bien ajouter");
      }else{
       return back()->with("icorrect","agent nest pas ajouter");
      }
   
   //    }
   
   }
   
   public function update(Request $request)
   {
       // dd($request);
       $request->validate([
           // "id"=>"required",
           
           'nom' => 'required',
           'prenom' => 'required',
           'email' => 'required',
           'motPs' => 'required',
           'role' => 'required',
           'admin_id' => 'required'
   
       ]);
       $sp= Support::find($request->id);
       $sp->nom=$request->nom;
       $sp->prenom=$request->prenom;
       $sp->email=$request->email;
       $sp->motPs=$request->motPs;
       $sp->role=$request->role;
       $sp->admin_id=$request->admin_id;
       $sp->update();
   
   
   
   
       
   
     
       return back()->with("success", "La structure est mis à jour avec succés !");
   }
    public function delete($id){
       $sp=Support::find($id);
       $sp->delete();
       return redirect('/support')->with('status','L\'agent a bien ete supprimer');
   
   
     }


     public function search(Request $request)
     {
         $search_text=$_GET['query'];
         $sp=Support::where('id','LIKE','%'.$search_text.'%')->paginate(3);
         $rq=Admin::where('id','LIKE','%'.$search_text.'%')->paginate(3);
         return view('support',compact('sp','rq'));
 
 
     }
     // public function search(Request $request){
      
     
     //  $rq = Agent::where('nom','like', '%'.$request->q.'%' );
   
     //  return view('agent.search')->with('rq',$rq);
   
   
     // }
   
     // public function search(Request $request){
     //   $output="";
     //   $rq=Agent::where('nom','Lake','%'.$request->search.'%')->orWhere('prenom','Lake','%'.$request->search.'%')->get();
   
     //   foreach($rq as $item){
     //     $output.=
     //     '<tr>
     //     <td>
     //     '.$item->nom.'
     //     </td>
     //     </tr>';
     //   }
     //   return response($output);
     // }
      
    //  public function search(Request $request)
    //    {
    //        $query = $request->input('query');
   
    //        $rq = Agent::where('nom', 'like', "%$query%")
    //                            ->orWhere('prenom', 'like', "%$query%")
    //                            ->get();
   
    //        return view('search', compact('rq', 'query'));
    //    }
     
   
   
}
