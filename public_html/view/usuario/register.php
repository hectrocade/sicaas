<!DOCTYPE html>
<html lang="es">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SICAAS|Registro</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/logo.png' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
           
          </ul>
        </div>
       
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="?c=menu"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">SICAAS</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Regresar</li>
            <li class="dropdown active">
              <a href="?c=login" class="nav-link"><i data-feather="monitor"></i><span>Login</span></a>
            </li>


          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
              <div class="card ">
                <div class="card-header">
                  <h4 class="text-warning">Bienvenido a sicaas!</h4>
                  </div>
                  <div class="card-body">
                  <form action="?c=usuario&a=Guardar" method="post">
                    <div class="form-row">
                      <div class="form-group col-md-4">

                        <label for="identificacion">Número de identificación:</label>
                        <label class="text-danger">*</label>
                        <input type="text" class="form-control" pattern="[0-9]{5,10}" name="IDENTIFICACION" id="IDENTIFICACION" placeholder="Ingrese su número de cedula" required>
              
                      </div>
                      <div class="form-group col-md-4">
                      <label>Nombre:</label>
                      <label class="text-danger">*</label>
                      <input type="text" class="form-control" pattern="[a-zA-ZÀ-ÿ\u00f1\u00d1 ]{5,100}" name="NOMBRE" id="NOMBRE" placeholder="Ingrese su nombre completo" required>

                      </div>
                      <div class="form-group col-md-4">
                      <label>Número celular:</label>
                      <label class="text-danger">*</label>
                      <input type="text" class="form-control" minlength="10"  pattern="[0-9]{10}" name="CELULAR" id="CELULAR" placeholder="Digite su número de celular" required>
                      </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-4">
  <label for="inputEmail4">Telefono:</label>
  <label class="text-danger">*</label>
  <input type="text" class="form-control" minlength="7"  pattern="[0-9]{7}" name="TELEFONO" id="TELEFONO" placeholder="Digite su número de telefono" required>
</div>
<div class="form-group col-md-4">
<label>Dirección:</label>
<label class="text-danger">*</label>
<input type="text" class="form-control" pattern="[a-zA-ZÀ-ÿ\u00f1\u00d1 ]{5,100}" name="DIRECCION" id="DIRECCION" placeholder="Digite su dirección de residencia" required>
</div>
<div class="form-group col-md-4">
<label>Correo electrónico</label>
<label class="text-danger">*</label>
<input type="email" class="form-control" maxlenght="100" name="CORREO" id="CORREO" placeholder="Digite su dirección de correo" required>
</div>
</div>
<div>Al hacer clic en "Registrarse", aceptas nuestras Condiciones y <a href="?c=usuario&a=Politica" target="_blank">la Política de datos</a> </div>
                    

                
                  <div class="card-footer text-right">
                  <button class="btn btn-secondary" type="reset">Limpiar</button>
                    <button class="btn btn-primary mr-1" type="submit">Registrarse</button>

                  </div>
                </div>
                  
                </form>
               
                  </div>
                </div>
              </div>
            </div>
          </div>
         
             
        </section>
       
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>