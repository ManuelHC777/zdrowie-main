<!--para iconos de menu-->
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>


<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="../../logica_redireccion/home/index.php">
            <img src="../../images/logo-zdrowie.png" class="img-fluid" alt="">
            <span>Zdrowie</span>
        </a>
        <div class="iq-menu-bt-sidebar">
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="ri-more-fill"></i></div>
                    <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li><a href="/zdrowie/html/logica_redireccion/home/index.php" class="iq-waves-effect"><i class="fi fi-rr-home"></i><span>Inicio</span></a></li>


                <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Menu</span></li>

            

           

                <li class="">
                    <a href="#citas" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="true"><i class="fi fi-rs-calendar"></i><span>Citas</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>

                    <ul id="citas" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class=""><a href="/zdrowie/html/logica_redireccion/cita/indexpaciente.php"><i class="fi fi-rr-calendar-clock"></i>Reservar Cita</a></li>
                        <li ><a href="/zdrowie/html/logica_redireccion/cita/indexcalendar.php"><i class="fi fi-rs-calendar"></i>Calendario</a></li>

                    </ul>
                </li>



                <li class="">
                    <a href="#paciente" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="true"><i
                            class="fi fi-rr-user"></i><span>Paciente</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="paciente" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="/zdrowie/html/logica_redireccion/paciente/index.php"><i class="fi fi-rr-add-document"></i>Aperturar Expediente</a></li>
                        <li><a href="/zdrowie/html/logica_redireccion/paciente/expedientes.php"><i class="fi fi-rr-list"></i>Listar Expedientes</a></li>
                    </ul>
                </li>


                <li>
                    <a href="#consulta" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="true"><i
                            class="fi fi-rr-doctor"></i><span>Consulta Medica</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="consulta" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href=""><i class="fi fi-ss-stethoscope"></i>Signos Vitales</a></li>
                        <li><a href="/zdrowie/html/logica_redireccion/consulta/index.php"><i class="fi fi-rr-edit"></i>Ejecutar Consulta</a></li>

                    </ul>
                </li>


                <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Finanzas</span></li>


                <li>
                    <a href="#cobro" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="true"><i
                            class="fi fi-rs-wallet"></i><span>Cobro</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="cobro" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="/zdrowie/html/logica_redireccion/cobro/servicio.php"><i
                                    class="fi fi-rr-plus"></i>Servicios</a></li>
                        <li><a href="/zdrowie/html/logica_redireccion/cobro/indexcobro.php"><i
                                    class="fi fi-rr-usd-square"></i>Cobro</a></li>


                    </ul>
                </li>


                <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Gestión Administrativa</span></li>


                <li>
                    <a href="#gestion" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="true"><i
                            class="fi fi-rr-users"></i><span>Empleado</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="gestion" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="/zdrowie/html/logica_redireccion/crud/pagina2.php"><i class="fi fi-rr-user-add"></i>Nuevo Empleado</a></li>

                    </ul>
                </li>
                 <li>
                    <a href="#autentificacion" class="iq-waves-effect collapsed" data-toggle="collapse"
                        aria-expanded="true"><i class="fi fi-rr-lock"></i><span>Autenticación</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="autentificacion" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="/zdrowie/html/logica_redireccion/crud/pagina.php"><i class="fi fi-rr-key"></i>Registro de Usuario</a></li>

                    </ul>
                </li>


                <li>
                    <a href="#reportes" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="true"><i
                            class="fi fi-rs-document"></i><span>Informes</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="reportes" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="/zdrowie/html/logica_redireccion/reportes/reportEmp.php"><i
                                    class="fi fi-rr-file"></i>Reporte de Empleados</a></li>
                                    <li><a href="/zdrowie/html/logica_redireccion/reportes/reportEmp.php"><i
                                    class="fi fi-rr-file"></i>Registros de Expedientes</a></li>

                    </ul>
                </li>


                <li>
                    <a href="#consultas" class="iq-waves-effect collapsed" data-toggle="collapse"
                        aria-expanded="true"><i class="fi fi-rr-search-alt"></i><span>Consultas</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="consultas" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="/zdrowie/html/logica_redireccion/consultas/c_emp.php"><i
                                    class="fi fi-rr-id-badge"></i>Consulta de Empleados</a></li>

                    </ul>
                </li>



                <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Soporte Técnico</span></li>


               

                <li>
                    <a href="#Seguridad" class="iq-waves-effect collapsed" data-toggle="collapse"
                        aria-expanded="true"><i class="fi fi-ss-time-past"></i><span>Seguridad</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="Seguridad" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href=""><i class="fi fi-rs-database"></i>Copia de Seguridad</a></li>

                    </ul>
                </li>


                <li>
                    <a href="#ayuda" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="true"> <i
                            class="fi fi-rr-comment-question"></i><span>Ayuda</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="ayuda" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href=""><i class="fi fi-rr-comment-question"></i>Servicio de ayuda</a></li>
                        <li><a href=""><i class="fi fi-rr-info"></i>Acerca de</a></li>

                    </ul>
                </li>




             



            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>






<!--<div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="index.html">
               <img src="../../images/logo.png" class="img-fluid" alt="">
               <span>Zdrowie</span>
               </a>
               <div class="iq-menu-bt-sidebar">
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-more-fill"></i></div>
                           <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Dashboard</span></li>
                     <li>
                        <a href="index.html" class="iq-waves-effect"><i class="ri-hospital-fill"></i><span>Doctor Dashboard</span></a>
                     </li>                     
                     <li>
                        <a href="dashboard-1.html" class="iq-waves-effect"><i class="ri-home-8-fill"></i><span>Hospital Dashboard 1 </span></a>
                     </li>
                     <li>
                        <a href="dashboard-2.html" class="iq-waves-effect"><i class="ri-briefcase-4-fill"></i><span>Hospital Dashboard 2</span></a>
                     </li>
                     <li>
                        <a href="dashboard-3.html" class="iq-waves-effect"><i class="ri-group-fill"></i><span>Patient Dashboard</span></a>
                     </li>
                     <li>
                        <a href="dashboard-4.html" class="iq-waves-effect"><i class="lab la-mendeley"></i><span>Covid-19 Dashboard</span><span class="badge badge-danger">New</span></a>
                     </li>
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Apps</span></li>
                     <li>
                        <a href="#mailbox" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-mail-open-fill"></i><span>Email</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="mailbox" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="../../app/index.html"><i class="ri-inbox-fill"></i>Inbox</a></li>
                           <li><a href="../../app/email-compose.html"><i class="ri-edit-2-fill"></i>Email Compose</a></li>
                        </ul>
                     </li>

                     
                     <li >
                        <a href="#doctor-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="true"><i class="ri-user-3-fill"></i><span>Doctors</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="doctor-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="../crud/pagina.php"><i class="ri-file-edit-fill"></i> CRUD</a></li>
                           <li><a href="doctor-list.html"><i class="ri-file-list-fill"></i>All Doctors</a></li>
                           <li><a href="add-doctor.html"><i class="ri-user-add-fill"></i> Add Doctor</a></li>
                           <li><a href="profile.html"><i class="ri-profile-fill"></i>Doctor Profile</a></li>
                           <li><a href="profile-edit.html"><i class="ri-file-edit-fill"></i> Edit Doctor</a></li>
                           <li><a href="../crud/pagina.php"><i class="ri-file-edit-fill"></i> CRUD</a></li>
                        </ul>
                     </li>
                     <li><a href="calendar.html" class="iq-waves-effect"><i class="ri-calendar-event-fill"></i><span>Calendar</span></a></li>
                    
                    <li><a href="chat.html" class="iq-waves-effect"><i class="ri-message-fill"></i><span>Chat</span></a></li>
                    
                     
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Components</span></li>
                     <li>
                        <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-apps-fill"></i><span>UI Elements</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="ui-colors.html"><i class="ri-font-color"></i>colors</a></li>
                           <li><a href="ui-typography.html"><i class="ri-text"></i>Typography</a></li>
                           <li><a href="ui-alerts.html"><i class="ri-alert-fill"></i>Alerts</a></li>
                           <li><a href="ui-badges.html"><i class="ri-building-3-fill"></i>Badges</a></li>
                           <li><a href="ui-breadcrumb.html"><i class="ri-guide-fill"></i>Breadcrumb</a></li>
                           <li><a href="ui-buttons.html"><i class="ri-checkbox-blank-fill"></i>Buttons</a></li>
                           <li><a href="ui-cards.html"><i class="ri-bank-card-fill"></i>Cards</a></li>
                           <li><a href="ui-carousel.html"><i class="ri-slideshow-4-fill"></i>Carousel</a></li>
                           <li><a href="ui-embed-video.html"><i class="ri-movie-fill"></i>Video</a></li>
                           <li><a href="ui-grid.html"><i class="ri-grid-fill"></i>Grid</a></li>
                           <li><a href="ui-images.html"><i class="ri-image-fill"></i>Images</a></li>
                           <li><a href="ui-list-group.html"><i class="ri-file-list-fill"></i>list Group</a></li>
                           <li><a href="ui-media-object.html"><i class="ri-camera-fill"></i>Media</a></li>
                           <li><a href="ui-modal.html"><i class="ri-checkbox-blank-fill"></i>Modal</a></li>
                           <li><a href="ui-notifications.html"><i class="ri-notification-3-fill"></i>Notifications</a></li>
                           <li><a href="ui-pagination.html"><i class="ri-more-fill"></i>Pagination</a></li>
                           <li><a href="ui-popovers.html"><i class="ri-folder-shield-fill"></i>Popovers</a></li>
                           <li><a href="ui-progressbars.html"><i class="ri-battery-low-fill"></i>Progressbars</a></li>
                           <li><a href="ui-tabs.html"><i class="ri-database-fill"></i>Tabs</a></li>
                           <li><a href="ui-tooltips.html"><i class="ri-record-mail-fill"></i>Tooltips</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-device-fill"></i><span>Forms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="form-layout.html"><i class="ri-tablet-fill"></i>Form Elements</a></li>
                           <li><a href="form-validation.html"><i class="ri-device-fill"></i>Form Validation</a></li>
                           <li><a href="form-switch.html"><i class="ri-toggle-fill"></i>Form Switch</a></li>
                           <li><a href="form-chechbox.html"><i class="ri-chat-check-fill"></i>Form Checkbox</a></li>
                           <li><a href="form-radio.html"><i class="ri-radio-button-fill"></i>Form Radio</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#forms-wizard" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-file-word-fill"></i><span>Forms Wizard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms-wizard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="form-wizard.html"><i class="ri-anticlockwise-fill"></i>Simple Wizard</a></li>
                           <li><a href="form-wizard-validate.html"><i class="ri-anticlockwise-2-fill"></i>Validate Wizard</a></li>
                           <li><a href="form-wizard-vertical.html"><i class="ri-clockwise-fill"></i>Vertical Wizard</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-table-fill"></i><span>Table</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="tables" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="tables-basic.html"><i class="ri-table-fill"></i>Basic Tables</a></li>
                           <li><a href="data-table.html"><i class="ri-table-2"></i>Data Table</a></li>
                           <li><a href="table-editable.html"><i class="ri-archive-drawer-fill"></i>Editable Table</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#charts" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-bar-chart-2-fill"></i><span>Charts</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="charts" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="chart-morris.html"><i class="ri-file-chart-fill"></i>Morris Chart</a></li>
                           <li><a href="chart-high.html"><i class="ri-bar-chart-fill"></i>High Charts</a></li>
                           <li><a href="chart-am.html"><i class="ri-bar-chart-box-fill"></i>Am Charts</a></li>
                           <li><a href="chart-apex.html"><i class="ri-pie-chart-box-fill"></i>Apex Chart</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#icons" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-copper-coin-fill"></i><span>Icons</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="icons" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="icon-dripicons.html"><i class="ri-stack-fill"></i>Dripicons</a></li>
                           <li><a href="icon-fontawesome-5.html"><i class="ri-facebook-fill"></i>Font Awesome 5</a></li>
                           <li><a href="icon-lineawesome.html"><i class="ri-keynote-fill"></i>line Awesome</a></li>
                           <li><a href="icon-remixicon.html"><i class="ri-remixicon-fill"></i>Remixicon</a></li>
                           <li><a href="icon-unicons.html"><i class="ri-underline"></i>unicons</a></li>
                        </ul>
                     </li>
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Pages</span></li>
                     <li>
                        <a href="#authentication" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-server-fill"></i><span>Authentication</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="authentication" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="sign-in.html"><i class="ri-login-box-fill"></i>Login</a></li>
                           <li><a href="sign-up.html"><i class="ri-logout-box-fill"></i>Register</a></li>
                           <li><a href="pages-recoverpw.html"><i class="ri-record-mail-fill"></i>Recover Password</a></li>
                           <li><a href="pages-confirm-mail.html"><i class="ri-chat-check-fill"></i>Confirm Mail</a></li>
                           <li><a href="pages-lock-screen.html"><i class="ri-file-lock-fill"></i>Lock Screen</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#map" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-map-pin-2-fill"></i><span>Maps</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="map" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="pages-map.html"><i class="ri-google-fill"></i>Google Map</a></li>
                           <li><a href="#"><i class="ri-map-pin-range-line"></i>Vector Map</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-folders-fill"></i><span>Extra Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="extra-pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="pages-timeline.html"><i class="ri-map-pin-time-fill"></i>Timeline</a></li>
                           <li><a href="pages-invoice.html"><i class="ri-question-answer-fill"></i>Invoice</a></li>
                           <li><a href="blank-page.html"><i class="ri-checkbox-blank-fill"></i>Blank Page</a></li>
                           <li><a href="pages-error.html"><i class="ri-error-warning-fill"></i>Error 404</a></li>
                           <li><a href="pages-error-500.html"><i class="ri-error-warning-fill"></i>Error 500</a></li>
                           <li><a href="pages-pricing.html"><i class="ri-price-tag-3-fill"></i>Pricing</a></li>
                           <li><a href="pages-pricing-one.html"><i class="ri-price-tag-2-fill"></i>Pricing 1</a></li>
                           <li><a href="pages-maintenance.html"><i class="ri-git-repository-commits-fill"></i>Maintenance</a></li>
                           <li><a href="pages-comingsoon.html"><i class="ri-run-fill"></i>Coming Soon</a></li>
                           <li><a href="pages-faq.html"><i class="ri-compasses-2-fill"></i>Faq</a></li>
                        </ul>
                     </li>
                    <li class="menu-level">
                        <a href="#menu-level-1" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line"></i><span>Menu Level</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-level-1" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 1</a></li>
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 2</a></li>
                           <li>
                              <a href="#submenu-2" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line"></i><span>Menu 3</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                              <ul id="submenu-2" class="iq-submenu collapse">
                                 <li><a href="#"><i class="ri-record-circle-line"></i>Menu 3.1</a></li>
                                 <li><a href="#"><i class="ri-record-circle-line"></i>Menu 3.2</a></li>
                                 <li><a href="#"><i class="ri-record-circle-line"></i>Menu 3.3</a></li>
                              </ul>
                           </li>
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 4</a></li>
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 5</a></li>
                        </ul>
                     </li>
                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>
         </div>-->