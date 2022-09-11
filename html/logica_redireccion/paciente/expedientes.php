<?php include '../../layouts/header.php'; ?>
<!-- DataTables estas son para cambiar el diseño -->
<link href="../../datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="../../datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<!-- /script para el cambio de idioma de la tabla -->
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<?php include '../../layouts/headerStyle.php'; ?>

<body>
   <!-- loader Start -->
   <?php include '../../layouts/loader.php'; ?>
   <!-- loader END -->
   <!-- Wrapper Start -->
   <div class="wrapper">
      <!-- Sidebar  -->
      <?php include '../../layouts/navbar.php'; ?>
      <!-- END Sidebar  -->
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <div class="iq-sidebar-logo">
                  <div class="top-logo">
                     <a href="index.html" class="logo">
                        <img src="../../images/logo-zdrowi.png" class="img-fluid" alt="">
                        <span>Zdrowie</span>
                     </a>
                  </div>
               </div>
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-search-bar">
                     <form action="#" class="searchbox">
                        <h4>Expedientes</h4>
                     </form>
                  </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-more-fill"></i></div>
                        <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                     </div>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">

                        <li class="nav-item iq-full-screen">
                           <a href="#" class="iq-waves-effect" id="btnFullscreen"><i class="ri-fullscreen-line"></i></a>
                        </li>

                        <ul class="navbar-list">
                           <li>
                              <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                                 <img src="../../images/user/1.jpg" class="img-fluid rounded mr-3" alt="user">
                                 <div class="caption">
                                    <h6 class="mb-0 line-height">Administrador</h6>
                                 </div>
                              </a>
                              <div class="iq-sub-dropdown iq-user-dropdown">
                                 <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                       <div class="bg-primary p-3">
                                          <h5 class="mb-0 text-white line-height">Hello Bini Jets</h5>
                                          <span class="text-white font-size-12">Available</span>
                                       </div>
                                       <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                          <div class="media align-items-center">
                                             <div class="rounded iq-card-icon iq-bg-primary">
                                                <i class="ri-file-user-line"></i>
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Perfil</h6>
                                                <p class="mb-0 font-size-12">View personal profile details.</p>
                                             </div>
                                          </div>
                                       </a>

                                       <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                          <div class="media align-items-center">
                                             <div class="rounded iq-card-icon iq-bg-primary">
                                                <i class="ri-lock-line"></i>
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Bloquear Pantalla</h6>
                                                <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                             </div>
                                          </div>
                                       </a>
                                       <div class="d-inline-block w-100 text-center p-3">
                                          <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
               </nav>
            </div>
         </div>
         <!-- TOP Nav Bar END -->

         <div class="container-fluid">
            <div class="row">
            <div class="col-md-6 col-lg-3">
                   <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter" style="display: contents">
                           <div class="iq-card-body iq-bg-primary rounded">
                               <div class="d-flex align-items-center justify-content-between">
                                   <div class="rounded-circle iq-card-icon bg-primary"><i class="ri-user-add-fill"></i></div>
                                   <div class="mini-stat-info text-right">
                                        <h4 class="">Paciente</h4>
                                        <h6 style="color:#089bab ;">Registrar</h6>
                                   </div>
                               </div>
                           </div>
                       </button>
                   </div>
                </div>

               <div class="col-md-6 col-lg-3">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body iq-bg-primary rounded">
                        <div class="d-flex align-items-center justify-content-between">
                           <div class="rounded-circle iq-card-icon bg-primary"><i class="ri-user-fill"></i></div>

                           <div class="mini-stat-info text-right">
                              <h4 class="mb-0"><span class="counter">3</span></h4>
                              <h6 style="color:#089bab ;">Total Expedientes</h6>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="iq-card">

                     <div class="iq-card-body">


                       <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                           Launch demo modal
                        </button>-->

                        <div class="row">
                           <div class="col-12">
                              <div class="card">
                                 <div class="card-body">
                                    <table id="data" class="table table-striped table-bordered">
                                       <thead>
                                          <tr>
                                             <th>Nombre</th>
                                             <th>Apellido</th>
                                             <th>Fecha Nacimiento</th>
                                             <th>Edad</th>
                                             <th>Telefono</th>
                                             <th>Acciones</th>
                                          </tr>
                                       </thead>
                                       <tbody>

                                          <tr>
                                             <td>Lael Greer</td>
                                             <td>Wundram Perez</td>
                                             <td>18/05/1990</td>
                                             <td>32 años</td>
                                             <td>7895-6352</td>
                                             <td>
                                                <div class="dropdown m-b-10">
                                                   <button class="btn btn-primary mb-3 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      Seleccione
                                                   </button>
                                                   <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                      <a class="dropdown-item btn_editar" href="javascript:void(0)">Ver Expediente</a>
                                                      <a class="dropdown-item btn_eliminar" href="javascript:void(0)">Actualizar</a>
                                                   </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>Jonas Alexander</td>
                                             <td>Medrano Ventura</td>
                                             <td>18/05/1990</td>
                                             <td>32 años</td>
                                             <td>6598-3325</td>
                                             <td>
                                                <div class="dropdown m-b-10">
                                                   <button class="btn btn-primary mb-3 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      Seleccione
                                                   </button>
                                                   <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                     <a class="dropdown-item btn_editar" href="javascript:void(0)">Ver Expediente</a>
                                                      <a class="dropdown-item btn_eliminar" href="javascript:void(0)">Actualizar</a>
                                                   </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>Juan Carlos</td>
                                             <td>De Leon Cruz</td>
                                             <td>18/05/1990</td>
                                             <td>32 años</td>
                                             <td>7478-0098</td>
                                             <td>
                                                <div class="dropdown m-b-10">
                                                   <button class="btn btn-primary mb-3 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      Seleccione
                                                   </button>
                                                   <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                   <a class="dropdown-item btn_editar" href="javascript:void(0)">Ver Expediente</a>
                                                      <a class="dropdown-item btn_eliminar" href="javascript:void(0)">Actualizar</a>
                                                   </div>
                                             </td>
                                          </tr>

                                       </tbody>

                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>


                     </div><!-- Cierra card -->
                  </div>
               </div>
            </div><!-- Cierra row -->
         </div><!-- Cierra container -->
         <!-- Footer -->
         <?php include '../../layouts/flooter.php' ?>
         <!-- Footer END -->

         <!-- Modal -->
         <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalCenterTitle">Apertura de Expediente</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <div class="iq-card-body">
                        <form>
                           <div class="form-row">
                              <div class="col-md-6 mb-3">
                                 <label>Nombres</label>
                                 <input type="text" autocomplete="off" value="Juan Carlos" name="nombre" class="form-control" id="nombre">
                              </div>
                              <div class="col-md-6 mb-3">
                                 <label>Apellidos</label>
                                 <input type="text" autocomplete="off" name="apellido" value="De Leon Cruz" class="form-control" id="nombre">
                              </div>

                              <div class="col-md-4 mb-3">
                                 <label>Fecha de Nacimiento*</label>
                                 <input type="date" autocomplete="off" placeholder="mm/dd/yy" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" required>
                              </div>

                              <div class="col-md-4 mb-3">
                                 <label>Genero</label>
                                 <select class="form-control" autocomplete="off" name="profesion" id="profesion" required>
                                    <option selected disabled value="">Seleccione</option>
                                    <option value="1">Masculino</option>
                                    <option value="2">Femenino</option>
                                 </select>
                              </div>


                              <div class="col-md-4 mb-3">
                                 <label>Teléfono</label>
                                 <input type="text" autocomplete="off" value="7478-0098" data-mask="9999-9999" placeholder="No.telefono" name="telefono" id="telefono" class="form-control">
                              </div>

                              <div class="col-md-12 mb-3">
                                 <label>Dirección</label>
                                 <input type="text" autocomplete="off" name="direccion" class="form-control" id="direccion" required>
                              </div>

                              <div class="modal-body col-md-12">
                                 <hr>
                                 <h5 style="background-color: #d3dae7" class="modal-title" id="exampleModalLabel">Datos del Encargado</h5>
                                 <hr>
                              </div>
                              <div class="col-md-4 mb-3">
                                 <label>Nombres</label>
                                 <input type="text" autocomplete="off" name="nombre" class="form-control" id="nombre" required>
                              </div>
                              <div class="col-md-4 mb-3">
                                 <label>Apellidos</label>
                                 <input type="text" autocomplete="off" name="apellido" class="form-control" id="nombre" required>
                              </div>

                              <div class="col-md-4 mb-3">
                                 <label>Parentesco</label>
                                 <select class="form-control" autocomplete="off" name="parentesco" id="parentesco" required>
                                 <option selected disabled value="">Seleccione</option>
                                 <option value="1">Mamá</option>
                                    <option value="2">Papá</option>
                                    <option value="3">Encargado</option>
                                 </select>
                              </div>

                           </div>

                     </div>
                     <!--cierra card-->
                  </div>
                  <!--cierra body card-->
                  <div class="modal-footer">
                     <button class="btn btn-primary" type="submit">Guardar</button>
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                  </div>
                  </form>

               </div>
            </div>
         </div><!-- Modal -->
      </div>
   </div>
   <!-- Wrapper END -->
   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="../../js/jquery.min.js"></script>
   <script src="../../js/popper.min.js"></script>
   <script src="../../js/bootstrap.min.js"></script>
   <!-- Appear JavaScript -->
   <script src="../../js/jquery.appear.js"></script>
   <!-- Countdown JavaScript -->
   <script src="../../js/countdown.min.js"></script>
   <!-- Counterup JavaScript -->
   <script src="../../js/waypoints.min.js"></script>
   <script src="../../js/jquery.counterup.min.js"></script>
   <!-- Wow JavaScript -->
   <script src="../../js/wow.min.js"></script>
   <!-- Apexcharts JavaScript -->
   <script src="../../js/apexcharts.js"></script>
   <!-- Slick JavaScript -->
   <script src="../../js/slick.min.js"></script>
   <!-- Select2 JavaScript -->
   <script src="../../js/select2.min.js"></script>
   <!-- Owl Carousel JavaScript -->
   <script src="../../js/owl.carousel.min.js"></script>
   <!-- Magnific Popup JavaScript -->
   <script src="../../js/jquery.magnific-popup.min.js"></script>
   <!-- Smooth Scrollbar JavaScript -->
   <script src="../../js/smooth-scrollbar.js"></script>
   <!-- lottie JavaScript -->
   <script src="../../js/lottie.js"></script>
   <!-- Chart Custom JavaScript -->
   <script src="../../js/chart-custom.js"></script>
   <!-- Custom JavaScript -->
   <script src="../../js/custom.js"></script>
   <!-- Required datatable js -->
   <script src="../../datatables/jquery.dataTables.min.js"></script>
   <script src="../../datatables/dataTables.bootstrap4.min.js"></script>
   <!-- Buttons examples -->
   <script src="../../datatables/dataTables.buttons.min.js"></script>
   <script src="../../datatables/buttons.bootstrap4.min.js"></script>
   <script src="../../datatables/jszip.min.js"></script>
   <script src="../../datatables/pdfmake.min.js"></script>
   <script src="../../datatables/vfs_fonts.js"></script>
   <script src="../../datatables/buttons.html5.min.js"></script>
   <script src="../../datatables/buttons.print.min.js"></script>
   <script src="../../datatables/buttons.colVis.min.js"></script>
   <!-- Responsive examples -->
   <script src="../../datatables/dataTables.responsive.min.js"></script>
   <script src="../../datatables/responsive.bootstrap4.min.js"></script>

   <script type="text/javascript">
      $(document).ready(function() {
         $('#data').DataTable({
            "language": {
               "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }
         });
      });
   </script>
</body>

</html>