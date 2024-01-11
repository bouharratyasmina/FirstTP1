<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Products=[
            ["libelle"=>"FO","marque"=>"DG","prix"=>"3500","stock"=>"2","image"=>"pictures/product1.jpg"],
            ["libelle"=>"SO","marque"=>"CNL","prix"=>"4500","stock"=>"3","image"=>"pictures/product2.jpg"],
            ["libelle"=>"NO","marque"=>"LSV","prix"=>"2000","stock"=>"3","image"=>"pictures/product3.jpg"],
            ["libelle"=>"TO","marque"=>"DIR","prix"=>"5000","stock"=>"2","image"=>"pictures/product4.jpg"],
           

        ];
        return view("listPrd",["Products"=>$Products]);
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
    public function store(ProductRequest $request)
    {
        $libelle = $request->input('libelle');
        $marque = $request->input('marque');
        $prix=$request->input('prix');
        $stock = $request->input('stock');
        $image=$request->input('image');
    
        return "<h1> Le produit a été ajouté avec succès </h1>";
       
    }

    /**
     * Display the specified resource.
     */
    public function show($libelle)
{
    $Products=[
        ["libelle"=>"FO","marque"=>"DG","prix"=>"3500","stock"=>"2","image"=>"pictures/product1.jpg"],
        ["libelle"=>"SO","marque"=>"CNL","prix"=>"4500","stock"=>"3","image"=>"pictures/product2.jpg"],
        ["libelle"=>"NO","marque"=>"LSV","prix"=>"2000","stock"=>"3","image"=>"pictures/product3.jpg"],
        ["libelle"=>"TO","marque"=>"DIR","prix"=>"5000","stock"=>"2","image"=>"pictures/product4.jpg"],
       

    ];
    $product = $Products[$libelle];

    return view('details', ['product' => $product]);
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        return view("modify1");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
