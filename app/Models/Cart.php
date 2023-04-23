<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    //hvjbk\\\
    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'price',
        'subtotal'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function getSubtotalAttribute()
    {
        return $this->price * $this->quantity;
    }
}
