<?php

namespace App\Models;

use App\Models\Surat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisSurat extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'jenis_surat';

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filter): void
    {
        $query->when($filter['search'] ?? false, function($query, $search){
            return $query->where('jenis_surat', 'like', '%'. $search .'%');
        });
    }

    public function surat()
    {
        return $this->hasMany(Surat::class);
    }
}
