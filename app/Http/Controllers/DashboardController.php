<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('pages.dashboard', [
            'surat_masuk' => Surat::where('kategori', 'surat_masuk')->count(),
            'surat_keluar' => Surat::where('kategori', 'surat_keluar')->count(),
            'users' => User::where('role_id', '2')->count()
        ]);
    }
}
