<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
    use HasFactory;

    public function category()
    {
       return $this->belongsTo(Category::class,'category_id','id');
    }
    public function game()
    {
        return $this->belongsTo(Game::class,'game_id','id');
    }
}
