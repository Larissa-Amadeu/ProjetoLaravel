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
          
          <li><a class="nav-link scrollto" href="#">INÍCIO</a></li>
          <li><a class="nav-link scrollto" href="#contact">MEUS PROJETOS</a></li>
          <li><a class="nav-link scrollto active" href="{{ route ('route_form')}}">NOVO PROJETO</a></li>
          <li><a class="nav-link scrollto" href="#contact">TR-MODEL</a></li>
          <li><a class="getstarted scrollto" href="#">SAIR</a></li>
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
                </ul><!-- End Tabs -->
    
                <!-- Tab Content -->
                <div class="tab-content">
    
                  <div class="tab-pane fade show active" id="tab1">
                    <!-- Floating Labels Form -->
                    <form class="row g-3">
                      <div class="col-md-6">
                        <div class="form-floating">
                          <input type="name" class="form-control" id="floatingName" placeholder="Nome do Projeto">
                          <label for="floatingName">Nome do Projeto</label>
                        </div>
                      </div>
                
                      <div class="col-md-6">
                        <div class="form-floating mb-3">
                          <select class="form-select" id="floatingSelect" aria-label="State">
                            <option selected>Desktop</option>
                            <option value="1">Web</option>
                            <option value="2">Mobile</option>
                            <option value="3">IoT</option>
                          </select>
                          <label for="floatingSelect">Plataforma</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-floating">
                          <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                          <label for="floatingTextarea">Descrição do Projeto</label>
                        </div>
                      </div>
                
                
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="reset" class="btn btn-secondary">Cancelar</button>
                      </div>
                    </form><!-- End floating Labels Form -->
                  </div><!-- End Tab 1 Content -->
    
                  <div class="tab-pane fade show" id="tab2"> <!-- Tab 2 Content PROPOSITO DE USO -->
                    <!-- Bordered Table -->
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">Descrição</th>
                          <th scope="col">Base Legal</th>
                          <th scope="col">Visualizar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                    
                          <td>Exemplo de texto</td>
                          <td>Exemplo de texto</td>
                          <td><a class="btn btn-primary" href="" role="button"><i class="bi bi-folder"></i></a></td>
                    
                        </tr>
                        <tr>
                    
                          <td>Exemplo de texto</td>
                          <td>Exemplo de texto</td>
                          <td><a class="btn btn-primary" href="" role="button"><i class="bi bi-folder"></i></a></td>
                    
                        </tr>
                        <tr>
                    
                          <td>Exemplo de texto</td>
                          <td>Exemplo de texto</td>
                          <td><a class="btn btn-primary" href="" role="button"><i class="bi bi-folder"></i></a></td>  
                        </tr>
                      </tbody>
                    </table>
                    
                    <br>
                    <div class="col-12">
                      <div class="form-floating">
                        <textarea type="name" class="form-control" id="floatingName" placeholder="Nome do Projeto"></textarea>
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
                        <p class="card-text">Texto Contendo a Lei que ampara o uso de dados</p>
                        <br><br><br>
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary">Documentação</button>
                        </div>
                      </div>
                    </div>
                   
                    <div class="card">  <!-- inicio -->
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
        
                        <form class="row g-3">
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

                      </form>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <br>
                        <h4>Selecionar fim de Evento de propósito de uso</h4> <!-- fim -->
                        <br>
                        <div class="form-floating mb-3">
                          <select id="selecao2" class="form-select" aria-label="State" onchange="enableDiv2();">
                            <option selected value="0">Ambos</option>
                            <option value="1">Data/Hora</option>
                            <option value="2">Ação</option>
                          </select>
                          <label for="floatingSelect">Tipo</label>
                        </div>
                        <form class="row g-3">
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
                      </form>
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
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                              <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                
                                
                              </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                              <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                
                                
                              </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                              <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                
                                
                              </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                              <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                
                               
                              </div>
                            </div><!-- End testimonial item -->

                          </div>
                          <div class="swiper-pagination"></div>
                        </div>

                      </div>

                    </section>
                    <br>
                    
                    <!-- End Testimonials Section -->

                    <!-- End Bordered Table -->
                    <div class="text-center">
                      <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#meuModalDois">Novo Controlador</button>
                    </div>

                    <div class="modal" id="meuModalDois" tabindex="-1" role="dialog">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h3 class="modal-title">Cadastrar Controlador</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="col-md-6">
                              <div class="form-floating">
                                <input type="name" class="form-control" id="floatingName" placeholder="Nome do Projeto">
                                <label for="floatingName">Nome</label>
                              </div>
                            </div>
    
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Salvar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Salvar</button>
                      <button type="reset" class="btn btn-secondary">Cancelar</button>
                    </div>
                  </div>
                  <!-- End Tab 2 Content -->



                  <!-- Tab 3 Content -->
    
                 <div class="tab-pane fade show" id="tab3"> 
                    
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Descrição</th>
                        <th scope="col">Base Legal</th>
                        <th scope="col">Visualizar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                  
                        <td>Exemplo de texto</td>
                        <td>Exemplo de texto</td>
                        <td><a class="btn btn-primary" href="" role="button"><i class="bi bi-folder"></i></a></td>
                  
                      </tr>
                      <tr>
                  
                        <td>Exemplo de texto</td>
                        <td>Exemplo de texto</td>
                        <td><a class="btn btn-primary" href="" role="button"><i class="bi bi-folder"></i></a></td>
                  
                      </tr>
                      <tr>
                  
                        <td>Exemplo de texto</td>
                        <td>Exemplo de texto</td>
                        <td><a class="btn btn-primary" href="" role="button"><i class="bi bi-folder"></i></a></td>
                  
                      </tr>        
                    </tbody> 
                  </table>
                  
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
                        <input type="name" class="form-control" id="floatingName" placeholder="Nome do Projeto">
                        <label for="floatingName">Base Legal - Inserir texto ou link da lei</label>
                      </div>
                    </div>
                    
                    <div class="col-12">
                      <div class="form-floating">
                        <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                        <label for="floatingTextarea">Justificativa de Transferência/Compartilhamento/Divulgação</label>
                      </div>
                    </div>
                  
                    
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Indique as ações ou eventos que levam ao processo de Transferência, Compartilamento ou Divulgação</label>
                  </div>
                </div>
                    </form>
                    <br>
                    
                    <!-- ======= Testimonials Section ======= -->
                    <section id="testimonials" class="testimonials section-bg">
                      <div class="container" data-aos="fade-up">

                        <div class="section-title">
                          <h4>DESTINATÁRIOS</h4>
                        </div>

                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                          <div class="swiper-wrapper">

                            <div class="swiper-slide">
                              <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                
                                
                              </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                              <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                
                                
                              </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                              <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                
                                
                              </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                              <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                
                                
                              </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                              <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                
                               
                              </div>
                            </div><!-- End testimonial item -->

                          </div>
                          <div class="swiper-pagination"></div>
                        </div>

                      </div>
                    </section><!-- End Testimonials Section -->
                    
                    <br>
                    <div class="card">
                      <div class="card-body">
                        <br>
                        <p class="card-text">Selecione imagens ou vídeos que mostram em que momento o usuário autoriza a Coleta, Manipulação, Transferência, Compartilhamento ou Divulgação dos Dados Pessoais.</p>
                        <br>
                        <div class="input-group">
                          <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                          <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Adicionar</button>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Botão que irá abrir o modal -->
                    <div class="text-center">
                      <button type="button" class="btn btn-outline-primary"  data-toggle="modal" data-target="#meuModal">Novo Destinatário</button>
                    </div>
   
                  <!-- Modal -->
                  <div class="modal" id="meuModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Cadastrar Destinatário</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">

                          <div class="col-md-6">
                            <div class="form-floating">
                              <input type="name" class="form-control" id="floatingName" placeholder="Nome do Projeto">
                              <label for="floatingName">Nome</label>
                            </div>
                          </div>              
                        </div>

                        <div class="form-group col-md-6">
                          <div class="form-floating" >
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email"  placeholder="Nome do Projeto">
                          <label for="inputEmail4">Email</label>
                        </div>
                      </div>


                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary">Salvar</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                      </div>
                    </div>
                  </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Salvar</button>
                      <button type="reset" class="btn btn-secondary">Cancelar</button>
                    </div>
                  </div>
                  <!-- End Tab 3 Content -->


                <!-- Tab 4 Content -->

                <div class="tab-pane fade show" id="tab4"> 
        
                    <!-- Bordered Table -->
                    
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">Descrição</th>
                          <th scope="col">Recurso</th>
                          <th scope="col">Visualizar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                    
                          <td>Exemplo de texto</td>
                          <td>Exemplo de texto</td>
                          <td><a class="btn btn-primary" href="" role="button"><i class="bi bi-folder"></i></a></td>
                    
                        </tr>
                        <tr>
                    
                          <td>Exemplo de texto</td>
                          <td>Exemplo de texto</td>
                          <td><a class="btn btn-primary" href="" role="button"><i class="bi bi-folder"></i></a></td>
                    
                        </tr>
                        <tr>
                    
                          <td>Exemplo de texto</td>
                          <td>Exemplo de texto</td>
                          <td><a class="btn btn-primary" href="" role="button"><i class="bi bi-folder"></i></a></td>
                    
                        </tr>
                
                      </tbody>
                
                    </table>
                    <!-- End Bordered Table -->
                
                 <div class="tab-content">
    
                  <div class="tab-pane fade show active" id="tab4">
                    <!-- Floating Labels Form -->
                    <br><br>
                    <div class="">
                      <h3> Novo Dado Pessoal</h3>
                   </div>

                    <form class="row g-3">
                      <div class="col-md-6">
                        <div class="form-floating">
                          <input type="name" class="form-control" id="floatingName" placeholder="Nome do Projeto">
                          <label for="floatingName">Descrição do Dado</label>
                        </div>
                      </div>


                      <div class="col-md-6">
                        <div class="form-floating mb-3">
                          <input type="name" class="form-control" id="floatingName" placeholder="Nome do Projeto">
                            <label for="floatingTextarea">Detalhamento do Dado Pessoal</label>
                          
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-floating">
                          <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                          <label for="floatingTextarea">Recursos para Aquisição dos Dados Pessoais</label>
                        </div>
                      </div>
                    
                      <div class="coleta-manipulacao">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                      <label for="floatingTextarea">Ações ou eventos que levam à coleta de dados</label>
                    </div>
                  </div>
                </div>
                     

                      <!-- Carousel -->
                      
                      <div class="container">
                      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner" style="height: 28em ;" >
                          <div class="carousel-item active" data-bs-interval="10000" style="background-image: url(img/opc.jpeg); background-size: cover; background-repeat: no-repeat;">
                           <!-- <img src="opc.jpeg" class="d-block w-100" alt="...">-->
                            <div class="carousel-caption d-none d-md-block">
                              <h5>First slide label</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item" data-bs-interval="2000">
                            <!-- <img src="opc.jpeg" class="d-block w-100" alt="..."> -->
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Second slide label</h5>
                              <p>Some representative placeholder content for the second slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                         <!--  <img src="opc.jpeg" class="d-block w-100" alt="...">--> 
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Third slide label</h5>
                              <p>Some representative placeholder content for the third slide.</p>
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-body">
                        <br>
                        <p class="card-text">Selecione imagens ou vídeos que mostram em que momento o usuário autoriza a Coleta, Manipulação, Transferência, Compartilhamento ou Divulgação dos Dados Pessoais.</p>
                        <br>
                        <div class="input-group">
                          <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                          <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Adicionar</button>
                        </div>
                      </div>
                    </div>
                    
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="reset" class="btn btn-secondary">Cancelar</button>
                      </div>
                    </form>
                  </div>
                <div class="tab-pane fade show" id="tab4">
                  
                </div><!-- End Tab 4 Content -->

                <!-- Tab 5 Content -->
    
                <div class="tab-pane fade show" id="tab5"> 
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">Nome</th>
                          <th scope="col">E-mail</th>
                          <th scope="col">Telefone</th>
                          <th scope="col">Editar</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>

                          <td>Exemplo de texto</td>
                          <td>Exemplo de texto</td>
                          <td>Exemplo de texto</td>
                          <td><a class="btn btn-primary" href="" role="button"><i class="bi bi-folder"></i></a></td>
                    
                        </tr>
                        <tr>

                          <td>Exemplo de texto</td>
                          <td>Exemplo de texto</td>
                          <td>Exemplo de texto</td>
                          <td><a class="btn btn-primary" href="" role="button"><i class="bi bi-folder"></i></a></td>
                    
                        </tr>
                        <tr>

                          <td>Exemplo de texto</td>
                          <td>Exemplo de texto</td>
                          <td>Exemplo de texto</td>
                          <td><a class="btn btn-primary" href="" role="button"><i class="bi bi-folder"></i></a></td>  
                        </tr>
                      </tbody>
                    </table>  
                    
                    <!--Cadastro Atores-->

                    <div class="card">
                      <div class="card-body">
                    <br>
                    <div class="">
                      <h3> Cadastro de Atores</h3>
                      <br>
                   </div>
                
                   <form class="row g-3">
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input type="name" class="form-control" id="floatingName" placeholder="Nome do Projeto">
                        <label for="floatingName">Nome</label>
                      </div>
                    </div>

                   <div class="col-md-6">
                    <div class="form-floating mb-3">
                      <select class="form-select" id="floatingSelect" aria-label="State">
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
                      <input type="email" class="form-control" id="inputEmail4" placeholder="Email"  placeholder="Nome do Projeto">
                    <label for="inputEmail4">Email</label>
                  </div>
                </div>

                
                  <div class="form-group col-md-6">
                    <div class="form-floating mb-3" >
                      <input type="email" class="form-control" id="inputEmail4" placeholder="Email"  placeholder="Nome do Projeto">
                    <label for="inputEmail4">Telefone</label>
                  </div>
                </div>

                   <div class="col-12">
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                      <label for="floatingTextarea">Agência de Proteção de Dados</label>
                    </div>
                  <br>
                </div>

                    <div class="font-endereco">
                      <br>
                      <h4>Endereço</h>
                   </div>
                    
                    <div class="col-md-6" >
                    <div class="form-floating mb-3" >
                      <input type="text" class="form-control" id="inputAddress" id="floatingName" placeholder="Nome do Projeto">
                      <label for="floatingName">Rua</label>    
                    </div>
                  </div>

                    <div class="form-group col-md-3" >
                    <div class="form-floating mb-3" >
                      <input type="text" class="form-control" id="inputZip" placeholder="Nome do Projeto">
                      <label for="inputZip">Número</label>
                    </div>
                  </div>

                    <div class="form-group col-md-3">
                      <div class="form-floating mb-3" >
                        <input type="text" class="form-control" id="inputZip" placeholder="Nome do Projeto">
                      <label for="inputZip">Código postal</label>
                     
                    </div>
                  </div>
                    
                      <div class="form-group col-md-6">
                        <div class="form-floating mb-3" >
                          <input type="text" class="form-control" id="inputCity" placeholder="Nome do Projeto">
                        <label for="inputCity">Cidade</label>
                      </div>
                    </div>

                      <div class="form-group col-md-3">
                        <div class="form-floating mb-3" >
                          <input type="text" class="form-control" id="inputZip" placeholder="Nome do Projeto">
                        <label for="inputZip">Estado</label>      
                      </div>
                    </div>

                      <div class="form-group col-md-3">
                        <div class="form-floating mb-3" >
                          <input type="text" class="form-control" id="inputZip" placeholder="Nome do Projeto" >  
                        <label for="inputZip">País</label>
                    </div>
                  </div>
                      
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary" >Salvar</button>
                  </div>
                  </form>

                </div>

                
              </div>
                  
                    
                </div><!-- End Tab 5 Content -->
    
                <div class="tab-pane fade show" id="tab6"> <!-- Tab 6 Content -->
                    
                </div><!-- End Tab 6 Content -->
    
              </div>
    
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