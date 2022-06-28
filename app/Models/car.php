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
        return $this->belongsTo(alternatif::class, 'Tahun_Produksi_id', 'id');
    }

    public function muatan_penumpang () {
        return $this->belongsTo(alternatif::class, 'Muatan_Penumpang_id', 'id');
    }

    public function kapasitas_mesin () {
        return $this->belongsTo(alternatif::class, 'Kapasitas_Mesin_id', 'id');
    }

    public function kondisi_mesin () {
        return $this->belongsTo(alternatif::class, 'Kondisi_Mesin_id', 'id');
    }

    public function kondisi_fisik () {
        return $this->belongsTo(alternatif::class, 'Kondisi_Fisik_id', 'id');
    }

    public function jenis_bbm () {
        return $this->belongsTo(alternatif::class, 'Jenis_BBM_id', 'id');
    }

    public function harga_sewa () {
        return $this->belongsTo(alternatif::class, 'Harga_Sewa_id', 'id');
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
