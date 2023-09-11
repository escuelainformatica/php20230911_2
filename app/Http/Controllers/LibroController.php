<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function formularioGet() {
        $libro=new Libro();
        return view("paginaformulario",['titulo'=>'get','libro'=>$libro]);
    }
    public function formularioPost(Request $req) {
        $libro=new Libro($req->all());
        return view("paginaformulario",['titulo'=>'post','libro'=>$libro]);
    }
    public function listar() {
        $libros=[ 
            new Libro(['autor'=>'a1','precio'=>1,'editorial'=>'antartica']),
            new Libro(['autor'=>'a2','precio'=>2,'editorial'=>'antartica']),
            new Libro(['autor'=>'a3','precio'=>3,'editorial'=>'antartica']),
            new Libro(['autor'=>'a4','precio'=>4,'editorial'=>'antartica']),
        ];
        return view("paginatabla",['libros'=>$libros]);

    }
}
