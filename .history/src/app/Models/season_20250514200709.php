<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    protected $fillable =['name'];

    public function products()
{
    return $this->belongsToMany(Products::class,'roduct_seasons','product_id','season_id');
}
}