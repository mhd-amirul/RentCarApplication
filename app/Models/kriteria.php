<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriteria extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilterKriteria($query, array $filters)
    {
        # code...
        if (isset($filters['searchK']) ? $filters['searchK'] : false) {
            # code...
            return $query->where('nama', 'LIKE', '%' . $filters['searchK'] . '%')
                        ->orWhere('bobot', 'LIKE', '%' . $filters['searchK'] . '%')
                        ->orWhere('type', 'LIKE', '%' . $filters['searchK'] . '%');
        }
    }
}
