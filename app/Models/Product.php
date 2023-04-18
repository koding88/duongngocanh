<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['name', 'description', 'quantity', 'price','image_path','category_id'];
    // a product belongs to a category
    public function category(){
        return $this->belongsTo(Category::class);
    }
}