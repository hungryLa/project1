<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'types';
    public function products(){
        return $this->belongsToMany(Product::class);
    }

    public function tobaccos(){
        return $this->hasMany(Tobacco::class);
    }

}
