<?php include '../../layouts/header.php';
$login=isset($_GET['login']) ? $_GET['login'] : '';
?>
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
             <!-- Sign in Start -->
        <section class="sign-in-page">
            <div class="container sign-in-page-bg mt-5 p-0">
                <div class="row no-gutters">
                    <div class="col-md-6 text-center">
                        <div class="sign-in-detail text-white">
                            <a class="sign-in-logo mb-5" href="#"><img src="../../../html/images/logout.png" class="img-fluid" alt="logo"></a>
                            <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                               
                                <div class="item">
                                    <img src="../../../html/images/login/2.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Gestiona tu información</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="sign-in-from">
                            <h1 class="mb-0">Iniciar Sesión</h1>
                            <p>Ingrese su correo/usuario y contraseña para accesar al sistema.</p>
                            <form class="mt-4" method="post" action="../../../despachadores/usuario.php?accion=login">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Correo electronico o usuario</label>
                                    <input type="text" class="form-control mb-0" id="exampleInputEmail1" name="exampleInputEmail1" placeholder="Ingrese su correo/usuario">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Contraseña</label>
                                    <a href="#" class="float-right">Olvidaste tu contraseña?</a>
                                    <input type="password" class="form-control mb-0" id="exampleInputPassword1" name="exampleInputPassword1" placeholder="Contraseña">
                                </div>
                                <div class="d-inline-block w-100">
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Recuerdame</label>
                                        <p>
                                        <?php
                                        if(strcmp($login,'error')==0)
                                            echo " <label class='alert-danger'>Los datos no son correctos, verfique.</label>";
                                        ?>
                                        </p>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Ingresar</button>

                                </div>

                                <div class="sign-info">


                                    <!--  -->
                                    
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sign in END -->
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
