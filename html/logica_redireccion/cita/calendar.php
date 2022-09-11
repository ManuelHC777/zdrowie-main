<?php include '../../layouts/header.php'; ?>
<!-- DataTables estas son para cambiar el diseño -->
<link href="../../datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="../../datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<!-- /script para el cambio de idioma de la tabla -->
<script src="//code.jquery.com/jquery-1.12.4.js"></script>


<link href="../../fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />





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


                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <h3 class="iq-card-header text-left">Calendario</h3>
                                            <div class="card-body">


                                                <div id='CalendarioWeb'></div>

                                                <div style='clear:both'></div>



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
                                         <div class="col-md-6">
                                 <label>Tipo de Cita*</label>
                                 <select class="form-control" autocomplete="off" name="profesion" id="profesion" required>
                                    <option selected disabled value="">Seleccione</option>
                                    <option value="1">Consulta</option>
                                    <option value="2">Reevaluación</option>
                                 </select>
                              </div>
                              <div class="col-md-6">
                                <label></label>
                              </div>
                                  </div>
                                    <div class="form-group row">

                                        <input readonly type="text" class="form-control" value="" style="display: none;"
                                            name="cod_cita" id="cod_cita" aria-describedby="helpId">

                                   
                                        <div class="col-md-6">
                                            <label>Nombre*</label>
                                            <input type="text" autocomplete="off" placeholder="Ej: Sara Raquel"
                                                name="nombre" class="form-control" id="nombre" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Apellido*</label>
                                            <input type="text" autocomplete="off" class="form-control"
                                                placeholder="Ej: García Díaz" name="apellido" id="apellido"
                                                required>
                                        </div>

                                    

                                    </div>

                                    <div class="form-group row">
                                    <div class="col-md-4">
                                            <label>Teléfono*</label>
                                            <input type="text" autocomplete="off" data-mask="9999-9999"
                                                placeholder="Ej: 9999-9999" name="telefono" id="telefono"
                                                class="form-control" required>
                                        </div>

                                        <div class="col-md-4">
                                            <label>Fecha*</label>
                                            <input type="date" autocomplete="off" data-mask="9999-9999"
                                                placeholder="No.telefono" name="fecha_cita" id="fecha_cita"
                                                class="form-control" required>
                                        </div>

                                        <div class="col-md-4">
                                            <label>Hora*</label>
                                            <input type="time" autocomplete="off" data-mask="9999-9999"
                                                placeholder="No.telefono" name="hora_cita" id="hiora_cita"
                                                class="form-control" required>
                                        </div>

                                    </div>

                            </div>
                            <!--cierra card-->
                        </div>
                        <!--cierra body card-->
                        <div class="modal-footer "> <!--si se centran se agrega  justify-content-center-->      <div class="col-md-9 mb-0" ><p>Campos marcados con (*) son obligatorios</p></div>                  
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





    <script src="../../fullcalendar/js/moment.min.js"></script>
    <!--<script src='public/plugins/fullcalendar/js/fullcalendar.min.js'></script>-->
    <script src='../../fullcalendar/js/fullcalendar.min.js'></script>
    <script src="../../fullcalendar/js/es.js"></script>



    
    <script src="citas.js" type="text/javascript" charset="utf-8"></script>






    <script src="../../js/bootstrap.min.js"></script>


    <!-- Counterup JavaScript -->

    <script src="../../js/jquery.counterup.min.js"></script>
    <!-- Wow JavaScript -->

    <script src="../../js/wow.min.js"></script>
    <!-- Apexcharts JavaScript -->

    <!-- Slick JavaScript -->
    <script src="../../js/slick.min.js"></script>
    <!-- Select2 JavaScript -->
    <script src="../../js/select2.min.js"></script>
    <!-- Owl Carousel JavaScript -->

    <!-- Magnific Popup JavaScript -->
    <script src="../../js/jquery.magnific-popup.min.js"></script>
    <!-- Smooth Scrollbar JavaScript -->

    <script src="../../js/smooth-scrollbar.js"></script>
    <!-- lottie JavaScript -->

    <script src="../../js/chart-custom.js"></script>
    <!-- Custom JavaScript -->
    <script src="../../js/custom.js"></script>





    <script>
    $(document).ready(function() {
        $('#CalendarioWeb').fullCalendar({
            header: {
                //left: 'today,prev,next,Miboton',
                center: 'title',
                left: 'month,basicWeek,basicDay', // center: 'month,basicWeek, basicDay,agendaWeek,agendaDay'
                right: 'today,prev,next'

            },
            /* customButtons: {
                 Miboton: {
                     text: "Botón 1",
                     click: function () {
                         alert("Accion del botón");
                     }
                 }
             },*/
            dayClick: function(date, jsEvent, view) {
                /*  alert("Valor seleccionado:" + date.format());
                  alert("Vista actual:" + view.name);
                  $(this).css('background-color', 'red');
                  $("#exampleModal").modal();*/

                $('#btnAgregar').prop("disabled", false);
                $('#btnModificar').prop("disabled", true);
                $('#btnEliminar').prop("disabled", true);

                limpiarFormulario();
                $('#txtFecha').val(date.format());

                $("#ModalRegistrar").modal();
                //window.location.assign("indexpaciente.php");

            },

            //events: 'http://localhost/calendarioWeb/eventos.php',
            eventSources: [{

                events: [{
                        id: 1,
                        title: 'Israel Antonio Chávez Herrera',
                        descripcion: "este es un evento 1",
                        start: '2022-08-24',
                        color: "#FF0F0",
                        textColor: "#FFFFFF"

                    },
                    {
                        id: 1,
                        title: 'Israel Antonio Chávez Herrera',
                        descripcion: "este es un evento 1",
                        start: '2022-08-24',
                        color: "#FF0F0",
                        textColor: "#FFFFFF"

                    },

                    {
                        id: 1,
                        title: 'Israel Antonio Chávez Herrera',
                        descripcion: "este es un evento 1",
                        start: '2022-08-27',
                        color: "#FF0F0",
                        textColor: "#FFFFFF"

                    },



                ],
                color: "black",
                textColor: "yellow"

            }],
            eventClick: function(calEvent, jsEvent, view) {


                $('#btnAgregar').prop("disabled", true);
                $('#btnModificar').prop("disabled", false);
                $('#btnEliminar').prop("disabled", false);

                //H2
                $('#tituloEvento').html(calEvent.title);

                //Mostrar la información del eveneto en los inputs
                //  $('#descripcionEvento').html(calEvent.descripcion);
                $('#txtDescripcion').val(calEvent.descripcion);
                $('#txtID').val(calEvent.id);
                $('#txtTitulo').val(calEvent.title);
                $('#txtColor').val(calEvent.color);

                FechaHora = calEvent.start._i.split(" ");
                $('#txtFecha').val(FechaHora[0]);
                $('#txtHora').val(FechaHora[1]);



                //$("#exampleModal").modal();
                window.location.assign("indexcalendar.php");



            },
            editable: true,
            eventDrop: function(calEvent) {
                $('#txtID').val(calEvent.id);
                $('#txtTitulo').val(calEvent.title);
                $('#txtColor').val(calEvent.color);
                $('#txtDescripcion').val(calEvent.descripcion);

                var fechaHora = calEvent.start.format().split("T");
                $('#txtFecha').val(fechaHora[0]);
                $('#txtHora').val(fechaHora[1]);

                RecolectarDatosDUI();
                EnviarInformacion('modificar', NuevoEvento, true);



            }

        });
    });
    </script>





    <script>
    var NuevoEvento;
    $('#btnAgregar').click(function() {

        /* NuevoEvento = {
            title: $('#txtTitulo').val(),
            start: $('#txtFecha').val() + " " + $('#txtHora').val(),
            color: $('#txtColor').val(),
            descripcion: $('#txtDescripcion').val(),
            textColor: "#FFFFFF"
        };**/

        RecolectarDatosDUI();
        EnviarInformacion('agregar', NuevoEvento);
        // $('#CalendarioWeb').fullCalendar('renderEvent', NuevoEvento);
        //  $("#ModalEventos").modal('toggle');

    });


    $('#btnEliminar').click(function() {
        RecolectarDatosDUI();
        EnviarInformacion('eliminar', NuevoEvento);
    });

    $('#btnModificar').click(function() {
        RecolectarDatosDUI();
        EnviarInformacion('modificar', NuevoEvento);
    });

    function RecolectarDatosDUI() {

        NuevoEvento = {
            id: $('#txtID').val(),
            title: $('#txtTitulo').val(),
            start: $('#txtFecha').val() + " " + $('#txtHora').val(),
            color: $('#txtColor').val(),
            descripcion: $('#txtDescripcion').val(),
            textColor: "#FFFFFF",
            end: $('#txtFecha').val() + " " + $('#txtHora').val(),
        };

    }

    function EnviarInformacion(accion, objEvento, modal) {
        $.ajax({
            type: 'POST',
            url: 'eventos.php?accion=' + accion,
            data: objEvento,
            success: function(msg) {
                if (msg) {
                    $('#CalendarioWeb').fullCalendar('refetchEvents');
                    if (!modal) {
                        $("#ModalEventos").modal('toggle');
                    }


                }
            },
            error: function() {
                alert("Hay un error...");

            }
        });

    }



    $('.clockpicker').clockpicker();

    function limpiarFormulario() {
        $('#txtID').val('');
        $('#txtTitulo').val('Evento...');
        $('#txtColor').val('');
        $('#txtDescripcion').val('');

    }
    </script>



</body>

</html>