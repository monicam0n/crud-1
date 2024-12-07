<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{

        protected $table = 'moduls';
        protected $primarykey = 'id';
    protected $fillable = [
        'judul',
        'deskripsi',
        'isi',
        'soal'
    ];
}
