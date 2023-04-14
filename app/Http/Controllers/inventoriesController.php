<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inventories;
use App\Models\products;
use App\Models\usuarios;

class inventoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories = inventories::Select('inventories.id','inventories.status','products.name_p','usuarios.name','inventories.product_id','inventories.usuario_id')
        ->join('products','products.id','=','inventories.product_id')->join('usuarios','usuarios.id','=','inventories.usuario_id')->get();
        return view('inventories.index' ,compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuarios=usuarios::all('id','name');
        $products=products::all('id','name_p');
        return view('inventories.add', compact('usuarios','products')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        inventories::create($input);
        return redirect('inventories')->with('agregar','Ok');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $inventorie = inventories::find($id);
        return view('inventories.show')->with('inventories',$inventorie);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = products::all('id','name_p');
        $usuarios=usuarios::all('id','name');
        $inventories = inventories::findOrFail($id); 
        

        return view('inventories.edit', compact('inventories','products','usuarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $inventories = inventories::findOrFail($id);
        $input=$request->all();
        $inventories->update($input);
        return redirect()->route('inventories.index')->with('editar','Ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inventories = inventories::find($id);
        $inventories->delete();
        return redirect()->route('inventories.index')->with('eliminar','Ok');
    }
}
