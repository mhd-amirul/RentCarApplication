<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function scopeFilterShop($query, array $filterShops)
    {
        # code...
        if (isset($filterShops['searchShop']) ? $filterShops['searchShop'] : false) {
            # code...
            return $query->where('user_id', 'LIKE', '%' . $filterShops['searchShop'] . '%')
                        ->orWhere('nm_pu', 'LIKE', '%' . $filterShops['searchShop'] . '%')
                        ->orWhere('nm_usaha', 'LIKE', '%' . $filterShops['searchShop'] . '%')
                        ->orWhere('alamat', 'LIKE', '%' . $filterShops['searchShop'] . '%')
                        ->orWhere('nik', 'LIKE', '%' . $filterShops['searchShop'] . '%')
                        ->orWhere('created_at', 'LIKE', '%' . $filterShops['searchShop'] . '%');
        }
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
