<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Painel\Paciente;

class PaginasController extends Controller
{
    public function index(){
        return view ('paginas.recepcao.index');
    }

    public function cadastro(){
        return view ('paginas.recepcao.cadastro');
    }

    public function cadastrados(Paciente $paciente){
       $pacientes = $paciente->all();
        return view ('paginas.pacientes.cadastrados',compact('pacientes'));
    }
}
