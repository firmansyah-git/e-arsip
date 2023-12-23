<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\JenisSurat;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.arsip.index', [
            'surats' => Surat::paginate(10),
            'jenis_surat' => JenisSurat::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.arsip.create', [
            'jenis_surat' => JenisSurat::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nomor_surat' => 'required|unique:surat|max:50',
            'nama_instansi' => 'required|max:200',
            'tanggal' => 'required|max:255',
            'perihal' => 'required|max:100',
            'isi' => 'required',
            'kategori' => 'required',
            'file_surat' => '',
            'jenis_surat_id' => 'required',
        ]);

        Surat::create($validateData);

        return redirect('arsip')->with('success', 'Data surat berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Surat $arsip)
    {
        return view('pages.arsip.detail', [
           'surat' => $arsip
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Surat $arsip)
    {
        return view('pages.arsip.edit', [
            'surat' => Surat::find($arsip->id),
            'jenis_surat' => JenisSurat::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Surat $arsip)
    {
        $rules = [
            'nomor_surat' => 'required|max:50',
            'nama_instansi' => 'required|max:200',
            'tanggal' => 'required|max:255',
            'perihal' => 'required|max:100',
            'isi' => 'required',
            'kategori' => 'required',
            'file_surat' => '',
            'jenis_surat_id' => 'required',
        ];

        
        if($request->nomor_surat != $arsip->nomor_surat){
            $rules['nomor_surat'] = 'required|unique:surat|max:50';
        }

        $validateData = $request->validate($rules);

        Surat::where('id',$arsip->id)->update($validateData);

        return redirect('arsip')->with('success', 'Data surat berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Surat $arsip)
    {
        Surat::destroy($arsip->id);
        return redirect('arsip')->with('success', 'Data surat berhasil dihapus');
    }
}
