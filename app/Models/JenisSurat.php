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

    public function surat()
    {
        return $this->hasMany(Surat::class);
    }
}
