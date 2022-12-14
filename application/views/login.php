<!DOCTYPE html>

<!--
 * Criada em:12/02/2020
 *
 * Descricao:
 * Página direcionada para Login no Sistema Gálagas
 *
 * @author Philipe Anderson De Campos | http://www.phillinks.com.br
 * @copyright (c) 2020, Philipe Anderson | phillinks.com.br
-->

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
  <title>
    evol work remote
  </title>
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/black-dashboard" />
  <!--  Social tags      -->
  <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, black dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, black design, black dashboard bootstrap 4 dashboard">
  <meta name="description" content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Black Dashboard PRO by Creative Tim">
  <meta itemprop="description" content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
  <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/93/opt_bd_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Black Dashboard PRO by Creative Tim">
  <meta name="twitter:description" content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/93/opt_bd_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Black Dashboard PRO by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="http://demos.creative-tim.com/black-dashboard-pro/examples/dashboard.html" />
  <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/93/opt_bd_thumbnail.jpg" />
  <meta property="og:description" content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you." />
  <meta property="og:site_name" content="Creative Tim" />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <!--link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?= base_url()?>assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link href="<?= base_url() ?>assets/faw/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="<?= base_url()?>assets/css/black-dashboard.min.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url()?>assets/css/demo.css" rel="stylesheet" />
</head>

<body class="login-page">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent fixed-top">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <div class="navbar-toggle d-inline">
          <button type="button" class="navbar-toggler">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </button>
        </div>
        <a class="navbar-brand" href="javascript:void(0)">welcome to evol</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
      </button>
      <div class="collapse navbar-collapse" id="navigation">
<!--        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="../dashboard.html" class="nav-link text-primary">
              <i class="tim-icons icon-minimal-left"></i> Back to Dashboard
            </a>
          </li>
          <li class="nav-item ">
            <a href="register.html" class="nav-link">
              <i class="tim-icons icon-laptop"></i> Register
            </a>
          </li>
          <li class="nav-item ">
            <a href="login.html" class="nav-link">
              <i class="tim-icons icon-single-02"></i> Login
            </a>
          </li>
          <li class="nav-item  active ">
            <a href="pricing.html" class="nav-link">
              <i class="tim-icons icon-coins"></i> Pricing
            </a>
          </li>
          <li class="nav-item ">
            <a href="lock.html" class="nav-link">
              <i class="tim-icons icon-lock-circle"></i> Lock
            </a>
          </li>
        </ul>-->
      </div>
    </div>
  </nav>
  <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="tim-icons icon-simple-remove"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- End Navbar -->
  <div class="wrapper wrapper-full-page ">
    <div class="full-page login-page ">
      <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
      <div class="content">
        <div class="container">
          <div class="col-lg-4 col-md-6 ml-auto mr-auto">
           <form class="form" action="<?= base_url('Dashboard/logar') ?>" method="post">
              <!--<div class="card card-login card-white">-->
<!--                <div class="card-header">
                 <img src="<!?= base_url() ?>/assets/img/backLogin.png" alt="">
                  <h1 class="card-title"></h1>
                </div><br><br><br>-->
                <div class="card-body">
                <div class="logo">
                  <a href="#" class="simple-text logo-normal">
                  <img src="<?= base_url() ?>assets/img/phillinksDevelopers.png">
                  </a>
                  <br /><br /><br />
                </div>
                    <h2 style="color:#fff; text-align: center">eVoL <small style="color:#b33083">Login!</small></h2>
                    <small style="text-align:center;">&nbsp;ATENÇÃO! &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;&nbsp;&nbsp;Nunca compartilhe suas senhas!</small>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div style="margin-right: 7px; border-color:#5282b2; background-color:rgba(255,255,255,0.8)" class="input-group-text">
                        <i style="margin-right :20px; color:#000" class="fa fa-play-circle"></i>
                      </div>
                    </div>
                   <input style="border-color:#5282b2; background-color:transparent" type="text" name="loginUsuario" id="loginUsuario" class="form-control" placeholder="Email de Login" required="">
                  </div>
                  <div style="text-align:center" class="input-group">
                    <div class="input-group-prepend">
                      <div style="margin-right: 7px; border-color:#5282b2; background-color:rgba(255,255,255,0.8);" class="input-group-text">
                        <i style="margin-right :20px; color:#000" class="fa fa-key"></i>
                      </div>
                    </div>
                   <input style="border-color:#5282b2; background-color:transparent" type="password" name="senhaUsuario" id="senhaUsuario" class="form-control" placeholder="Sua Senha" required="">
                  </div>
                 <button type="submit" name="logar" id="logar" class="btn btn-primary btn-lg btn-block mb-3">Vamos Começar :)</button>
                </div>
              <!--</div>-->
            </form>
          </div>
        </div>
      </div>
<footer class="footer">
    <div class="container-fluid">
     <ul class="nav">
      <li class="nav-item">
       <a href="https://www.phillinks.com.br" class="nav-link" target="_blank">
        PHILLINKS
       </a>
      </li>
      <li class="nav-item">
       <a href="https://www.phillinks.com.br" class="nav-link" target="_blank">
        SOBRE NÓS
       </a>
      </li>
      <li class="nav-item">
       <a href="https://www.phillinks.com.br" class="nav-link" target="_blank">
        NOTÍCIAS
       </a>
      </li>
       <li class="nav-item">
       <a href="https://www.phillinks.com.br" class="nav-link" target="_blank">
        SERVIÇOS
       </a>
      </li>
     </ul>
     <div class="copyright">
      ©
      <script>
          document.write(new Date().getFullYear())
      </script> Elaborado e Criado por :
      <h4><a href="https://www.phillinks.com.br" target="_blank">PHILLINKS </a>| Sites & Softwares</h4>
      
     </div>
    </div>
   </footer>
    </div>
  </div>
 <!--   Core JS Files   -->
 <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
 <script src="<?= base_url() ?>assets/js/popper.js"></script>
 <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
 <script src="<?= base_url() ?>assets/js/perfect-scrollbar.jquery.min.js"></script>
 <script src="<?= base_url() ?>assets/js/moment.min.js"></script>
 <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
 <script src="<?= base_url() ?>assets/js/bootstrap-switch.js"></script>
 <!--  Plugin for Sweet Alert -->
 <script src="<?= base_url() ?>assets/js/sweetalert2.min.js"></script>
 <!--  Plugin for Sorting Tables -->
 <script src="<?= base_url() ?>assets/js/jquery.tablesorter.js"></script>
 <!-- Forms Validations Plugin -->
 <script src="<?= base_url() ?>assets/js/jquery.validate.min.js"></script>
 <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
 <script src="<?= base_url() ?>assets/js/jquery.bootstrap-wizard.js"></script>
 <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
 <script src="<?= base_url() ?>assets/js/bootstrap-selectpicker.js"></script>
 <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
 <script src="<?= base_url() ?>assets/js/bootstrap-datetimepicker.js"></script>
 <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
 <script src="<?= base_url() ?>assets/js/jquery.dataTables.min.js"></script>
 <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
 <script src="<?= base_url() ?>assets/js/bootstrap-tagsinput.js"></script>
 <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
 <script src="<?= base_url() ?>assets/js/jasny-bootstrap.min.js"></script>
 <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
 <script src="<?= base_url() ?>assets/js/fullcalendar.min.js"></script>
 <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
 <script src="<?= base_url() ?>assets/js/jquery-jvectormap.js"></script>
 <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
 <script src="<?= base_url() ?>assets/js/nouislider.min.js"></script>
 <!--  Google Maps Plugin    -->
 <!-- Place this tag in your head or just before your close body tag. -->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGat1sgDZ-3y6fFe6HD7QUziVC6jlJNog"></script>
 <!-- Chart JS -->
 <script src="<?= base_url() ?>assets/js/chart.js"></script>
 <!--  Notifications Plugin    -->
 <script src="<?= base_url() ?>assets/js/bootstrap-notify.js"></script>
 <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
 <script src="<?= base_url() ?>assets/js/black-dashboard.min.js"></script>
 <!-- Black Dashboard DEMO methods, don't include it in your project! -->
 <script src="<?= base_url() ?>assets/js/demo.js"></script>
 <!-- Sharrre libray -->
 <script src="<?= base_url() ?>assets/js/jquery.sharrre.js"></script>
 <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=UA-46172202-12"></script>
 <script>
          window.dataLayer = window.dataLayer || [];

          function gtag() {
              dataLayer.push(arguments);
          }
          gtag('js', new Date());

          gtag('config', 'UA-46172202-12');
 </script>
 <script>
     $(document).ready(function () {


         $('#facebook').sharrre({
             share: {
                 facebook: true
             },
             enableHover: false,
             enableTracking: false,
             enableCounter: false,
             click: function (api, options) {
                 api.simulateClick();
                 api.openPopup('facebook');
             },
             template: '<i class="fab fa-facebook-f"></i> Facebook',
             url: 'https://demos.creative-tim.com/black-dashboard-pro/examples/dashboard.html'
         });

         $('#google').sharrre({
             share: {
                 googlePlus: true
             },
             enableCounter: false,
             enableHover: false,
             enableTracking: true,
             click: function (api, options) {
                 api.simulateClick();
                 api.openPopup('googlePlus');
             },
             template: '<i class="fab fa-google-plus"></i> Google',
             url: 'https://demos.creative-tim.com/black-dashboard-pro/examples/dashboard.html'
         });

         $('#twitter').sharrre({
             share: {
                 twitter: true
             },
             enableHover: false,
             enableTracking: false,
             enableCounter: false,
             buttons: {
                 twitter: {
                     via: 'CreativeTim'
                 }
             },
             click: function (api, options) {
                 api.simulateClick();
                 api.openPopup('twitter');
             },
             template: '<i class="fab fa-twitter"></i> Twitter',
             url: 'https://demos.creative-tim.com/black-dashboard-pro/examples/dashboard.html'
         });



         // Facebook Pixel Code Don't Delete
         !function (f, b, e, v, n, t, s) {
             if (f.fbq)
                 return;
             n = f.fbq = function () {
                 n.callMethod ?
                         n.callMethod.apply(n, arguments) : n.queue.push(arguments)
             };
             if (!f._fbq)
                 f._fbq = n;
             n.push = n;
             n.loaded = !0;
             n.version = '2.0';
             n.queue = [];
             t = b.createElement(e);
             t.async = !0;
             t.src = v;
             s = b.getElementsByTagName(e)[0];
             s.parentNode.insertBefore(t, s)
         }(window,
                 document, 'script', '//connect.facebook.net/en_US/fbevents.js');

         try {
             fbq('init', '111649226022273');
             fbq('track', "PageView");

         } catch (err) {
             console.log('Facebook Track Error:', err);
         }






     });
 </script>
 <noscript>
 <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
 </noscript>
 <script>
     $(document).ready(function () {
         $().ready(function () {
             $sidebar = $('.sidebar');
             $navbar = $('.navbar');
             $main_panel = $('.main-panel');

             $full_page = $('.full-page');

             $sidebar_responsive = $('body > .navbar-collapse');
             sidebar_mini_active = true;
             white_color = false;

             window_width = $(window).width();

             fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



             $('.fixed-plugin a').click(function (event) {
                 if ($(this).hasClass('switch-trigger')) {
                     if (event.stopPropagation) {
                         event.stopPropagation();
                     } else if (window.event) {
                         window.event.cancelBubble = true;
                     }
                 }
             });

             $('.fixed-plugin .background-color span').click(function () {
                 $(this).siblings().removeClass('active');
                 $(this).addClass('active');

                 var new_color = $(this).data('color');

                 if ($sidebar.length != 0) {
                     $sidebar.attr('data', new_color);
                 }

                 if ($main_panel.length != 0) {
                     $main_panel.attr('data', new_color);
                 }

                 if ($full_page.length != 0) {
                     $full_page.attr('filter-color', new_color);
                 }

                 if ($sidebar_responsive.length != 0) {
                     $sidebar_responsive.attr('data', new_color);
                 }
             });

             $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function () {
                 var $btn = $(this);

                 if (sidebar_mini_active == true) {
                     $('body').removeClass('sidebar-mini');
                     sidebar_mini_active = false;
                     blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                 } else {
                     $('body').addClass('sidebar-mini');
                     sidebar_mini_active = true;
                     blackDashboard.showSidebarMessage('Sidebar mini activated...');
                 }

                 // we simulate the window Resize so the charts will get updated in realtime.
                 var simulateWindowResize = setInterval(function () {
                     window.dispatchEvent(new Event('resize'));
                 }, 180);

                 // we stop the simulation of Window Resize after the animations are completed
                 setTimeout(function () {
                     clearInterval(simulateWindowResize);
                 }, 1000);
             });

             $('.switch-change-color input').on("switchChange.bootstrapSwitch", function () {
                 var $btn = $(this);

                 if (white_color == true) {

                     $('body').addClass('change-background');
                     setTimeout(function () {
                         $('body').removeClass('change-background');
                         $('body').removeClass('white-content');
                     }, 900);
                     white_color = false;
                 } else {

                     $('body').addClass('change-background');
                     setTimeout(function () {
                         $('body').removeClass('change-background');
                         $('body').addClass('white-content');
                     }, 900);

                     white_color = true;
                 }


             });

             $('.light-badge').click(function () {
                 $('body').addClass('white-content');
             });

             $('.dark-badge').click(function () {
                 $('body').removeClass('white-content');
             });
         });
     });
 </script>
 <script>
     $(document).ready(function () {
         // Javascript method's body can be found in assets/js/demos.js
         demo.initDashboardPageCharts();

         demo.initVectorMap();

     });
 </script>
</body>
</html>