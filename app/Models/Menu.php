<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable=[
        'image',
        'name',
        'desc',
        'category_id',
        'price',
    ];
    
    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'menu_sizes');
    }   

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'ingredient_menus');
    }

    
}
