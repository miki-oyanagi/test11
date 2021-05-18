<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function post(Request $request)
    {
        $param=[
            "data"=>$request->data,
        ];
        DB::table('data')->insert($param);
        return response()->json([
            'data'=>$param
        ],200);
    }
}
