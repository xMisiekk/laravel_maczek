<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    use HasFactory;
    protected $fillable = ['name','price_gross'];
    public function Dishes(){
        return $this->belongsToMany(Dish::class, DishSet::class);
    }
}
