<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Matrix_fup;
use App\Models\Type;

class FupController extends Controller
{
    public function index(){
        $fups = collect(Matrix_fup::with('fup_params')->get());

        // $data = array();
        // foreach($fups as $fp){
            // $data = [
            //     'type_id' => $fp['type_id'],
            //     'package_type' => $fp->fup_params['package_type'],
            //     'package_name' => $fp->fup_params['package_name'],
            //     'skip_check' => $fp->fup_params['skip_chek'],
            //     'usage_amount_1' => $fp['usage_amount_1'],
            //     'usage_unit_1' => $fp['usage_unit_1'],
            //     'speed_amount_1 ' => $fp['speed_amount_1'],
            //     'speed_unit_1 ' => $fp['speed_unit_1'],
            //     'usage_amount_2' => $fp['usage_amount_2'],
            //     'usage_unit_2' => $fp['usage_unit_2'],
            //     'speed_amount_2' => $fp['speed_amount_2'],
            //     'speed_unit_2' => $fp['speed_unit_2'],
            //     'usage_amount_3' => $fp['usage_amount_3'],
            //     'usage_unit_3' => $fp['usage_unit_3'],
            //     'speed_amount_3' => $fp['speed_amount_3'],
            //     'speed_unit_3' => $fp['speed_unit_3']

            // ];
        //     $data = [$fp];
        // }

        // var_dump($data);
        // $data = array_merge($data);
        return response()->json([
            'status' => 200,
            'data' => $fups 
        ]);
    }

    public function create(Request $request){
        if(
            // !$request->package_name || 
            $request->package_name == null ||
            // !$request->skip_check || 
            $request->skip_check == null ||
            // !$request->usage_1 || 
            $request->usage_1 == null ||
            // !$request->unit_1 || 
            $request->unit_1 == null ||
            // !$request->speed_1 || 
            $request->speed_1 == null ||
            // !$request->speed_unit_2 || 
            $request->speed_unit_2 == null ||
            // !$request->usage_2 || 
            $request->usage_2 == null ||
            // !$request->unit_2 || 
            $request->unit_2 == null ||
            // !$request->speed_2 || 
            $request->speed_2 == null ||
            // !$request->speed_unit_2 || 
            $request->speed_unit_2 == null ||
            // !$request->usage_3 || 
            $request->usage_3 == null ||
            // !$request->unit_3 || 
            $request->unit_3 == null ||
            // !$request->speed_3 || 
            $request->speed_3 == null ||
            // !$request->speed_unit_3 || 
            $request->speed_unit_3 == null 
        ){
            $status = 400;
            $mesaage = 'please complete fill data';
        }else{
            $package = Type::where('package_name', $request->package_name)->first();

            if(is_null($package)) {

                $type = new Type();
                $type->package_name = $request->package_name;
                $type->package_type = 'fup';
                $type->skip_chek = $request->skip_check;
                $type->save();

                $fup = new Matrix_fup();
                $fup->type_id = $type->id;

                $fup->usage_amount_1 = $request->usage_1;
                $fup->usage_unit_1 = $request->unit_1;
                $fup->speed_amount_1 = $request->speed_1;
                $fup->speed_unit_1 = $request->speed_unit_1;

                $fup->usage_amount_2 = $request->usage_2;
                $fup->usage_unit_2 = $request->unit_2;
                $fup->speed_amount_2 = $request->speed_2;
                $fup->speed_unit_2 = $request->speed_unit_2;

                $fup->usage_amount_3 = $request->usage_3;
                $fup->usage_unit_3 = $request->unit_3;
                $fup->speed_amount_3 = $request->speed_3;
                $fup->speed_unit_3 = $request->speed_unit_3;
                $fup->save();

                $mesaage = 'success';
                $status = 200;
            }else {
                $mesaage = 'failed';
                $status = 404;
            }
        }
        return response()->json([
            'status' => $status,
            'message' => $mesaage
        ]);

    }
}
