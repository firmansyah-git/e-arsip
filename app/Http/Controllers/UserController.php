<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.kelola-user.index', [
            'users' => User::paginate(2)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.kelola-user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nik' => 'required|max:16',
            'nama' => 'required|max:50',
            'username' => 'required|max:15',
            'email' => 'required|max:50',
            'password' => 'required',
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
        $validateData['role_id'] = 2;

        User::create($validateData);

        return redirect('user')->with('success', 'User berhasil ditambah');
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
    public function edit(User $user)
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
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('user')->with('success', 'User berhasil dihapus');
    }

    public function search(Request $request)
    {
        return dd($request);
    }
}

