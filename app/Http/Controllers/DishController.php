<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function getDishes(){
        $request = request();
        return Dish::where('name','LIKE',"%$request->name%")->get();

    }

    public function getDish(Dish $dish){
        return $dish;

    }

    public function createDish(){
        $request = request();
        $dish= Dish::create($request->all());
        return $dish;

    }

    public function updateDish(Dish $dish){
        $request = request();
        $dish->update($request->all());
        return $dish;

    }

    public function deleteDish(Dish $dish){
        $dish->delete();
        return 200;

    }
}
