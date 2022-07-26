<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Matrix_fup;

class Type extends Model
{
    use HasFactory;

    protected $table = 'types'; 

    public function fups_params(){
        return $this->hasOne(Matrix_fup::class);
    }
}
