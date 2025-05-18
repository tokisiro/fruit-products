<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Season extends Model
{
    use HasFactory;

    protected $table = 'product_seasons';
    protected $fillable = ['product_id','season_id'];
}
