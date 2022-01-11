<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExportController extends Controller
{
    public function exportTables()
    {
        $request = request();
        foreach($request->tables as $table){

            $data[$table] = DB::table($table)->get();

        }
        return $data;
    }
}
