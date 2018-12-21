<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Painel\Paciente;

class LoginContoller extends Controller
{
    
    public function login(){
        
        return view ('login');
                
            }
}
