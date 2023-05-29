<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    protected $table = 'data_service';

    protected $fillable = [
        'nama_kategori', 'jml_service', 'catatan_service', 'metode_pembayaran', 'status',
    ];

    protected $hidden = [

    ];
}
