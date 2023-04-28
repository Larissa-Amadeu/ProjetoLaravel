<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cadastro;
use App\Models\Formulario;
use App\Models\Proposito;
use App\Models\Compartilhamento;
use Hash;
use Illuminate\Support\Facades\Auth;
use Session;

class Controlador extends Controller
{
    public function inicio ()
    {
        return view('inicio');
    }

    public function cadastro ()
    {
      
        return view('cadastro');
    }
    
    public function login ()
    {
        return view('login');
    }
    

    // ------- CADASTRO -----

    public function cadastroUsuario (Request $request){
         $request->validate([
            'name'=> 'required',
            'email'=>'required|email|unique:cadastros',
            'password'=>'required|min:6|max:12',
            'empresa'=>'required'
         ]);
 
         $cadastro = new Cadastro();
         $cadastro->name=$request->name;
         $cadastro->email=$request->email;
         $cadastro->password=Hash::make($request->password);
         $cadastro->empresa=$request->empresa;
         $res= $cadastro->save();
         return redirect('login');
         if($res){
                return back()->with('succes', 'Usuário registrado com sucesso' );
         }else{
                return back()->with('fail','algo deu errado');
         }
        }


        // ------- lOGIN -----
        
         public function loginUsuario(Request $request){
            $request->validate([
                'email'=>'required|email',
                'password'=>'required|min:6|max:12',
             ]);


             $cadastro = Cadastro::where('email', '=', $request->email)->first();
             if($cadastro){
                if(Hash::check($request->password, $cadastro->password)){
                    $request->session()->put('loginId', $cadastro->id);
                    return redirect('inicio');
                }else{
                    return back()->with('fail', 'Senha Incorreta');
                }
             }else{
                return back()->with('fail', 'Email não registrado');
             }
         }
        

         // ------- VIEW FORMULARIO -----

         public function formulario ()
    {
        $data = array();
        if(Session::has('loginId')){
            $data = Cadastro::where('id', '=', Session::get('loginId'))->first();        
        }
        return view('formulario', compact('data'));
    }

    // ------- LOGOUT  -----

      
    public function logout(){
        if(Session::has('loginId')){
           Session::pull('loginId');
           return redirect('inicio');
    }
}

  // ------- SAVE SECTION "DADOS DO PROJETO" -----
    
    public function formularioUsuario (Request $request){
        
         if(Session::has('loginId')){
            $request->validate([
                'nomeProjeto'=> 'required',
                'descricao'=>'required',
                'plataforma' => 'required|integer',
             ]);

            $formulario = new Formulario();
            $formulario->nomeProjeto=$request->nomeProjeto;
            $formulario->descricao=$request->descricao;
            $formulario->plataforma = $request->plataforma;
            $formulario->cadastro_id = Session::get('loginId');
            $formulario->save();
            return redirect('formulario');

         }

     }
     

     // FORMULARIO PROPÓSITO DE USO 
     public function propositoDeUso (Request $request){
              
        if(Session::has('loginId')){

           $request->validate([
               'descricao'=>'required',
            ]);

            $formulario = new Formulario();
            $formulario = Formulario::latest()->pluck('id')->first();
            
           $proposito = new Proposito();
           $proposito->descricao=$request->descricao;
           $proposito->baseLegal=$request->baseLegal;
           $proposito->formulario_id =$formulario;
           $proposito->save();
        }
    }

    // FORMULARIO PROPÓSITO DE USO 
    public function compartilhamento (Request $request){
              
        if(Session::has('loginId')){

           $request->validate([
               'justificativa'=>'required',
            ]);

            $formulario = new Formulario();
            $formulario = Formulario::latest()->pluck('id')->first();
            
           $proposito = new Compartilhamento();
           $proposito->descricao=$request->descricao;
           $proposito->baseLegal=$request->baseLegal;
           $proposito->formulario_id =$formulario;
           $proposito->save();
        }
    }
}
