<?php
session_start();
if (!isset($_SESSION['IDENTIFICACION'])) {
header('location: index.php?c=login');
}
$usersession = $_SESSION['IDENTIFICACION'];
foreach ($usersession as $user) {
?>
<!DOCTYPE html>
<html lang="es">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SICAAS|Ambiente</title>
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
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <?php if ($user->ID_ROL ==1) {
 ?>
               <img alt="image" src="assets/img/admin.jpg"
                class="user-img-radious-style">
                <?php } ?>
                <?php if ($user->ID_ROL ==2) {
 ?>
               <img alt="image" src="assets/img/cuenta.jpg"
                class="user-img-radious-style">
                <?php } ?>
                <?php if ($user->ID_ROL ==3) {
 ?>
               <img alt="image" src="assets/img/inst.jpg"
                class="user-img-radious-style">
                <?php } ?>
                 <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Bienvenido <?php echo $user->NOMBRE;?></div>
              
              <a href="?c=usuario&a=Myuser&ID_USUARIO=<?php echo $user->ID_USUARIO; ?>" class="dropdown-item has-icon"><i class="far fa-user"></i> Perfil
              </a> 
              <div class="dropdown-divider"></div>
              <a href="?c=login" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Salir
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="?c=menu"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">SICAAS</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Principal</li>
            <li class="dropdown">
              <a href="?c=menu" class="nav-link"><i data-feather="monitor"></i><span>Inicio</span></a>
            </li>


            <?php if ($user->ID_ROL ==1) {
 ?>
            <li class="menu-header">Usuario</li>
            <li><a class="nav-link" href="?c=usuario&a=Listus"><i data-feather="eye"></i><span>Consultar usuario</span></a></li>
            <?php } ?>
            <li class="menu-header">Control Ambiente</li>
            <li><a class="nav-link" href="?c=control_ambiente&a=Nuevo"><i  data-feather="clipboard"></i><span>Registrar</span></a></li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="folder"></i><span>Consultas</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?c=control_ambiente&a=List">Control de ambiente</a></li>
                <li><a class="nav-link" href="?c=control_ambiente&a=ListAUI">Ambientes usados</a></li>
                <li><a class="nav-link" href="?c=control_ambiente&a=ListNRPU">Novedades registradas</a></li>
                <li><a class="nav-link" href="?c=control_ambiente&a=ListAAN">Activos con novedad</a></li>
                <li><a class="nav-link" href="?c=control_ambiente&a=ListSNA">Seguimiento Activo</a></li>
                <li><a class="nav-link" href="?c=control_ambiente&a=ListSA">Seguimiento ambiente</a></li>
              </ul>
            </li>
            <li class="menu-header">Novedad</li>
            <li><a class="nav-link" href="?c=novedad&a=Nuevo"><i data-feather="activity"></i><span>Registrar novedad</span></a></li>
            <li><a class="nav-link" href="?c=novedad&a=consultarN"><i data-feather="sidebar"></i><span>Consultar novedad</span></a></li>
            <?php if ($user->ID_ROL ==2) { ?>
              <li><a class="nav-link" href="?c=novedad&a=consultaras&ID_USUARIO=<?php echo $user->ID_USUARIO; ?>"><i data-feather="alert-circle"></i><span>Novedades en mis ambientes</span></a></li>

<?php } ?>

<?php if ($user->ID_ROL ==1) {
 ?>
            <li class="menu-header">Gestion Ambiente</li>
            <li class="dropdown active">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="bookmark"></i><span>Ambiente</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?c=ambiente&a=Nuevo">Registrar ambiente</a></li>
                <li class="active"><a class="nav-link" href="?c=ambiente&a=Listus">Consultar Ambiente</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="flag"></i><span>Sede</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?c=sede&a=Nuevo">Registrar sede</a></li>
                <li><a class="nav-link" href="?c=sede&a=consultarS">Consultar sede</a></li>
              </ul>
            </li>
            <?php } ?>


            <?php if ($user->ID_ROL ==2) {
 ?>
            <li class="menu-header">Gestion Ambiente</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="bookmark"></i><span>Ambiente</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?c=ambiente&a=Listus2">Consultar Ambiente</a></li>
                <li><a class="nav-link" href="?c=ambiente&a=Listus3&ID_USUARIO=<?php echo $user->ID_USUARIO; ?>">Mis ambientes</a></li>
              </ul>
            </li>
            
            <?php } ?>

            <?php if ($user->ID_ROL ==3) {
 ?>
            <li class="menu-header">Gestion Ambiente</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="bookmark"></i><span>Ambiente</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?c=ambiente&a=Listus2">Consultar Ambiente</a></li>
              </ul>
            </li>
            
            <?php } ?>
            <?php if ($user->ID_ROL ==1) {
 ?>

            <li class="menu-header">Asignaciones</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user"></i><span>Usuario ambiente</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?c=usuarioambiente&a=Nuevo">Asignar cuentadante</a></li>
                <li><a href="?c=usuarioambiente">Cuentadantes asignados</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="tv"></i><span>Activo ambiente</span></a>
              <ul class="dropdown-menu">
                <li><a href="?c=activoambiente&a=Nuevo">Asignar activo</a></li>
                <li><a class="nav-link" href="?c=activoambiente&a=Index">Activos asignados</a></li>
                <li><a class="nav-link" href="?c=activoambiente&a=Index1">Historial de activo</a></li>
              </ul>
            </li>
            <?php } ?>

<?php if ($user->ID_ROL ==1) {
 ?>
            <li class="menu-header">Activo</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="tablet"></i><span>Activos</span></a>
              <ul class="dropdown-menu">
                <li><a href="?c=activo&a=Nuevo">Registrar activo</a></li>
                <li><a href="?c=activo&a=consultarA">Consultar activo</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="tag"></i><span>Categorias</span></a>
              <ul class="dropdown-menu">
                <li><a href="?c=categoria&a=Nuevo">Registrar categoria</a></li>
                <li><a href="?c=categoria&a=consultarC">Consultar categoria</a></li>
              </ul>
            </li>
            <?php } ?>

            <?php if ($user->ID_ROL !=1) {
 ?>
            <li class="menu-header">Activo</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="tablet"></i><span>Activos</span></a>
              <ul class="dropdown-menu">
                <li><a href="?c=activo&a=consultarA2">Consultar activo</a></li>
              </ul>
            </li>

            <?php } ?>
            <li class="menu-header">SICAAS</li>
            <li><a class="nav-link" href=""><i data-feather="file"></i><span></span></a></li>
          

              </ul>
            </li>
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="text-warning">Ambientes</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                            <?php if($user->ID_ROL==1){?>
                          <tr>
                            <th>Nombre</th>
                            <th>Estado</th>
                            <th>Sede</th>

                            <th>Editar</th>
                            <th>Inhabilitar</th>

                          </tr>
                          <?php }else{ ?>
                          <tr>
                            <th>Nombre</th>
                            <th>Estado</th>
                            <th>Sede</th>


                          </tr>
                          <?php } ?>
                        </thead>
                        <tbody>
                        <?php foreach($this->model->Listar($OPTION,$VALUE) as $r): ?>
                                    <?php if($user->ID_ROL==1){?>
        <tr>
            <td><?php echo $r->NOMBRE; ?></td>
            <td><?php 
            if ($r->ESTADO==1) {
                echo "Activo";
            }else{
                echo "Inactivo";
            }
             ?></td>
            <td><?php echo $r->SEDE; ?></td>

            <td>
                <a  class="btn btn-primary" href="?c=ambiente&a=Crud&ID_AMBIENTE=<?php echo $r->ID_AMBIENTE; ?>">Editar</a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="redirigir(<?php echo $r->ID_AMBIENTE; ?>)" >Inhabilitar</a>
            </td>
            
        </tr>
        <?php } else{ ?>
          <tr>
            <td><?php echo $r->NOMBRE; ?></td>
            <td><?php 
            if ($r->ESTADO==1) {
                echo "Activo";
            }else{
                echo "Inactivo";
            }
             ?></td>
            <td><?php echo $r->SEDE; ?></td>

            
        </tr>
        <?php } ?>
    <?php endforeach; ?>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            </div>
            <script>

function redirigir(id){
   
console.log('redirigir'+id);
var href = '?c=ambiente&a=Desactivar&ID_AMBIENTE='+id;
swal({
  title: "¿Esta seguro?",
  text: "Con esta acción inhabilitara este ambiente!",
  icon: "warning",
  buttons: ["Cancelar", true],
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location = href;
  } else {

  }
});



};




</script>
       
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/datatables/datatables.min.js"></script>
  <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>

  <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>


<!-- datatables.html  21 Nov 2019 03:55:25 GMT -->
</html>
<?php } ?>