<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StagiaireRequest;
use App\Models\stagiaire;
use Illuminate\Support\Facades\Hash;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagiaire=stagiaire::latest()->get();
        return view("listPrd",compact('stagiaire'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StagiaireRequest $request){
        $forms=$request->validated();
        $forms["password"]=Hash::make($request->password);
        $forms['image'] = $request->file('image')->store('stagiaire','public');
        stagiaire::create($forms);
        
    }


    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $id = (int)$request->id;
        $stagiaire = stagiaire::find($id);
        return view('details', compact('stagiaire'));
       
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id){
        $stagiaire = stagiaire::find($id);
        return view("edit",compact('stagiaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StagiaireRequest $request, $id)
    {
        $stagiaire = stagiaire::find($id);
        $forms=$request->validated();
        $forms["password"]=Hash::make($request->password);
        if($request->hasFile("image")){
            $forms['image'] = $request->file('image')->store('stagiaire','public');
        }
        $stagiaire->fill($forms)->save();
        return redirect()->route('stagiaire.index',$stagiaire["id"]);
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,$id){
        $stagiaire= stagiaire::find($id);
        $stagiaire->delete();
        return redirect()->route('stagiaire.index');

    }
}



