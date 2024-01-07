<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisSurat;

class JenisSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.jenis-surat.index', [
            'jenis_surat' => JenisSurat::filter(request(['search']))->with('surat')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.jenis-surat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'jenis_surat' => 'required|unique:jenis_surat|max:50'
        ]);

        
        JenisSurat::create($validateData);

        return redirect('jenis_surat')->with('success', 'Data jenis surat berhasil ditambahkan');
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
    public function edit(JenisSurat $jenis_surat)
    {
        return view('pages.jenis-surat.edit', [
            'jenis_surat' => JenisSurat::find($jenis_surat->id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JenisSurat $jenis_surat)
    {
        $rules = [
            'jenis_surat' => 'required|max:50',
        ];

        
        if($request->jenis_surat != $jenis_surat->jenis_surat){
            $rules['jenis_surat'] = 'required|unique:jenis_surat|max:50';
        }
        
        $validateData = $request->validate($rules);
        

        JenisSurat::where('id',$jenis_surat->id)->update($validateData);

        return redirect('jenis_surat')->with('success', 'Data jenis surat berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisSurat $jenis_surat)
    {
        JenisSurat::destroy($jenis_surat->id);
        return redirect('jenis_surat')->with('success', 'Jenis surat berhasil dihapus');
    }
}
