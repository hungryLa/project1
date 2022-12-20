<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tobacco extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'tobaccos';
    public function type(){
        return $this->belongsTo(Type::class);
    }
}
