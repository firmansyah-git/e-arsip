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

    public function jenisSurat()
    {
        return $this->belongsTo(JenisSurat::class);
    }
}
