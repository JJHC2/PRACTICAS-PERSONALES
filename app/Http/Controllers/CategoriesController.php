<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\products;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = categories::Select('categories.id','products.name_p','categories.name_category')
        ->join('products','products.id','=','categories.product_id')->get();
        return view('categories.index'  ,compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = products::all('id','name_p');
        return view('categories.add' ,compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $categories=categories::create($input);
        return redirect()->route('categories.index', compact('categories'))->with('agregar','Ok');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categorie = categories::find($id);
        return view('categories.show')->with('categories',$categorie);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products=products::all('id','name_p');
        $categories = categories::findOrFail($id);    
        return view('categories.edit', compact('categories','products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categories = categories::findOrFail($id);
        $input=$request->all();
        $categories->update($input);
        return redirect()->route('categories.index')->with('editar','Ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categories=categories::findOrFail($id);
        $categories->delete();
        return redirect()->route('categories.index')->with('eliminar','Ok');
    }
}
