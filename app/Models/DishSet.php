<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DishSet extends Model
{
    protected $table='dishes_sets';
    protected $fillable = ['dish_id','set_id'];
    use HasFactory;
}
