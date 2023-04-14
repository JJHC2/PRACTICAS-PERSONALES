<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;

class usuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios=usuarios::all();
        return view('usuarios.index'  ,compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        usuarios::create($input);
        return redirect()->route('usuarios.index')->with('agregar','Ok');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuarios = usuarios::find($id);
        return view('usuarios.show' ,compact('usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuarios = usuarios::all();
    
        $usuarios = usuarios::findOrFail($id); 
        

        return view('usuarios.edit', compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuarios = usuarios::find($id);
        $input=$request->all();
        $usuarios->update($input);
        return redirect()->route('usuarios.index')->with('editar','Ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=usuarios::findOrFail($id);
        $user->delete();
        return redirect()->route('usuarios.index')->with('eliminar','Ok');
    }
}
