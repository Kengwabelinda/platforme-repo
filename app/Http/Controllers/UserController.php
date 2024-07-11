<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view ('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $input = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'Gender' => 'required|in:male,female',
            'password' => 'required|max:4|confirmed',
            'role_id' => 'required',
            'status' => 'required',
        ]);

        $input = $request->all();
        User::create($input);
        return redirect('user')->with('flash_message', 'User Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('users.show')->with('users', $user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $user = User::find($id);
        return view('users.edit')->with('users', $user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect('user')->with('flash_message', 'user Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect('user')->with('flash_message', 'User deleted!');
    }
}
