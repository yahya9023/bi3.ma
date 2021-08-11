<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Typ extends Model
{
    use HasFactory;
     public function product()
    {
        return $this->hasMany(Product::class);
    }
    public function category()
    {
        return $this->hasMany(Category::class);
    }
}
