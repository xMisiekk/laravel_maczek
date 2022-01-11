<?php

namespace App\Http\Controllers;

use App\Models\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SetController extends Controller
{

    public function getSets()
    {
        $request = request();
        return Set::where('name', 'LIKE', "%$request->name%")->with("dishes")->get();
    }

    public function getSet(Set $set)
    {
        return $set;
    }

    public function createSet()
    {
        $request = request();
        DB::beginTransaction();
        $set = Set::create($request->all());
        $set->Dishes()->attach($request->dishes);
        DB::commit();
        return $set->toArray();
    }

    public function updateSet(Set $set)
    {
        $request = request();
        DB::beginTransaction();
        $set->update($request->all());
        $set->Dishes()->sync($request->dishes);
        DB::commit();
        return $set;
    }

    public function deleteSet(Set $set)
    {
        $set->delete();
        return 200;
    }
}
