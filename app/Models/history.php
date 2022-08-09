<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function car()
    {
        return $this->belongsTo(car::class, 'car_id', 'id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
