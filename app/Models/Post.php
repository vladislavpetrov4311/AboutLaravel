<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = false; // Отклоючаем блокировку на вставку во все столбцы

    public function users() {
        return $this->belongsToMany(User::class , 'user_posts' , 'post_id' , 'user_id');
    }
}
