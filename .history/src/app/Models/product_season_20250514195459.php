<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roduct_season extends Model
{
    use HasFactory;

    protected $fillable = ['product_id','season_id'];
}
