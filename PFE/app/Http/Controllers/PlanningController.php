<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Planning;

class PlanningController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    ////     $plannings = Planning::all();
    //    // dd($plannings);
    //     return view('afficherPlanning' , compact('plannings'));
    // }
    public function index()
    {
        $plannings = Planning::paginate(3);
        return view('afficherPlanning', compact('plannings'));
    }



    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createPlanning ');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'heure'=>'required|max:255',
            'jour'=>'required|max:255',
            'admin_id'=>'required|max:255',
            'agent_id'=>'required|max:255'
         ]);
         $plannings = Planning::create($validateData);
         return redirect('/plannings')->with('success', 'voiture creer avec success.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plannings = Planning::findOrFail($id);

        return view('editPlanning', compact('plannings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'heure'=>'required|max:255',
            'jour'=>'required|max:255',
            'admin_id'=>'required|max:255',
            'agent_id'=>'required|max:255'
         ]);
         Planning::whereId($id)->update($validateData);
         return redirect('/plannings')->with('success', 'planning mise a our avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plannings = Planning::findOrFail($id);
        $plannings->delete();

        return redirect('plannings')->with('success', 'planning supprimer avec success');
    }

    // public function search()
    // {
    //      $search_text = $_GET['query'];
    //     $plannings = Planning::where('id', 'LIKE', '%'.$search_text.'%')->get();
    //      return view('afficherPlanning', compact('plannings'));   
    // }

    public function search2()
    {
        $search_text = $_GET['query2'];
        $plannings = Planning::where('id', 'LIKE', '%'.$search_text.'%')->paginate(3);
        return view('afficherPlanning', compact('plannings'));   
    }

    
    





    

}
