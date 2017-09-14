<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'lokasi_id',
        'start_date',
        'end_date',
        'status',
        'note'
    ];

    // Relationship column lokasi_id dengan table lokasi
    public function getLokasi()
    {
        return $this->belongsTo(Lokasi::class, 'lokasi_id', 'id');
    }
}
