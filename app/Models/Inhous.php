<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inhous extends Model
{
    use HasFactory;

    public $incrementing = false;

    public function simpleSerch($query){
        $result = Inhous::where('lang', 'LIKE', '%' .$query. '%')
                  ->select('id','company','bosyuu')
                  ->get();
        return $result;
    }
}
