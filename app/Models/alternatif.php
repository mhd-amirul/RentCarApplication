<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alternatif extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kriteria () {
        return $this->belongsTo(kriteria::class);
    }

    public function scopeFilterAlternatif($query, array $filters)
    {
        # code...
        if (isset($filters['searchA']) ? $filters['searchA'] : false) {
            # code...
            return $query->where('nama', 'LIKE', '%' . $filters['searchA'] . '%')
                        ->orWhere('nilai', 'LIKE', '%' . $filters['searchA'] . '%');
        }
    }

}
