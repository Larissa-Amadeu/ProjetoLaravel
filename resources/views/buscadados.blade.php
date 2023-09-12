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
  
    <div class="container d-flex align-items-center justify-content-between" id="header" class="fixed-top">

      <h1 class="logo"><a href="{{ route ('route_index')}}">TR DESIGN</a></h1>
      <!-- logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>         
             
          <li><a class="nav-link scrollto" href="{{ route ('route_inicio')}}">TR-MODEL</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h1 class="card-title text-center">Formulário de Busca</h1>
                  <!-- ... -->
          @csrf
                  <div class="tab-content">
                    <div class="tab-pane fade show active" >
                      <form class="row g-3" action="{{route('route_dados_publicos')}}" method="GET">
        
                        <div class="col-md-10">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="Search" placeholder="nomeProjetoBusca" name="buscarDados">
                            <label for="floatingName">Dados do Projeto</label>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="State" placeholder="desktop" name="tipo">
                              <option value="1" {{ old('tipo') == '1' ? 'selected' : '' }}>E</option>
                              <option value="2" {{ old('tipo') == '2' ? 'selected' : '' }}>OU</option>
                            </select>
                            <label for="floatingSelect"></label>
                          </div>
                          @if(old('plataforma'))
                          <p>Opção selecionada: {{ old('tipo') == '1' ? 'AND' : (old('tipo') == '2' ? 'OR' : (old('plataforma') == '3' ? 'Mobile' : 'IoT')) }}</p>
                          @endif
                        </div>
                        <div class="form-group">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox1" checked>
                            <label class="form-check-label" for="checkbox1">Nome do Projeto</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox2" checked>
                            <label class="form-check-label" for="checkbox2">Plataforma</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox3" checked>
                            <label class="form-check-label" for="checkbox3">Descrição</label>
                          </div>   
                        </div>

                        <div class="col-md-10">
                          <div class="form-floating">
                            <input type="name" class="form-control" id="floatingName" placeholder="nomeProjeto" name="nomeProjeto">
                            <label for="floatingName">Proposito de Uso</label>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="State" placeholder="desktop" name="plataforma">
                              <option value="1" {{ old('tipo') == '1' ? 'selected' : '' }}>E</option>
                              <option value="2" {{ old('tipo') == '2' ? 'selected' : '' }}>OU</option>
                            </select>
                            <label for="floatingSelect"></label>
                          </div>
                          @if(old('plataforma'))
                          <p>Opção selecionada: {{ old('plataforma') == '1' ? 'Desktop' : (old('plataforma') == '2' ? 'Web' : (old('plataforma') == '3' ? 'Mobile' : 'IoT')) }}</p>
                          @endif
                        </div>
                        <div class="form-group">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox1" checked>
                            <label class="form-check-label" for="checkbox1">Descrição</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox2" checked>
                            <label class="form-check-label" for="checkbox2">Base Legal</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox3" checked>
                            <label class="form-check-label" for="checkbox3">Data ínicio</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox4" checked>
                            <label class="form-check-label" for="checkbox4">Data fim</label>
                          </div>
                        </div>

                        <div class="col-md-10">
                          <div class="form-floating">
                            <input type="name" class="form-control" id="floatingName" placeholder="nomeProjeto" name="nomeProjeto">
                            <label for="floatingName">Compartilhamento</label>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="State" placeholder="desktop" name="plataforma">
                              <option value="1" {{ old('plataforma') == '1' ? 'selected' : '' }}>E</option>
                              <option value="2" {{ old('plataforma') == '2' ? 'selected' : '' }}>OU</option>
                            </select>
                            <label for="floatingSelect"></label>
                          </div>
                          @if(old('plataforma'))
                          <p>Opção selecionada: {{ old('plataforma') == '1' ? 'Desktop' : (old('plataforma') == '2' ? 'Web' : (old('plataforma') == '3' ? 'Mobile' : 'IoT')) }}</p>
                          @endif
                        </div>
                        <div class="form-group">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox1" checked>
                            <label class="form-check-label" for="checkbox1">Tipo</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox2" checked>
                            <label class="form-check-label" for="checkbox2">Base Legal</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox3" checked>
                            <label class="form-check-label" for="checkbox3">Justificativa</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox4" checked>
                            <label class="form-check-label" for="checkbox4">Ações ou Eventos</label>
                          </div>
                        </div>
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary">Buscar</button>
                        </div>
                        <br>
                      </form> <!-- End floating Labels Form -->
                    </div><!-- End Tab 1 Content -->   

          
        </form>
        <!-- ... -->

        </div>
      </div>
    </div>
    
    </section><!-- End Featured Services Section -->

    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 pt-4 pt-lg-0 content">
          </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        <!--&copy; Copyright <strong><span>TR-Design</span></strong>. Todos os direitos reservados-->
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
