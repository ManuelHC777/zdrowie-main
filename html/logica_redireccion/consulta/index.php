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
                                <h4>Consulta</h4>
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
                <div class="col-lg-3">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h5 class="card-title">Datos Medicos</h5>
                           </div>
                        </div>
                        <div class="iq-card-body">
                            

                            <div class="iq-accordion career-style faq-style  ">
                                        <div class="iq-card iq-accordion-block p-0">
                                            <div class="clearfix iq-card-header d-flex justify-content-between">
                                                <div class="iq-header-title">
                                                    <label for="exampleFormControlTextarea6" class="card-title">+ Antecedentes</label>
                                                </div>
                                            </div>
                                            <div class="accordion-details iq-card-body">
                                                <div class="mb-3">
                                                    <textarea class="form-control" id="exampleFormControlTextarea6" placeholder="Antecedentes" disabled></textarea>
                                                </div>
                                            </div>
                                            <div class="accordion-details iq-card-body">
                                                <div class="iq-accordion career-style faq-style  ">

                                                </div>
                                            </div>
                                        </div>
                            </div>
                            <div class="iq-accordion career-style faq-style  ">
                                        <div class="iq-card iq-accordion-block p-0">
                                            <div class="clearfix iq-card-header d-flex justify-content-between">
                                                <div class="iq-header-title">
                                                    <label for="exampleFormControlTextarea7" class="card-title">+ Alergias a Farmacos</label>
                                                </div>
                                            </div>
                                            <div class="accordion-details iq-card-body">
                                                <div class="mb-3">
                                                    <textarea class="form-control" id="exampleFormControlTextarea7" placeholder="Antecedentes" disabled></textarea>
                                                </div>
                                            </div>
                                            <div class="accordion-details iq-card-body">
                                                <div class="iq-accordion career-style faq-style  ">

                                                </div>
                                            </div>
                                        </div>
                            </div>

                        </div>
                     </div>
                  </div>
                    <div class="col-lg-9">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <br>
                                        

                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nombre del paciente</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombres Apellidos" disabled>
                                            </div>

                                                <div class="col-md-3 mb-3">
                                                   <label>Edad</label>
                                                   <input type="text" autocomplete="off"  placeholder="22" name="validationDefault01" class="form-control" id="validationDefault01" disabled>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                   <label>Hora de Consulta</label>
                                                   <input type="time" autocomplete="off"  placeholder="22" name="validationDefault01" class="form-control" id="validationDefault01" required>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                   <label>Peso</label>
                                                   <input type="text" autocomplete="off" class="form-control" placeholder="46 kg" name="validationDefault02" id="validationDefault02" disabled>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                   <label>Estatura</label>
                                                   <input type="text" autocomplete="off" class="form-control" placeholder="155 cm" name="validationDefault02" id="validationDefault02" disabled>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                   <label>Presión</label>
                                                   <input type="text" autocomplete="off" class="form-control" placeholder="100/60" name="validationDefault02" id="validationDefault02" disabled>
                                                </div><!--  agregar la hora de la consulta y guardarla en tiempo real-->
                                                <div class="col-md-3 mb-3">
                                                   <label>Temperatura</label>
                                                   <input type="text" autocomplete="off" class="form-control" placeholder="36 grados" name="validationDefault02" id="validationDefault02" disabled>
                                                </div>

                                             </div>
                                </div>
                            </div>
                            <div class="iq-card-body">

                                <div class="iq-accordion career-style faq-style  ">
                                    <div class="iq-card iq-accordion-block p-0">
                                        <div class="clearfix iq-card-header d-flex justify-content-between">
                                            <div class="iq-header-title">
                                                <label for="exampleFormControlTextarea1" class="card-title">+ Motivo de la consulta</label>
                                            </div>
                                        </div>
                                        <div class="accordion-details iq-card-body">
                                            <div class="mb-3">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="accordion-details iq-card-body">
                                            <div class="iq-accordion career-style faq-style  ">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iq-accordion career-style faq-style  ">
                                        <div class="iq-card iq-accordion-block p-0">
                                            <div class="clearfix iq-card-header d-flex justify-content-between">
                                                <div class="iq-header-title">
                                                    <label for="exampleFormControlTextarea5" class="card-title">+ Historia clinica</label>
                                                </div>
                                            </div>
                                            <div class="accordion-details iq-card-body">
                                                <div class="mb-3">
                                                    <textarea class="form-control" id="exampleFormControlTextarea5" placeholder="Antecedentes"></textarea>
                                                </div>
                                            </div>
                                            <div class="accordion-details iq-card-body">
                                                <div class="iq-accordion career-style faq-style  ">

                                                </div>
                                            </div>
                                        </div>
                            </div>

                                <div class="iq-accordion career-style faq-style  ">
                                    <div class="iq-card iq-accordion-block p-0">
                                        <div class="clearfix iq-card-header d-flex justify-content-between">
                                            <div class="iq-header-title">
                                                <label for="exampleFormControlTextarea2" class="card-title">+ Evaluación Fisica</label>
                                            </div>
                                        </div>
                                        <div class="accordion-details iq-card-body">
                                            <div class="mb-3">
                                                <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="accordion-details iq-card-body">
                                            <div class="iq-accordion career-style faq-style  ">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iq-accordion career-style faq-style  ">
                                    <div class="iq-card iq-accordion-block p-0">
                                        <div class="clearfix iq-card-header d-flex justify-content-between">
                                            <div class="iq-header-title">
                                                <label for="exampleFormControlTextarea3" class="card-title">+ Diagnostico</label>
                                            </div>
                                        </div>
                                        <div class="accordion-details iq-card-body">
                                            <div class="mb-3">
                                                <textarea class="form-control" id="exampleFormControlTextarea3" rows="3"></textarea>
                                                <br>
                                                <input type="text" class="form-control" id="lab" placeholder="Ingrese el Antecedente de consulta">
                                            </div>
                                        </div>
                                        <div class="accordion-details iq-card-body">
                                            <div class="iq-accordion career-style faq-style  ">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="iq-accordion career-style faq-style  ">
                                    <div class="iq-card iq-accordion-block p-0">
                                        <div class="clearfix iq-card-header d-flex justify-content-between">
                                            <div class="iq-header-title">
                                                <label for="exampleFormControlTextarea4" class="card-title">+ Receta medica</label>
                                            </div>
                                        </div>
                                        <div class="accordion-details iq-card-body">
                                            <div class="mb-3">
                                                <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="accordion-details iq-card-body">
                                            <div class="iq-accordion career-style faq-style  ">

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!--cierra card-->
                        </div>
                        <!--cierra body card-->


                    </div>
                </div><!-- Cierra row -->
            </div><!-- Cierra container -->
    <!-- Footer -->
    <?php include '../../layouts/flooter.php' ?>
    <!-- Footer END -->

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

</body>

</html>