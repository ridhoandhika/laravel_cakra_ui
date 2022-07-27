<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matrix_quota extends Model
{
    use HasFactory;

    protected $table = 'matrix_quotas';

    public function quota_params(){
        return $this->belongsTo(Type::class,'type_id');
    }
}
