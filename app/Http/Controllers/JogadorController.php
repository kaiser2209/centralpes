<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Curso;
use App\Jogador;

class JogadorController extends Controller
{
    public function listar()
    {
        //Vai buscar todos os cursos cadastrados no BD
        //$cursos = DB::select('select * from cursos');

        //Utilizando o model para buscar todos os cursos
        //$cursos = Curso::all();

        //Buscando os cursos ordenando
        //Consutar a parte da documentação que fala do QueryBuilder
        $jogadores = Jogador::orderBy('nome')->get();

        return view('admin.jogadores.listar', compact('jogadores'));
    }

    public function adicionar()
    {
        return view('admin.jogadores.form');
    }
}
