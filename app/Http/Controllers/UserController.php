<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all users
        $users = Users::all();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'username' => 'required|string|max:50',
            'password' => 'required|string|max:150',
            'status' => 'required|string|max:7',
            'nama_ptgs' => 'required|string|max:30',
        ]);

        // Create a new user
        Users::create($request->all());


        return redirect()->route('users.index')->with('success', 'Data barang berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Find a user by ID
        $user = Users::findOrFail($id);

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Find a user by ID
        $user = Users::findOrFail($id);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'username' => 'sometimes|required|string|max:50',
            'password' => 'sometimes|required|string|max:150',
            'status' => 'sometimes|required|string|max:7',
            'nama_ptgs' => 'sometimes|required|string|max:30',
        ]);

        // Find the user and update
        $user = Users::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the user and delete
        $user = Users::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index');
    }
}
