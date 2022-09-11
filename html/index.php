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
                        <span>XRay</span>
                        </a>
                     </div>
                  </div>
                  <nav class="navbar navbar-expand-lg navbar-light p-0">
                     <div class="iq-search-bar">
                        <form action="#" class="searchbox">
                           <h4>Usuario</h4>
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
                                 <h6 class="mb-0 line-height">Bini Jets</h6>
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
               
               <div class="col-12 text-center">
                        <div class="home-wrapper m-t-40">
                           
                            <h3 class="m-t-30">El sitio está en mantenimiento</h3>
                            <p>Vuelva a consultar en algún momento..</p>

                            <div class="row">
                                <div class="text-center col-md-4">
                                    <div class="card mt-4">
                                        <div class="card-body">
                                            <i class="mdi mdi-airplane-takeoff font-40 m-b-15"></i>
                                            <h6 class="text-uppercase">¿POR QUÉ ESTÁ CAÍDO EL SITIO?</h6>
                                            <p class="text-muted m-t-20">Hay muchas variaciones de pasajes de Lorem Ipsum disponibles, 
                                                pero la mayoría ha sufrido alteraciones..</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center col-md-4">
                                    <div class="card mt-4">
                                        <div class="card-body">
                                            <i class="mdi mdi-clock-alert font-40 m-b-15"></i>
                                            <h6 class="text-uppercase">
                                            ¿QUÉ ES EL TIEMPO DE INACTIVIDAD?</h6>
                                            <p class="text-muted m-t-20">Contrariamente a la creencia popular, Lorem Ipsum no es simplemente 
                                                un texto aleatorio. Tiene raíces en una pieza de música clásica.l.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center col-md-4">
                                    <div class="card mt-4">
                                        <div class="card-body">
                                            <i class="mdi mdi-email font-40 m-b-15"></i>
                                            <h6 class="text-uppercase">
                                            ¿NECESITA SOPORTE?</h6>
                                            <p class="text-muted m-t-20">Comuniquese atravez de.<br> <a
                                                        href="mailto:no-reply@domain.com"
                                                        class="text-decoration-underline">no-reply@zdrowie.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- termina pag mantenimiento -->
               </div><!-- Cierra row -->
            </div><!-- Cierra container -->
            <!-- Footer -->
            <?php include '../../layouts/flooter.php'?>
            <!-- Footer END -->

             

           
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