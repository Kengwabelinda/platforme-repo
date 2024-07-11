<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\role;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role = role::all();
        return view('role.show')->with('role',$role);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role = new role;
        $role->role_name = $request->role_name;
        $role->save();
        return redirect('role')->with('flash_message', 'role Addedd!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $roleToDelete= role::find($id);
        $roleToDelete->delete();

        return redirect('role')->with('flash_message', 'role deleted!');
    }
}
