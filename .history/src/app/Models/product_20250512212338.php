<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','image','description'];

    public function seasons()
{
    return $this->belongsToMany(product_season::class,,'product_id','season_id');
}
}
