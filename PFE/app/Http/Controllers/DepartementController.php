<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Departement;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departements = Departement::paginate(3);;
        return view('afficherDepartement' , compact('departements'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createDepartement ');
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
            'nom'=>'required|max:255',
            'admin_id'=>'required|max:255'
         ]);
         $departements = Departement::create($validateData);
         return redirect('/departements')->with('success', 'voiture creer avec success.');
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
        $departements = Departement::findOrFail($id);

        return view('editDepartement', compact('departements'));
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
            'nom'=>'required|max:255',
            'admin_id'=>'required|max:255'
         ]);
         Departement::whereId($id)->update($validateData);
         return redirect('/departements')->with('success', 'Departement mise a our avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departements = Departement::findOrFail($id);
        $departements->delete();

        return redirect('departements')->with('success', 'departement supprimer avec success');
    }

    public function search1()
    {
        $search_text = $_GET['query1'];
        $departements = Departement::where('id', 'LIKE', '%'.$search_text.'%')->paginate(3);
        return view('afficherDepartement', compact('departements'));   
    }
}
