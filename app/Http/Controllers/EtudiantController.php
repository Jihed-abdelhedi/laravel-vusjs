<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function index(){

        // return response()->json('test index');
        return Etudiant::all();

    }
    public function store(Request $request){

        // dd($request->all());
        Etudiant::create($request->all());
        return response()->json('added succesfully');
    }
    public function show($id){
        return Etudiant::find($id);
    }
    public function delete($id){
       Etudiant::find($id)->delete();
       return response()->json('deleted succesfully');
    }
    public function update(Request $request ,$id){

        $etudiant = Etudiant::find($id);
        $etudiant->update($request->all());
        return response()->json('updated succesfully');
    }
}
