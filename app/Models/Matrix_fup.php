<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;

class Matrix_fup extends Model
{
    use HasFactory;

    protected $table = 'matrix_fups';

    public function fup_params(){
        return $this->belongsTo(Type::class,'type_id');
    }
}
