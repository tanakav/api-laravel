<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Estado extends Model
{
    //
    protected $guarded = [];

    public static function usuariosPorEstado(){
        return $rows = DB::table('estados')
            ->select('estados.id','estados.abreviacao', DB::raw("count(usuarios.id) as usuarios"))
            ->join('usuarios','usuarios.estado_id','estados.id')
            ->groupBy('estados.id')
            ->get();
    }

    public static function usuariosPorEstadoId($id){
        return $rows = DB::table('estados')
            ->select('estados.id','estados.abreviacao', DB::raw("count(usuarios.id) as usuarios"))
            ->where('estados.id',$id)
            ->join('usuarios','usuarios.estado_id','estados.id')
            ->groupBy('estados.id')
            ->get();
    }
}
