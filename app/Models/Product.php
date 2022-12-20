<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $guarded = ['id'];

    public function orders(){
        return $this->belongsToMany(Order::class);
    }

    public function type(){
        return $this->hasOne(Type::class);
    }
}
