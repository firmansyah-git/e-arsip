<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\JenisSurat;
use Illuminate\Http\Request;

class ArsipPribadiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.arsip-pribadi.index', [
            'surats' => Surat::filter(request(['search', 'kategori', 'jenis', 'tahun']))->where('akses_surat_pribadi', 1)->with('jenisSurat')->paginate(10),
            'jenis_surat' => JenisSurat::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.arsip-pribadi.create', [
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
            'perihal' => 'required',
            'informasi_singkat' => 'required',
            'file_surat' => 'required|mimes:doc,docx,pdf,xls,xlsx|file|max:5120',
            'jenis_surat_id' => 'required',
            'user_id' => 'required',
        ]);

        $validateData['kategori'] = 'surat_pribadi' ;
        $validateData['akses_surat_pribadi'] = 1 ;

        if($request->file('file_surat')){
            $file = $request->file('file_surat');
            $fileName = time() . ' ' . $file->getClientOriginalName();
            $file->move('file_arsip', $fileName);

            $validateData['file_surat'] = $fileName;
        }

        
        Surat::create($validateData);

        return redirect('arsip_pribadi')->with('success', 'Data surat berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Surat $arsip_pribadi)
    {
        return view('pages.arsip-pribadi.detail', [
            'surat' => $arsip_pribadi
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Surat $arsip_pribadi)
    {
        return view('pages.arsip-pribadi.edit', [
            'surat' => Surat::find($arsip_pribadi->id),
            'jenis_surat' => JenisSurat::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Surat $arsip_pribadi)
    {
        $rules = [
            'nomor_surat' => 'required|max:50',
            'nama_instansi' => 'required|max:200',
            'tanggal' => 'required|max:255',
            'perihal' => 'required',
            'informasi_singkat' => 'required',
            'file_surat' => 'mimes:doc,docx,pdf,xls,xlsx|file|max:5120',
            'jenis_surat_id' => 'required',
            'user_id' => 'required',
        ];

        
        if($request->nomor_surat != $arsip_pribadi->nomor_surat){
            $rules['nomor_surat'] = 'required|unique:surat|max:50';
        }
        
        $validateData = $request->validate($rules);

        if($request->file('file_surat')){
            if ($request->has('oldFile') && !empty($request->oldFile)) {
                $fileToDelete = public_path('file_arsip/' . $request->oldFile);
                if (file_exists($fileToDelete)) {
                    unlink($fileToDelete);
                }
            }
            $file = $request->file('file_surat');
            $fileName = time() . ' ' . $file->getClientOriginalName();
            $file->move('file_arsip', $fileName);
            
            $validateData['file_surat'] = $fileName;
        }

        

        Surat::where('id',$arsip_pribadi->id)->update($validateData);

        return redirect('arsip_pribadi')->with('success', 'Data surat berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Surat $arsip_pribadi)
    {
        $fileToDelete = public_path('file_arsip/' . $arsip_pribadi->file_surat);
            if (file_exists($fileToDelete)) {
                unlink($fileToDelete);
            }
        Surat::destroy($arsip_pribadi->id);
        return redirect('arsip_pribadi')->with('success', 'Data surat berhasil dihapus');
    }

    public function download($file)
    {
        return response()->download(public_path('file_arsip/'. $file));
    }
}
