<?php

namespace App\Http\Controllers;
use App\Bicycle;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function searchsepeda(Request $request)
    {
        $cari = $request->input('q');

        $sepeda = Bicycle::where('title', 'LIKE', "%$cari%")->get();

        if($sepeda->isEmpty())
        {
            return response()->json([
                                    'success' => false,
                                    'data' => 'Data Tidak diTemukan'
                                    ], 404)->header('Access-Control-Allow-Origin', 'http://127.0.0.1:5500');
        }
        else
        {
            return response()->json([
                                    'success' => true,
                                    'data' => $sepeda
                                    ], 200)->header('Access-Control-Allow-Origin', 'http://127.0.0.1:5500');
        }
    }
}
