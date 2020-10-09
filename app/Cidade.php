<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cidade extends Model
{
    //
    protected $guarded = [];

    public static function usuariosPorCidade(){
        return $rows = DB::table('cidades')
            ->select('cidades.id','cidades.nome', DB::raw("count(usuarios.id)"))
            ->join('usuarios','usuarios.cidade_id','cidades.id')
            ->groupBy('cidades.id')
            ->get();
    }

    public static function usuariosPorCidadeId($id){
        return $rows = DB::table('cidades')
            ->select('cidades.id','cidades.nome', DB::raw("count(usuarios.id)"))
            ->where('cidades.id',$id)
            ->join('usuarios','usuarios.cidade_id','cidades.id')
            ->groupBy('cidades.id')
            ->get();
    }
}
