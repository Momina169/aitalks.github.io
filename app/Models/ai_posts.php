<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\category;

use Illuminate\Database\Eloquent\Model;

class ai_posts extends Model
{
    use HasFactory;

    public function addcategory() {
        return $this->belongsTo(category::class,);

    }
}
