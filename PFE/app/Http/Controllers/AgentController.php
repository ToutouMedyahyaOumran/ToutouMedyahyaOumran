<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\Departement;
use Illuminate\Support\Facades\Hash;

use Barryvdh\DomPDF\Facade\Pdf; ;


class AgentController extends Controller
{
    public function index(){

     $rq = Agent::orderBy("nom", "asc")->paginate(3);
    //  $rq=Agent::all();
     $re=Departement::all();
     return view("agent",compact("rq","re"));

//         $data=DB::select("select*from agents");
//         $dat=DB::select("select*from departements");
//    return view("agent")->with("data",$data,"dat",$dat);

    }
   public function create(Request $request){
    $request-> validate([
        'id' => 'required|max:255|',
        'nom' => 'required',
        'prenom' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'motPs' => 'required',
        'departement_id' => 'required'
    ]);

    Agent::create([
        "id"=>$request->id,
        "nom" => $request->nom,
        "prenom" => $request->prenom,
        "phone" => $request->phone,
        "email" => $request->email,
        "motPs" => Hash::make($request->motPs),
       
        "departement_id" => $request->departement_id,



    ]);
    
    // Agent::create($request->all());  
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
    return back()->with("incorrect","agent nest pas ajouter");
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
        'phone' => 'required',
        'email' => 'required',
        'motPs' => 'required|',
        
        'departement_id' => 'required',

    ]);
    $rq= Agent::find($request->id);
    $rq->nom=$request->nom;
    $rq->prenom=$request->prenom;
    $rq->phone=$request->phone;
    $rq->email=$request->email;
    $rq->motPs= Hash::make($request->motPs);
    
    $rq->departement_id=$request->departement_id;
    
    $rq->update();




    

  
    return back()->with("success", "La structure est mis à jour avec succés !");
}
  public function delete($id){
    $rq=Agent::find($id);
    $rq->delete();
    return redirect('/agent')->with('status','L\'agent a bien ete supprimer');


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
   
  public function search(Request $request)
    {
        $search_text=$_GET['query'];
        $rq=Agent::where('id','LIKE','%'.$search_text.'%')->paginate(3);
        $re=departement::where('id','LIKE','%'.$search_text.'%')->paginate(3);
        return view('agent',compact('rq','re'));


    }

    public function print_agent(){
        $rq= Agent::all();
        view()->share('data',$rq);
        $pdf= PDF::loadview('datapegawai-pdf',compact('rq'));
        
        return  $pdf->download('rq.pdf');
    }
  

}