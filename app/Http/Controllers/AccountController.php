<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function edit(User $account)
    {
        if (auth()->user()->id !== $account->id) {
            abort(403);
        }

        return view('pages.account', [
            'user' => User::find($account->id),
        ]);
    }

    public function update(Request $request, User $account)
    {

        $rules = [
            'nik' => 'required|max:16',
            'nama' => 'required|max:200',
            'username' => 'required|max:255',
            'password' => '',
        ];

        
        if($request->nik != $account->nik){
            $rules['nik'] = 'required|unique:users|max:16';
        }

        if($request->username != $account->username){
            $rules['username'] = 'required|unique:users|max:15';
        }
        
        $validateData = $request->validate($rules);  
        
        if ($request->filled('password') && bcrypt($request->password) !== $account->password) {
            $validateData['password'] = bcrypt($request->password);
        } else {
            // Jika password kosong atau sama dengan yang sudah ada, gunakan password yang sudah ada
            $validateData['password'] = $account->password;
        }

        User::where('id',$account->id)->update($validateData);

        return redirect('account/' . $account->id)->with('success', 'Data akun berhasil diubah');
    }
}
