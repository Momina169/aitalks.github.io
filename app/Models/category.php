<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ai_posts;

class category extends Model
{
    use HasFactory;

    public function posts_rel(){
        return $this-> hasMany(ai_posts::class );
  
      }
}
