<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\votos;
use phpDocumentor\Reflection\Location;

class CadasVoto extends Controller
{
    function save(Request $req)
    {
        // print_r($req->input());
        $votos = new votos;
        $votos->opcao = $req->opc;
        $votos->nome = $req->nome;
        $votos->email = $req->email;
        $votos->save();

    
}
}
