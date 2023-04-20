<?php

namespace App\Models;

use App\Models\OrderDetail;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'address',
        'phone',
        'note',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
