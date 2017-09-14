<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    // Tetapan sekiranya Model perlu cari table dari DB lain
    // protected $connection = 'sqlserver';

    // Tetakan connection Model kepada Table DB
    protected $table = 'lokasi';
}
