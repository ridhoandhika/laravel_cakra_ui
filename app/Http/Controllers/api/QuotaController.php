<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
Use App\Models\Matrix_quota;

class QuotaController extends Controller
{
    public function index(){
        $quota = collect(Matrix_quota::with('quota_params')->get());
    
        return response()->json([
            'status' => 200,
            'data' => $quota
        ]);
    }
}
