<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\Resquest;
use Illuminate\Http\Request;
use App\Models\Painel\Paciente;
use Validator;
use Auth;


class PaginasController extends Controller
{

    private $paciente;
    public function __construct(Paciente $paciente){

        $this->paciente = $paciente;
    }
   
    public function index(){
        return view ('paginas.pacientes.index');
    }

    public function cadastro(){
        return view ('paginas.pacientes.cadastro');
      //  return view ('paginas.pacientes.create');

    }

    public function cadastrados(Paciente $paciente){
       $pacientes = $paciente->all();
        return view ('paginas.pacientes.cadastrados',compact('pacientes'));
       
    }
    public function edit($id){
        //Recupera o pacinete pelo id
       $paciente = $this->paciente->find($id);
       return view ('paginas.pacientes.cadastro',compact('pacientes'));

    }
    
    public function store(Request $request){
     // dd($request ->all());

     $dataForm = $request->except('_token');
     
     //Valida Dados
     $this->validate($request, $this->paciente->rules);
    // $messagens = [
       //  'nome.required' => 'O Campo e de preenchimento obrigatorio',
        // 'nome_da_mae' => 'O Campo e de preenchimento obrigatorio',
     //];
     //$validate = validator($dataForm,  $this->paciente->rules);
    
       // if( $validate->fails()){
        // return redirect()
//                     ->redirect("cadastrados")
        //             ->withErrors($validate)
            //            ->withInput();
                        
      //  }

     //fax Cadastro
     $insert = $this->paciente->insert($dataForm);
     if ($insert)
     return redirect('cadastrados');
     else 
     return redirect()->back();

   
    }
    public function show($id){

        //
    }
      function login(){
        
        return view ('paginas.pacientes.login');
     }

     function checklogin(Request $request){
        $this->validate($request, [
            'email'     => 'required|email',
            'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email'     => $request->get('email'),
            'password'  => $request->get('password')
        );

        if(Auth::attempt($user_data))
            {
                return redirect('main/suceso');
            }
            else
            {
                return back()->with('error', 'Wrong detail');
            }
         }

         function suceso()
         {
             //echo 'ja';
             return view('paginas.pacientes.suceso');
         }

         function logout()
         {
             Auth::logout();
             return redirect('main');
         }
        
}