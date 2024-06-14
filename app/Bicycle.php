<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bicycle extends Model
{
    protected $table = 'sepeda';

    protected $fillable = [
                             'nama',
                             'merek',
                             'jenis',
                             'harga',
                             'warna',
                             'tahun',
                             'poster'
                          ];
}
