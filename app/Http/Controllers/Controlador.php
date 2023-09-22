<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cadastro;
use App\Models\Formulario;
use App\Models\Proposito;
use App\Models\Compartilhamento;
use App\Models\Dado;
use App\Models\Ator;
use App\Models\Agenciamento;

use Hash;
use Illuminate\Support\Facades\Auth;
use Session;

class Controlador extends Controller
{
    public function inicio ()
    {
        $data = array();
        if(Session::has('loginId')){
            $data = Cadastro::where('id', '=', Session::get('loginId'))->first(); 
        }
        return view('inicio', compact('data'));
    }

    public function index ()
    {
        return view('index');
    }

    
    public function buscadados() {

        $buscarDados = request('buscarDados');
        $buscarProposito = request('buscarProposito');
        $checkboxSelecionados = request('checkbox');
    
        
        $buscarDescricao = request('checkbox1') == 'on';
        $buscarBaseLegal = request('checkbox2') == 'on';
    
        if ($buscarDados && !empty($checkboxSelecionados)) {
            $formularios = Formulario::where(function ($query) use ($buscarDados, $checkboxSelecionados) {
                foreach ($checkboxSelecionados as $campo) {
                    $query->orWhere($campo, 'like', '%' . $buscarDados . '%');
                }
            })->get();
        } else {
            $formularios = Formulario::all();
        }
    
        if ($buscarProposito) {
            $propositos = Proposito::where(function ($query) use ($buscarProposito, $buscarDescricao, $buscarBaseLegal) {
                if ($buscarDescricao) {
                    $query->orWhere('descricao', 'like', '%' . $buscarProposito . '%');
                }
                if ($buscarBaseLegal) {
                    $query->orWhere('baseLegal', 'like', '%' . $buscarProposito . '%');
                }
            })->get();
        } else {
            $propositos = Proposito::all();
        }
    
        return view('buscadados', [
            'formularios' => $formularios,
            'buscarDados' => $buscarDados,
            'propositos' => $propositos,
            'buscarProposito' => $buscarProposito,
            'buscarDescricao' => $buscarDescricao, // Passando o estado das checkboxes para a view
            'buscarBaseLegal' => $buscarBaseLegal
        ]);
    }
    
    
     /* versao anterior
     * public function buscadados() {

        $buscarDados = request('buscarDados');

        if($buscarDados){

            $formularios = Formulario::where([
                ['nomeProjeto', 'like', '%'.$buscarDados.'%']
            ])->get();

        } else {
            $formularios = Formulario::all();
        }

        
        
        return view('buscadados',['formularios' => $formularios, 'buscarDados'=> $buscarDados]);

        public function buscadados() {

        $buscarDados = request('buscarDados');
        $checkboxSelecionados = request('checkbox');

        if ($buscarDados && !empty($checkboxSelecionados)) {
            $formularios = Formulario::where(function ($query) use ($buscarDados, $checkboxSelecionados) {
                foreach ($checkboxSelecionados as $campo) {
                    $query->orWhere($campo, 'like', '%' . $buscarDados . '%');
                }
            })->get();
        } else {
            $formularios = Formulario::all();
        }

         public function buscaProposito() {
        $buscarProposito = request('buscarProposito');
        $checkboxSelecionados = request('checkbox');
    
        $query = Proposito::query();
    
        if ($buscarProposito) {
            $query->where('descricao', 'like', '%' . $buscarProposito . '%');
        }
    
        if (!empty($checkboxSelecionados)) {
            $query->where(function ($query) use ($checkboxSelecionados, $buscarProposito) {
                foreach ($checkboxSelecionados as $campo) {
                    $query->orWhere($campo, 'like', '%' . $buscarProposito . '%');
                }
            });
        }
    
        $propositos = $query->get();
    
        return view('buscadados', [
            'propositos' => $propositos,
            'buscarProposito' => $buscarProposito,
        ]);
    }
    }
     */
   
    public function templates()
    {
        return view('templates');
    }

    public function projetos()
    {
        $data = array();
        if(Session::has('loginId')){
            $data = Cadastro::where('id', '=', Session::get('loginId'))->first();
        }

        return view('meusprojetos', compact('data'));
    }

    public function cadastro ()
    {
      
        return view('cadastro');
    }
    
    public function login ()
    {
        return view('login');
    }

    public function exibirBusca ($id)
    {
        $formulario = Formulario::findOrFail($id);

      
        return view('exibirBusca',['formulario' => $formulario]);
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
               'baseLegal'=>'required',
               'file' => 'required|image'
            ]);

            $formulario = new Formulario();
            $formulario = Formulario::latest()->pluck('id')->first();
            
           $proposito = new Proposito();
           $proposito->descricao=$request->descricao;
           $proposito->baseLegal=$request->baseLegal;
           $proposito->formulario_id =$formulario;
           if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('public/images'); // Salva a imagem em uma pasta dentro de "storage/app/public/images"
            $proposito->file = $path;
        }   
        $proposito->save();
        return redirect('formulario')->with('proposito', $proposito);

        }
    }

    // FORMULARIO COMPARTILHAMENTO  
    public function compartilhamento (Request $request){
              
        if(Session::has('loginId')){

           $request->validate([
               'justificativa'=>'required',
               'baseLegal'=>'required',
               'acoes'=>'required',
               'file'=>'required',

            ]);

            $formulario = new Formulario();
            $formulario = Formulario::latest()->pluck('id')->first();
            
           $compartilhamento = new Compartilhamento();
           $compartilhamento->justificativa=$request->justificativa;
           $compartilhamento->baseLegal=$request->baseLegal;
           $compartilhamento->acoes=$request->acoes;
           $compartilhamento->file=$request->file;
           $compartilhamento->formulario_id =$formulario;
           $compartilhamento->save();
           return redirect('formulario');
        }
    }

     // FORMULARIO DADOS PESSOAIS 
     public function dadosPessoais (Request $request){
              
        if(Session::has('loginId')){

           $request->validate([
            'descricao'=>'required',
            'detalhamento'=>'required',
            'recurso'=>'required',
            'acoes'=>'required',
            ]);

            

            $formulario = new Formulario();
            $formulario = Formulario::latest()->pluck('id')->first();
            
           $dado = new Dado();
           $dado->descricao=$request->descricao;
           $dado->detalhamento=$request->detalhamento;
           $dado->recurso=$request->recurso;
           $dado->acoes=$request->acoes;
           $dado->formulario_id =$formulario;
           $dado->save();
           return redirect('formulario');

          
        }
    }

    // FORMULARIO ATORES 
    public function atores (Request $request){
              
        if(Session::has('loginId')){

           $request->validate([
            'nome'=>'required',
            'email'=>'required',
            'telefone'=>'required',
            'agencia'=>'required',
            'rua'=>'required',
            'numero'=>'required',
            'codigoPostal'=>'required',
            'cidade'=>'required',
            'estado'=>'required',
            'pais'=>'required',
            'tipo'=>'required',
            ]);

            $formulario = new Formulario();
            $formulario = Formulario::latest()->pluck('id')->first();
            
           $atores = new Ator();
           $atores->nome=$request->nome;
           $atores->email=$request->email;
           $atores->telefone=$request->telefone;
           $atores->agencia=$request->agencia;
           $atores->rua=$request->rua;
           $atores->numero=$request->numero;
           $atores->codigoPostal=$request->codigoPostal;
           $atores->cidade=$request->cidade;
           $atores->estado=$request->estado;
           $atores->pais=$request->pais;
           $atores->tipo = $request->tipo;
           $atores->formulario_id =$formulario;
           $atores->save();
           return redirect('formulario');
        }
    }

    public function agenciamento (Request $request){
              
        if(Session::has('loginId')){

           $request->validate([
            'titulo'=>'required',
            'descricao'=>'required',      
            ]);

            $formulario = new Formulario();
            $formulario = Formulario::latest()->pluck('id')->first();
            
           $agenciamentos = new Agenciamento();
           $agenciamentos->titulo=$request->titulo;
           $agenciamentos->descricao=$request->descricao;
           $agenciamentos->formulario_id =$formulario;
           $agenciamentos->save();
           return redirect('formulario');
        }
    }
}
