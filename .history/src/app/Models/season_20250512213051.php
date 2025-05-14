<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class season extends Model
{
    use HasFactory;

    protected $fillable =['name'];

    public function product()
{
    return $this->belongsToMany(season::class,);
}
