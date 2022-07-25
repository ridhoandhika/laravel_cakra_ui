<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;
class MahasiswaController extends Controller
{

    public function index(){
        $mahasiswa = Mahasiswa::all();
        
        // dd($mahasiswa);
        return response()->json([
            'status' => 200,
            'mahasiswa' => $mahasiswa
        ]);
    }

    public function create(Request $request){

    }

    public function edit($id){

    }

    public function store($id, Request $request){

    }

    public function destroy($id){
        
    }
}
