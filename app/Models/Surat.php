<?php

namespace App\Models;

use App\Models\JenisSurat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'surat';

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filter): void
    {
        $query->when($filter['search'] ?? false, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('nomor_surat', 'like', '%' . $search . '%')
                    ->orWhere('nama_instansi', 'like', '%' . $search . '%')
                    ->orWhere('perihal', 'like', '%' . $search . '%')
                    ->orWhere('isi', 'like', '%' . $search . '%');
            });
        });
        
        $query->when($filter['kategori'] ?? false, function($query, $kategori){
            return $query->where('kategori', 'like', '%'. $kategori .'%');
        });
        
        $query->when($filter['jenis'] ?? false, function($query, $jenis){
            return $query->whereHas('jenisSurat', function($query) use ($jenis){
                $query->where('jenis_surat', $jenis);
            });
        });

        $query->when($filter['tahun'] ?? false, function($query, $tahun){
            return $query->whereYear('tanggal', $tahun);
        });
    }

    public function jenisSurat()
    {
        return $this->belongsTo(JenisSurat::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
