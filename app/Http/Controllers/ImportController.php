<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImportController extends Controller
{
    public function importTables()
    {
        $request = request();
        foreach($request->all() as $table=>$data){

            DB::table($table)->insert($data);

        }
        return 200;
    }
}
