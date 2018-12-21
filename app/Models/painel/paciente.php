<?php

namespace App\Models\painel;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    
   public $rules = [

        'nome' =>'required|min:3|max:100',
        'nome_da_mae' =>'required|min:3|max:100',
        'nome_do_pai' =>'min:3|max:100',
        'nome_da_mae' =>'required|min:3|max:100',
        'sexo' => 'required',
        'peso_nascimento' => 'required',
        'local_do_parto'=>'required',
        'email'=>'required',
        'password' =>'required|min:3|max:100' 

        
        
        
        
];

}