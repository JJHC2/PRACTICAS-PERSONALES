<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos=products::all();
        return view('products.index'  ,compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        products::create($request->all());
            return redirect()->route('products.index')->with('agregar','Ok');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = products::find($id);
        // return $product;
          return view('products.show' ,compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = products::find($id);
        // return $product;
          return view('products.edit' ,compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $products = products::findOrFail($id);
        $input=$request->all();
        $products->update($input);
        return redirect()->route('products.index')->with('editar','Ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = products::find($id);

    if ($product) {
        $product->delete();
        return redirect()->route('products.index')->with('eliminar','Ok');
    } else {
        return redirect()->route('products.index');
    }
    }
}
