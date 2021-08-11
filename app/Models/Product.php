<?php

namespace App\Models;

use App\Models\Typ;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'password',
        'price',
        'old_price',
        'quantite',
        'user_id',
        'size',
        'image',
        'color',
        'unstock',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function type()
    {
        return $this->belongsTo(Typ::class);
    }
}
