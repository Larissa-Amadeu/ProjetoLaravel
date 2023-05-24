<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>TR-Design</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">
  
  </head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">TR DESIGN</a></h1>
      <!-- logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          
          <li><a class="nav-link scrollto" href="{{ route ('route_inicio')}}">INÍCIO</a></li>
          <li><a class="nav-link scrollto" href="{{ route ('route_formulario')}}">MEUS PROJETOS</a></li>
          <li><a class="nav-link scrollto active" href="{{ route ('route_formulario')}}">NOVO PROJETO</a></li>
          <li><a class="nav-link scrollto" href="{{ route ('route_inicio')}}">TR-MODEL</a></li>
          <li><td><a class="getstarted scrollto" name="logout" href="logout">SAIR</a></li></td>
          <thead>
            <td>{{$data->name}}</td>
            <br>
            <td>{{$data->email}}</td>
         </thead>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  

  <main id="main">

  
        <!-- ======= Features Section ======= -->
        <section id="features" class="features">

          <div class="container" data-aos="fade-up">
    
            <div class="row">
              <div class="col-lg-6">
              </div>
            </div> <!-- / row -->
    
            <!-- Feature Tabs -->
            <div class="row feture-tabs" data-aos="fade-up">
              
                <h3>NOVO PROJETO</h3>
    
                <!-- Tabs -->
                <ul class="nav nav-pills mb-3">
                  <li>
                    <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Dados do projeto</a>
                  </li>
                  <li>
                    <a class="nav-link" data-bs-toggle="pill" href="#tab2">Propósito de uso</a>
                  </li>
                  <li>
                    <a class="nav-link" data-bs-toggle="pill" href="#tab3">Compartilhamentos</a>
                  </li>
                  <li>
                    <a class="nav-link" data-bs-toggle="pill" href="#tab4">Dados pessoais</a>
                  </li>
                  <li>
                    <a class="nav-link" data-bs-toggle="pill" href="#tab5">Atores</a>
                  </li>
                  <li>
                    <a class="nav-link" data-bs-toggle="pill" href="#tab6">Ação/negociação</a>
                  </li>
                  <li>
                    <a class="nav-link" data-bs-toggle="pill" href="#tab7">Template</a>
                  </li>
                </ul><!-- End Tabs -->
    
                <!-- Tab Content -->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tab1">
                    <form class="row g-3" action="{{route('formulario-usuario')}}" method="post">
                        @csrf
                      
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input type="name" class="form-control" id="floatingName" placeholder="nomeProjeto" name="nomeProjeto">
                            <label for="floatingName">Nome do Projeto</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating mb-3">
                              <select class="form-select" id="floatingSelect" aria-label="State" placeholder="desktop" name="plataforma">
                                  <option value="1" {{ old('plataforma') == '1' ? 'selected' : '' }}>Desktop</option>
                                  <option value="2" {{ old('plataforma') == '2' ? 'selected' : '' }}>Web</option>
                                  <option value="3" {{ old('plataforma') == '3' ? 'selected' : '' }}>Mobile</option>
                                  <option value="4" {{ old('plataforma') == '4' ? 'selected' : '' }}>IoT</option>
                              </select>
                              <label for="floatingSelect">Plataforma</label>
                          </div>
                          @if(old('plataforma'))
                          <p>Opção selecionada: {{ old('plataforma') == '1' ? 'Desktop' : (old('plataforma') == '2' ? 'Web' : (old('plataforma') == '3' ? 'Mobile' : 'IoT')) }}</p>
                          @endif
                      </div>
                
                      <div class="col-12">
                        <div class="form-floating">
                          <textarea class="form-control" placeholder="descricao" name="descricao" id="floatingTextarea" style="height: 100px;"></textarea>
                          <label for="floatingTextarea">Descrição do Projeto</label>
                        </div>
                      </div>
                      
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary" >Salvar</button>
                        <button type="reset" class="btn btn-secondary">Cancelar</button>
                      </div>
                      
                    
                    </form> <!-- End floating Labels Form -->
                  </div><!-- End Tab 1 Content -->
                  
             

                  <!-- Tab 2 Content PROPOSITO DE USO -->
                  <form class="tab-pane fade show" action="{{route('proposito-de-uso')}}" method="post" id="tab2"> 
                    @csrf    
                    
                    <br>
                    <div class="col-12">
                      <div class="form-floating">
                        <textarea type="name" class="form-control" id="floatingName" name="descricao" placeholder="descricao"></textarea>
                        <label for="floatingName">Descrição do propósito de Uso</label>
                      </div>
                    </div>
                    <div class="checkbox1">
                      <div class="form-check1">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                          Este projeto faz decisões baseadas unicamente no computador e sem supervisão <br>humana</br>
                        </label>
                      </div>
                    </div> 
                    <br>
                    <div class="card">
                      <div class="card-body">
                        <br>
                        <h4>Base Legal</h4>
                        <br>
                        <textarea type="name" class="form-control" id="floatingName" name="baseLegal" placeholder="Texto Contendo a Lei que ampara o uso de dados"></textarea>
                        <br>  
                      </div>
                    </div>

                    <div class="card">  
                      <div class="card-body">
                        <br>
                        <h4>Selecionar início de Evento de propósito de uso</h4>
                        <br>

                        <style type="text/css">
                          .d-none {
                            display: none;
                          }
                        </style>

                        <div class="form-floating mb-3">
                          <select id="selecao" class="form-select" aria-label="State" onchange="enableDiv();">
                            <option selected value="0">Ambos</option>
                            <option value="1">Data/Hora</option>
                            <option value="2">Ação</option>
                          </select>
                          <label for="floatingSelect">Tipo</label>
                        </div>
        
                      <div class="row g-3">
                        <div id = "data1" class="col-md-6">
                          <div class="form-floating">
                            <input type="date" class="form-control" id="floatingName" placeholder="Nome do Projeto">
                            <label for="floatingName">Início da execução </label>
                          </div>
                        </div>
                        <div  id ="data2" class="col-md-6">
                          <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="floatingName" placeholder="Nome do Projeto">
                              <label for="floatingTextarea">Término da execução</label>
                          </div>
                        </div> 

                        <div class="col-6">
                          <div id="box1" class="form-floating">
                            <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                            <label for="floatingTextarea">Descreva o evento de início de propósito</label>
                          </div>
                        </div>
                        
                        <div class="col-6">
                          <div id="box2" class="form-floating">
                            <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                            <label for="floatingTextarea">Descreva o evento de término de propósito</label>
                          </div>
                        </div>
                      </div>
                        <script type="text/javascript">
                          function enableDiv(){
                            var selectedValue = document.getElementById("selecao").value;
                            console.log(selectedValue);
                            if(selectedValue == 0){
                              document.getElementById('box1').style.display = "block";
                              document.getElementById('box2').style.display = "block";
                              document.getElementById('data1').style.display = "block";
                              document.getElementById('data2').style.display = "block";
                            }
                            if(selectedValue == 1){
                              document.getElementById('data1').style.display = "block";
                              document.getElementById('data2').style.display = "block";
                              document.getElementById('box1').style.display = "none";
                              document.getElementById('box2').style.display = "none";
                            }
                            if(selectedValue == 2){
                              document.getElementById('box1').style.display = "block";
                              document.getElementById('box2').style.display = "block";
                              document.getElementById('data1').style.display = "none";
                              document.getElementById('data2').style.display = "none";
                            }
                          };
                        </script>
                     
                        </div>
                       </div>
                          <div class="card">
                            <div class="card-body">
                              <br>
                              <h4>Selecionar fim de Evento de propósito de uso</h4>  
                              <br>
                              <div class="form-floating mb-3">
                                <select id="selecao2" class="form-select" aria-label="State" onchange="enableDiv2();">
                                  <option selected value="0">Ambos</option>
                                  <option value="1">Data/Hora</option>
                                  <option value="2">Ação</option>
                                </select>
                                <label for="floatingSelect">Tipo</label>
                              </div>
                          <div class="row g-3">
                              <div id="datafim1" class="col-md-6">
                                <div class="form-floating">
                                  <input type="date" class="form-control" id="floatingName" placeholder="Nome do Projeto">
                                  <label for="floatingName">Início da execução </label>
                                </div>
                              </div>
                              <div id="datafim2" class="col-md-6">
                                <div class="form-floating mb-3">
                                  <input type="date" class="form-control" id="floatingName" placeholder="Nome do Projeto">
                                    <label for="floatingTextarea">Término da execução</label>
                                </div>
                              </div> 
                              <div id="boxfim1" class="col-6">
                                <div class="form-floating">
                                  <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                                  <label for="floatingTextarea">Descreva o evento de início de propósito</label>
                                </div>
                              </div>
                        
                            <div id="boxfim2" class="col-6">
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                                <label for="floatingTextarea">Descreva o evento de término de propósito</label>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>

                    <script type="text/javascript">
                      function enableDiv2(){
                        var selectedValue = document.getElementById("selecao2").value;
                        console.log(selectedValue);
                        if(selectedValue == 0){
                          document.getElementById('boxfim1').style.display = "block";
                          document.getElementById('boxfim2').style.display = "block";
                          document.getElementById('datafim1').style.display = "block";
                          document.getElementById('datafim2').style.display = "block";
                        }
                        if(selectedValue == 1){
                          document.getElementById('datafim1').style.display = "block";
                          document.getElementById('datafim2').style.display = "block";
                          document.getElementById('boxfim1').style.display = "none";
                          document.getElementById('boxfim2').style.display = "none";
                        }
                        if(selectedValue == 2){
                          document.getElementById('boxfim1').style.display = "block";
                          document.getElementById('boxfim2').style.display = "block";
                          document.getElementById('datafim1').style.display = "none";
                          document.getElementById('datafim2').style.display = "none";
                        }
                      };
                    </script>

                  <div class="card">
                    <div class="card-body">
                      <br>
                      <p class="card-text">Selecione imagens ou vídeos que mostram em que momento o usuário autoriza a Coleta, Manipulação, Transferência, Compartilhamento ou Divulgação dos Dados Pessoais.</p>
                      <br>
                      <div class="input-group">
                        <input type="file" class="form-control" name="file" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Adicionar</button>
                      </div>
                    </div>
                  </div>  

               <!--   <div class="text-center">
                          <button type="submit" class="btn btn-primary">Documentação</button>
                        </div>
                   <section id="testimonials" class="testimonials section-bg">
                      <div class="container" data-aos="fade-up">
                        <div class="section-title">
                          <h4>CONTROLADORES</h4>
                        </div>

                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                          <div class="swiper-wrapper">

                            <div class="swiper-slide">
                              <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                
                                
                              </div>
                            </div>

                            <div class="swiper-slide">
                              <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                
                                
                              </div>
                            </div>

                            <div class="swiper-slide">
                              <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                
                                
                              </div>
                            </div>

                            <div class="swiper-slide">
                              <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                
                                
                              </div>
                            </div>

                            <div class="swiper-slide">
                              <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                
                               
                              </div>
                            </div>

                          </div>
                          <div class="swiper-pagination"></div>
                        </div> 

                      </div>

                    </section>
                    <br>-->
                    
          

                    
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Salvar</button>
                      <button type="reset" class="btn btn-secondary">Cancelar</button>
                    </div>
                  </form>
                
                  <!-- End Tab 2 Content -->



                  <!-- Tab 3 Content -->
                  
                 <form class="tab-pane fade show" action="{{route('compartilhamento')}}" id="tab3" method="POST"> 
                    @csrf   
                    <br>

                    <form class="row g-3"> 
                    <div class="col-md-6">
                      <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="State">
                          <option selected>Transferência</option>
                          <option value="1">Compartilamento</option>
                          <option value="2">Divulgação</option>
                        </select>
                        <label for="floatingSelect">Campo de seleção</label>
                      </div>
                    </div>   

                    <div class="col-md-6">
                      <div class="form-floating">
                        <input type="name" class="form-control" name="baseLegal" id="floatingName" placeholder="Nome do Projeto">
                        <label for="floatingName">Base Legal - Inserir texto ou link da lei</label>
                      </div>
                    </div>
                    <br>
                    <div class="col-12">
                      <div class="form-floating">
                      <textarea class="form-control" name="justificativa" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                        <label for="floatingTextarea">Justificativa de Transferência/Compartilhamento/Divulgação</label>
                      </div>
                    </div>
                    
                  
                        <br>
                    <div class="col-12">
                      <div class="form-floating">
                        <textarea class="form-control" placeholder="Address" name="acoes" id="floatingTextarea" style="height: 100px;"></textarea>
                        <label for="floatingTextarea">Indique as ações ou eventos que levam ao processo de Transferência, Compartilamento ou Divulgação</label>
                      </div>
                    </div>
                    <br> 

                        
                       <div class="card">
                          <div class="card-body">
                            <br>
                            <p class="card-text">Selecione imagens ou vídeos que mostram em que momento o usuário autoriza a Coleta, Manipulação, Transferência, Compartilhamento ou Divulgação dos Dados Pessoais.</p>
                            <br>
                            <div class="input-group">
                              <input type="file" class="form-control" name="file" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                              <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Adicionar</button>
                            </div>
                          </div>
                        </div>  

                        <div class="text-center">
                          <button type="submit" class="btn btn-primary">Salvar</button>
                          <button type="reset" class="btn btn-secondary">Cancelar</button>
                        </div>
                  </form>
                
                  <!-- End Tab 3 Content -->
                <!-- Tab 4 Content -->

                <form class="tab-pane fade show" id="tab4" action="{{route('dadosPessoais')}}" method="POST"> 
         @csrf
                    <!-- Bordered Table -->
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">Descrição</th>
                          <th scope="col" colspan="2">Recurso</th>
                          <th scope="col">Visualizar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>exemplo</td>
                          <td colspan="2">exemplo</td>
                          <td class="small-cell"><a class="btn btn-primary" href="" role="button"><i class="bi bi-folder"></i></a></td>
                        </tr>
                        <tr>
                          <td>exemplo</td>
                          <td colspan="2">exemplo</td>
                          <td class="small-cell"><a class="btn btn-primary" href="" role="button"><i class="bi bi-folder"></i></a></td>
                        </tr>
                        <tr>
                          <td>exemplo</td>
                          <td colspan="2">exemplo</td>
                          <td class="small-cell"><a class="btn btn-primary" href="" role="button"><i class="bi bi-folder"></i></a></td>
                        </tr>
                      </tbody>
                    </table>
                    
                    <!-- End Bordered Table -->
                
                 
        
                      <!-- Floating Labels Form -->
                      <br><br>
                      <div class="">
                        <form>
                        <h3> Novo Dado Pessoal</h3>
                              <div class="row g-3">
                                <div class="col-md-6">
                                  <div class="form-floating">
                                    <input type="name" class="form-control" id="floatingName" name="descricao" placeholder="Nome do Projeto">
                                    <label for="floatingName">Descrição do Dado</label>
                                  </div>
                                </div>
                              </div>
<br>

                            <div class="col-md-6">
                              <div class="form-floating mb-3">
                                <input type="name" class="form-control" id="floatingName" name="detalhamento" placeholder="Nome do Projeto">
                                  <label for="floatingTextarea">Detalhamento do Dado Pessoal</label>
                                
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Address" id="floatingTextarea" name="recurso"style="height: 100px;"></textarea>
                                <label for="floatingTextarea">Recursos para Aquisição dos Dados Pessoais</label>
                              </div>
                            </div>
                            <br>
                              <div class="coleta-manipulacao">
                                <div class="col-12">
                                  <div class="form-floating">
                                    <textarea class="form-control" placeholder="Address" id="floatingTextarea" name="acoes" style="height: 100px;"></textarea>
                                    <label for="floatingTextarea">Ações ou eventos que levam à coleta de dados</label>
                                  </div>
                                </div>
                              </div>
                          </div>
                        
                           <!--     <div class="card">
                                  <div class="card-body">
                                    <br>
                                    <p class="card-text">Selecione imagens ou vídeos que mostram em que momento o usuário autoriza a Coleta, Manipulação, Transferência, Compartilhamento ou Divulgação dos Dados Pessoais.</p>
                                    <br>
                                    <div class="input-group">
                                      <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                      <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Adicionar</button>
                                    </div>
                                  </div>
                                </div> -->

                        
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <button type="reset" class="btn btn-secondary">Cancelar</button>
                          </div>  
                    </form>   
                            
                <!-- End Tab 4 Content -->


                <!-- Tab 5 Content -->
    
                <form class="tab-pane fade show" id="tab5" action="{{route('atores')}}" method="POST" > 
                  @csrf
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefone</th>
                        <th scope="col" class="small-cell">Editar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Exemplo de texto</td>
                        <td>Exemplo de texto</td>
                        <td>Exemplo de texto</td>
                        <td class="small-cell"><a class="btn btn-primary" href="" role="button"><i class="bi bi-folder"></i></a></td>
                      </tr>
                      <tr>
                        <td>Exemplo de texto</td>
                        <td>Exemplo de texto</td>
                        <td>Exemplo de texto</td>
                        <td class="small-cell"><a class="btn btn-primary" href="" role="button"><i class="bi bi-folder"></i></a></td>
                      </tr>
                      <tr>
                        <td>Exemplo de texto</td>
                        <td>Exemplo de texto</td>
                        <td>Exemplo de texto</td>
                        <td class="small-cell"><a class="btn btn-primary" href="" role="button"><i class="bi bi-folder"></i></a></td>
                      </tr>
                    </tbody>
                  </table>
                  
                      <!--Cadastro Atores-->

                      <div class="card"> 
                        <br>
                        <div class="">
                          <h3> Cadastro de Atores</h3>
                          <br>
                      </div>
                  
                      <div class="row g-3">
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input type="name" class="form-control" id="floatingName" name="nome" placeholder="Nome do Projeto">
                            <label for="floatingName">Nome</label>
                          </div>
                        </div>

                      <div class="col-md-6">
                          <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="State" name="tipo">
                              <option selected>Controlador</option>
                              <option value="1">Operador</option>
                              <option value="2">Destinatário</option>
                              <option value="3">Agência de Proteção de Dados</option>
                            </select>
                            <label for="floatingSelect">Tipo</label>
                          </div>
                        </div> 

                          <div class="form-group col-md-6">
                            <div class="form-floating mb-3" >
                              <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email"  placeholder="Nome do Projeto">
                            <label for="inputEmail4">Email</label>
                          </div>
                        </div>

                        
                          <div class="form-group col-md-6">
                            <div class="form-floating mb-3" >
                              <input type="name" class="form-control" id="floatingName" name="telefone" placeholder="Email"  placeholder="Nome do Projeto">
                            <label for="inputEmail4">Telefone</label>
                          </div>
                        </div>

                          <div class="col-12">
                            <div class="form-floating">
                              <textarea class="form-control" placeholder="Address" name="agencia" id="floatingTextarea" style="height: 100px;"></textarea>
                              <label for="floatingTextarea">Agência de Proteção de Dados</label>
                            </div>
                          <br>
                        </div>
                      </div>

                          <div class="font-endereco">
                            <br>
                            <h4>Endereço</h4>
                        </div>
                        <br>
                          
                        <div class="row g-3">
                          <div class="col-md-6" >
                          <div class="form-floating mb-3" >
                            <input type="text" class="form-control" name="rua" id="inputAddress" id="floatingName" placeholder="Nome do Projeto">
                            <label for="floatingName">Rua</label>    
                          </div>
                        </div>

                          <div class="form-group col-md-3" >
                          <div class="form-floating mb-3" >
                            <input type="text" class="form-control" name="numero" id="inputZip" placeholder="Nome do Projeto">
                            <label for="inputZip">Número</label>
                          </div>
                        </div>

                          <div class="form-group col-md-3">
                            <div class="form-floating mb-3" >
                              <input type="text" class="form-control" id="inputZip" name="codigoPostal" placeholder="Nome do Projeto">
                            <label for="inputZip">Código postal</label>
                          
                          </div>
                        </div>
                          
                            <div class="form-group col-md-6">
                              <div class="form-floating mb-3" >
                                <input type="text" class="form-control" name="cidade" id="inputCity" placeholder="Nome do Projeto">
                              <label for="inputCity">Cidade</label>
                            </div>
                          </div>

                            <div class="form-group col-md-3">
                              <div class="form-floating mb-3" >
                                <input type="text" class="form-control" name="estado" id="inputZip" placeholder="Nome do Projeto">
                              <label for="inputZip">Estado</label>      
                            </div>
                          </div>

                            <div class="form-group col-md-3">
                              <div class="form-floating mb-3" >
                                <input type="text" class="form-control" name="pais" id="inputZip" placeholder="Nome do Projeto" >  
                              <label for="inputZip">País</label>
                            </div>
                          </div> 
                        </div>
                        <br>
                        <div class="text-center">
                        <button type="submit" class="btn btn-primary" >Salvar</button>
                      </div>
                </div>  
              </form><!-- End Tab 5 Content -->
    
                <form class="tab-pane fade show" id="tab6" action="{{route('agenciamento')}}" method="POST"> <!-- Tab 6 Content -->
                 @csrf
                 <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Descrição</th>
                      <th scope="col">Recurso</th>
                      <th scope="col" class="small-cell">Visualizar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Exemplo de texto</td>
                      <td>Exemplo de texto</td>
                      <td class="small-cell"><a class="btn btn-primary" href="" role="button"><i class="bi bi-folder"></i></a></td>
                    </tr>
                    <tr>
                      <td>Exemplo de texto</td>
                      <td>Exemplo de texto</td>
                      <td class="small-cell"><a class="btn btn-primary" href="" role="button"><i class="bi bi-folder"></i></a></td>
                    </tr>
                    <tr>
                      <td>Exemplo de texto</td>
                      <td>Exemplo de texto</td>
                      <td class="small-cell"><a class="btn btn-primary" href="" role="button"><i class="bi bi-folder"></i></a></td>
                    </tr>
                  </tbody>
                </table>
                
                  <div class="col-md-6" class="row g-3">
                    <div class="form-floating">
                      <input type="name" class="form-control" id="floatingName" name="titulo" placeholder="nomeProjeto" name="nomeProjeto">
                      <label for="floatingName">Título</label>
                    </div>
                  </div>
                  <br>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="descricao" name="descricao" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Descrição</label>
                  </div>
                </div>
                <br>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" >Salvar</button>
                  <button type="reset" class="btn btn-secondary">Cancelar</button>
                </div>
              </form><!-- End Tab 6 Content -->
            

              <div class="tab-pane fade show" id="tab7">
                <section id="team" class="team">
                  <div class="container" data-aos="fade-up">
                    <div class="row gy-4">

                      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                          <img src="assets/img/team/android_template.png" class="img-fluid" alt="">
                          <h4>MOBILE</h4>
                          <span>Template versão mobile</span>
                          <div class="social">
                            <a href="assets/img/team/android_template.png" data-gallery="portfolio-gallery-app" class="glightbox"><i class="bi bi-eye"></i></a>
                            <a href=""><i class="bi bi-download"></i></a>

                          </div>
                        </div>
                      </div>

                      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                          <img src="assets/img/team/web_template.jpg" class="img-fluid" alt="">
                          <h4>WEB</h4>
                          <span>Template versão Web/Desktop</span>
                          <div class="social">
                            <a href="assets/img/team/web_template.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><i class="bi bi-eye"></i></a>
                            <a href=""><i class="bi bi-download"></i></a>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </section>
              </div>
          </div>

          




              <div class="tab-content">
              <div class="col-lg-6">
                <img src="assets/img/features-2.png" class="img-fluid" alt="">
              </div>
          </div>

        </section><!-- End Features Section -->
      </div><!-- End Feature Tabs -->

      

  </main><!-- End #main -->

  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>
