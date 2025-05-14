<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','image','description'];

    public function reviews()
{
    return $this->belongsToMany(product_se::class)->withPivot('review');
}
}
