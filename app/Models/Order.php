<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $guarded = ['id'];
    /**
     * Получить пользователя, который сделал заказ
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Получить продукты, которые добавлены в заказ
     */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
