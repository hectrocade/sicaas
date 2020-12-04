<?php
session_start();
if (!isset($_SESSION['IDENTIFICACION'])) {
header('location: index.php?c=login');
}
$usersession = $_SESSION['IDENTIFICACION'];
foreach ($usersession as $user) {
?>
<?php } ?>

<!DOCTYPE html>
<html lang="es">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SICAAS|Inicio</title>
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
            <a href="index.html"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">SICAAS</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Principal</li>
            <li class="dropdown active">
              <a href="?c=menu" class="nav-link"><i data-feather="monitor"></i><span>Inicio</span></a>
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
                  <h4 class="text-warning">Cambiar mi contraseña</h4>
                  </div>
                  <div class="card-body">
                  <form action="?c=usuario&a=Cambiar" method="post">
                    <div class="form-row">
                    <input type="hidden" name="usuario" value="<?php echo $user->IDENTIFICACION; ?>" required>
                    </div>
                    
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nueva contraseña</label>
                        <input type="password" class="form-control" name="pass1"  id="pass1" placeholder="Ingrese su nueva contraseña">
                      </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Confirmar nueva contraseña</label>
                        <input type="password" class="form-control" name="pass2"  id="pass2" placeholder="Ingrese nuevamente su nueva contraseña">
                      </div>

                  </div>
                  <div class="form-row">
                  <div class="form-group col-md-6" >

                  <input type="button" class="btn btn-info" value="verificar" onclick="capturar()">

                  </div>


                     <div class="form-group col-md-6" id="coincide" style="display:none">
                     <div class="alert alert-success">
                      Las contraseñas coinciden.
                    </div>
                         </div>

                         <div class="form-group col-md-6" id="nocoincide" style="display:none">
                     <div class="alert alert-danger">
                      Las contraseñas no coinciden.
                    </div>
                         </div>


                    </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit" id="submit" disabled>Cambiar contraseña</button>

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
  <script src="assets/js/cambio.js"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>