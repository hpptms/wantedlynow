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
                  ->paginate(10);
        return $result;
    }

    public function overview($query){
        $result = Inhous::where('id','=',$query)
                  ->select('id','url','company','bosyuu','lang','overview')
                  ->get();
        return $result;
    }

    public function sitemap(){
        $result = Inhous::select('id')
                  ->get();
        return $result;
    }

    public function freesearch($word,$type){
        if($type == 'lang'){
            $result = Inhous::where('lang', 'LIKE', '%' .$word. '%')
                  ->orderBy('id', 'desc')
                  ->select('id','company','bosyuu')
                  ->paginate(10);
        }else{
            $result = Inhous::where('overview', 'LIKE', '%' .$word. '%')
                  ->orderBy('id', 'desc')
                  ->select('id','company','bosyuu')
                  ->paginate(10);
        }

        return $result;
    }
}
