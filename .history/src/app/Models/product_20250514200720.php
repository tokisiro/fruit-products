<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','image','description'];

    public function seasons()
{
    return $this->belongsToMany(Season::class,'Product_seasons','product_id','season_id');
}
}
