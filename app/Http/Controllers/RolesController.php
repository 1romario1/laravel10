<?php

namespace App\Http\Controllers;

use App\Models\roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $consultarU['Roles']=roles::paginate(2);
        return view('roles.index',$consultarU);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $insertarRoles=request()->except('_token');
        roles::insert($insertarRoles);
        return response()->json($insertarRoles);

    }

    /**
     * Display the specified resource.
     */
    public function show(roles $roles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $roles=roles::findOrFail($id);
        return view('roles.edit',compact('roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $ActualizarRoles=request()->except(['_token','_method']);
        roles::where('id','=',$id)->update($ActualizarRoles);
        $roles=roles::findOrFail($id);
        return view('roles.edit',compact('roles'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        roles::destroy($id);
        return redirect('roles');
    }
}
