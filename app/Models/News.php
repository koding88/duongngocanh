<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $fillable = ['image_path', 'title', 'content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
