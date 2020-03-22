<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    protected $table = 'tbl_siswa';
    protected $fillable = ['nama','alamat','notelp','asal_sekolah'];
}
