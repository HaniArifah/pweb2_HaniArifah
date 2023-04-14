<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratObservasi extends Model
{
    use HasFactory;
    protected $table = 'surat_observasis';
    protected $fillable = ['nama','npm','kelas','prodi','judul','ditujukan', 'tempat'];
}
