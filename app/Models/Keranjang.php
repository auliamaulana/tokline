<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Support\Str;

class Keranjang extends Model
{
    use HasFactory;
    protected $guarded = [''];

  public function produk()
{
    return $this->belongsTo(Produk::class);
}
    public function user()
{
    return $this->belongsTo(User::class);
}

}
