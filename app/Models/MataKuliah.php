<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class MataKuliah extends Model
{
     protected $fillable = [
        'kode_matakuliah',
        'nama_matakuliah',
        'sks',
    ];
}
