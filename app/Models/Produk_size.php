<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk_size extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
