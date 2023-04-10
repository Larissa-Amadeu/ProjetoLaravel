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
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/cadastro.css" rel="stylesheet">

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
              <li><a class="nav-link scrollto active" href="{{ route ('route_cadastro')}}">CADASTRO</a></li>
              <li><a class="getstarted scrollto" href="{{ route ('route_login')}}">ACESSAR</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>  
      </header>

      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
              <div class="card-body p-4 p-sm-5">
                <h2 class="tit text-center mb-5">CADASTRO</h2>
                <form action="{{route('cadastro-usuario')}}" method="post">
                  @if(Session::has('success'))
                  <div class="alert alert-success">{{Session::get('success')}}</div>
                  @endif
                  @if(Session::has('fail'))
                  <div class="alert alert-danger">{{Session::get('fail')}}</div>
                  @endif
                  @csrf
                  <div class="form-floating mb-3">
                    <input type="name" class="form-control" id="floatingInput" placeholder="name" name="name" value="{{old('name')}}">
                    <label for="floatingInput">Nome</label>
                    <span class="text-danger">@error('name'){{$message}}@enderror</span>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="empresa" name="empresa">
                    <label for="floatingInput">Empresa</label>
                    <span class="text-danger">@error('name'){{$message}}@enderror</span>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="{{old('email')}}">
                    <label for="floatingInput">E-mail</label>
                    <span class="text-danger">@error('email'){{$message}}@enderror</span>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" value="{{old('password')}}">
                    <label for="floatingPassword">Senha</label>
                    <span class="text-danger">@error('password'){{$message}}@enderror</span>
                  </div>
    
                  
                  <div class="d-grid">
                    <button class="w-100 btn btn-lg btn-primary text-uppercase fw-bold" type="submit">CADASTRAR</button>
                  </div>
                  
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>
