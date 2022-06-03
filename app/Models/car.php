<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user () {
        return $this->belongsTo(user::class);
    }

    public function shop () {
        return $this->belongsTo(shop::class);
    }

    public function merk () {
        return $this->belongsTo(alternatif::class, 'merk_id', 'id');
    }

    public function tahun_produksi () {
        return $this->belongsTo(alternatif::class, 'tp_id', 'id');
    }

    public function muatan_penumpang () {
        return $this->belongsTo(alternatif::class, 'mp_id', 'id');
    }

    public function kapasitas_mesin () {
        return $this->belongsTo(alternatif::class, 'km2_id', 'id');
    }

    public function kondisi_mesin () {
        return $this->belongsTo(alternatif::class, 'km_id', 'id');
    }

    public function kondisi_fisik () {
        return $this->belongsTo(alternatif::class, 'kf_id', 'id');
    }
    
    public function jenis_bbm () {
        return $this->belongsTo(alternatif::class, 'jb_id', 'id');
    }

    public function harga_sewa () {
        return $this->belongsTo(alternatif::class, 'hs_id', 'id');
    }

    public function scopeFilter($query, array $filters)
    {
        # code...
        if (isset($filters['search']) ? $filters['search'] : false) {
            # code...
            return $query->where('kata_kunci', 'LIKE', '%' . $filters['search'] . '%');
        }
    }

}
