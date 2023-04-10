<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cadastro;
use App\Models\Dado;
use Hash;
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
        return $this->hasMany("App/Models/Formulario");
        $request->validate([
            'nomeProjeto'=> 'required',
            'desktop'=>'required',
            'descricao'=>'required',
         ]);
 
         $dado = new Formulario();
         $dado->nomeProjeto=$request->nomeProjeto;
         $dado->desktop=$request->desktop;
         $dado->descricao=$request->descricao;
         $res= $dado->save();
         if($res){
                return back()->with('succes' );
         }else{
                return back()->with('fail');
         }
         
}
}
