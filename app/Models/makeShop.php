<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class makeShop extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFillter($query, array $filters)
    {
        # code...
        if (isset($filters['searchms']) ? $filters['searchms'] : false) {
            # code...
            return $query->where('user_id', 'LIKE', '%' . $filters['searchms'] . '%')
                            ->orWhere('nm_pu', 'LIKE', '%' . $filters['searchms'] . '%')
                            ->orWhere('nm_usaha', 'LIKE', '%' . $filters['searchms'] . '%')
                            ->orWhere('alamat', 'LIKE', '%' . $filters['searchms'] . '%')
                            ->orWhere('nik', 'LIKE', '%' . $filters['searchms'] . '%')
                            ->orWhere('created_at', 'LIKE', '%' . $filters['searchms'] . '%');
        }
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
