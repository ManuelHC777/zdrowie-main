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
                        <img src="../../images/logo.png" class="img-fluid" alt="">
                        <span>Zdrowie</span>
                        </a>
                     </div>
                  </div>
                  <nav class="navbar navbar-expand-lg navbar-light p-0">
                     <div class="iq-search-bar">
                        <form action="#" class="searchbox">
                           <h4>Citas</h4>
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




                    <div class="col-lg-12">
                        <div class="iq-card">

                            <div class="iq-card-body">

                                <h3 class="iq-card-header text-center" style="color:#000000" ;>Lista de
                                    Citas </h3>
                                    <div class="iq-card-title text-center">
                                        <h5 style="color:#000000" ; id="fecha_calendar">24/08/2022</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <table id="tabla" class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Apellidos</th>
                                                                <th>Nombres</th>
                                                                <th>Hora</th>
                                                                <th>Accion</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Chávez Herrea</td>
                                                                <td>Israel Antonio</td>
                                                                <td>08:00:00 AM</td>
                                                                <td align="center">
                                                                    <button type="button" href="#" id="posponerCita" class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalRegistrar">
                                                                        <i class="fa fa-pencil"></i></a>
                                                                    </button>


                                                                <button type="button" class="btn btn-danger mb-3"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                                </td>
                                                            </tr>


                                                            <tr>
                                                                <td>Chávez Herrea</td>
                                                                <td>Israel Antonio</td>
                                                                <td>08:00:00 AM</td>
                                                                <td align="center">
                                                                    <button type="button" href="#" id="posponerCita" class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalRegistrar">
                                                                        <i class="fa fa-pencil"></i></a>
                                                                    </button>


                                                                <button type="button" class="btn btn-danger mb-3"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
            <?php include '../../layouts/flooter.php'?>
            <!-- Footer END -->

          
            <!-- Modal -->
            <div class="modal fade" id="ModalRegistrar" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Registro de Citas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="iq-card-body">
                                <form>
                                    <div class="form-group row">

                                        <input readonly type="text" class="form-control" value="" style="display: none;"
                                            name="cod_cita" id="cod_cita" aria-describedby="helpId">


                                        <div class="col-md-6">
                                            <label>Nombre</label>
                                            <input type="text" autocomplete="off" placeholder="Ingrese los nombres"
                                                name="nombre" class="form-control" id="nombre" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Apellido</label>
                                            <input type="text" autocomplete="off" class="form-control"
                                                placeholder="Ingrese los apellidos" name="apellido" id="apellido"
                                                required>
                                        </div>

                                    

                                    </div>

                                    <div class="form-group row">
                                    <div class="col-md-4">
                                            <label>Teléfono</label>
                                            <input type="text" autocomplete="off" data-mask="9999-9999"
                                                placeholder="No.telefono" name="telefono" id="telefono"
                                                class="form-control" required>
                                        </div>

                                        <div class="col-md-4">
                                            <label>Fecha</label>
                                            <input type="date" autocomplete="off" data-mask="9999-9999"
                                                placeholder="No.telefono" name="fecha_cita" id="fecha_cita"
                                                class="form-control" required>
                                        </div>

                                        <div class="col-md-4">
                                            <label>Hora</label>
                                            <input type="time" autocomplete="off" data-mask="9999-9999"
                                                placeholder="No.telefono" name="hora_cita" id="hiora_cita"
                                                class="form-control" required>
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



    <script src="cit.js" type="text/javascript" charset="utf-8"></script>


    <script>
    //Idiomas con el 1er método   
    /*  $(document).ready(function () {
          $('#tabla').DataTable({
              "language": {
                  "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
              }

          });
      });*/
    //Idiomas con el 2do método
    $(document).ready(function() {
        $('#tabla').DataTable({
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron registros",
                "sEmptyTable": "No hay datos disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad"
                }
            }
        });
    });
    </script>
</body>

</html>