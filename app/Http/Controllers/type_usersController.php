<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\type_user;
use App\Models\usuarios;

class type_usersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeuser = type_user::Select('type_users.id','type_users.type','usuarios.name')
        ->join('usuarios','usuarios.id','=','type_users.users_id')->get();
        return view('type_user.index'  ,compact('typeuser'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuarios = usuarios::all('id','name');
        return view('type_user.add' ,compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $typeuser=type_user::create($input);
        return redirect()->route('type_user.index', compact('typeuser'))->with('agregar','Ok');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $typeuser = type_user::find($id);
        return view('type_user.show')->with('typeusers',$typeuser);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuarios=usuarios::all('id','name');
    
        $typeuser = type_user::findOrFail($id); 
        

        return view('type_user.edit', compact('typeuser','usuarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $typeuser = type_user::findOrFail($id);
        $input=$request->all();
        $typeuser->update($input);
        return redirect()->route('type_user.index')->with('editar','Ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $typeuser = type_user::find($id);
        $typeuser->delete();
        return redirect()->route('type_user.index')->with('eliminar','Ok');
    }
}
