<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
  <title>Digital Training Centre</title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />

  <!-- ================== BEGIN BASE CSS STYLE ================== -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <link href="assets/css/animate.min.css" rel="stylesheet" />
  <link href="assets/css/style.min.css" rel="stylesheet" />
  <link href="assets/css/style-responsive.min.css" rel="stylesheet" />
  <link href="assets/css/theme/default.css" rel="stylesheet" id="theme" />
  <!-- ================== END BASE CSS STYLE ================== -->
  <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
  <link href="assets/plugins/bootstrap-wizard/css/bwizard.min.css" rel="stylesheet" />
  <!-- ================== END PAGE LEVEL STYLE ================== -->
  <!-- ================== BEGIN BASE JS ================== -->
  <script src="assets/plugins/pace/pace.min.js"></script>
  <!-- ================== END BASE JS ================== -->
</head>

<body>

  <!-- begin #page-container -->
  <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
    <!-- begin #header -->
    <div id="header" class="header navbar navbar-default navbar-fixed-top">
      <!-- begin container-fluid -->
      <div class="container-fluid">
        <!-- begin mobile sidebar expand / collapse button -->
        <div class="navbar-header">
          <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> Color Admin</a>
          <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- end mobile sidebar expand / collapse button -->

        <!-- begin header navigation right -->
        <ul class="nav navbar-nav navbar-right">
          <li>
            <form class="navbar-form full-width">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter keyword" />
                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
              </div>
            </form>
          </li>
          <li class="dropdown">
            <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
              <i class="fa fa-bell-o"></i>
              <span class="label">5</span>
            </a>
            <ul class="dropdown-menu media-list pull-right animated fadeInDown">
              <li class="dropdown-header">Notifications (5)</li>
              <li class="media">
                <a href="javascript:;">
                  <div class="media-left"><i class="fa fa-bug media-object bg-red"></i></div>
                  <div class="media-body">
                    <h6 class="media-heading">Server Error Reports</h6>
                    <div class="text-muted f-s-11">3 minutes ago</div>
                  </div>
                </a>
              </li>
              <li class="media">
                <a href="javascript:;">
                  <div class="media-left"><img src="assets/img/user-1.jpg" class="media-object" alt="" /></div>
                  <div class="media-body">
                    <h6 class="media-heading">John Smith</h6>
                    <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                    <div class="text-muted f-s-11">25 minutes ago</div>
                  </div>
                </a>
              </li>
              <li class="media">
                <a href="javascript:;">
                  <div class="media-left"><img src="assets/img/user-2.jpg" class="media-object" alt="" /></div>
                  <div class="media-body">
                    <h6 class="media-heading">Olivia</h6>
                    <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                    <div class="text-muted f-s-11">35 minutes ago</div>
                  </div>
                </a>
              </li>
              <li class="media">
                <a href="javascript:;">
                  <div class="media-left"><i class="fa fa-plus media-object bg-green"></i></div>
                  <div class="media-body">
                    <h6 class="media-heading"> New User Registered</h6>
                    <div class="text-muted f-s-11">1 hour ago</div>
                  </div>
                </a>
              </li>
              <li class="media">
                <a href="javascript:;">
                  <div class="media-left"><i class="fa fa-envelope media-object bg-blue"></i></div>
                  <div class="media-body">
                    <h6 class="media-heading"> New Email From John</h6>
                    <div class="text-muted f-s-11">2 hour ago</div>
                  </div>
                </a>
              </li>
              <li class="dropdown-footer text-center">
                <a href="javascript:;">View more</a>
              </li>
            </ul>
          </li>
          <li class="dropdown navbar-user">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
              <img src="assets/img/user-13.jpg" alt="" />
              <span class="hidden-xs">Adam Schwartz</span> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu animated fadeInLeft">
              <li class="arrow"></li>
              <li><a href="javascript:;">Edit Profile</a></li>
              <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
              <li><a href="javascript:;">Calendar</a></li>
              <li><a href="javascript:;">Setting</a></li>
              <li class="divider"></li>
              <li><a href="javascript:;">Log Out</a></li>
            </ul>
          </li>
        </ul>
        <!-- end header navigation right -->
      </div>
      <!-- end container-fluid -->
    </div>
    <!-- end #header -->

    <?php
    include 'menu.php';
    include 'content.php';
    ?>


  </div>
  <!-- end page container -->
  <!-- ================== BEGIN BASE JS ================== -->
  <script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
  <script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
  <script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <!-- ================== END PAGE LEVEL JS ================== -->
  <script src="assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
  <script src="assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
  <script src="assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
  <script src="assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
  <script src="assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
  <script src="assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js"></script>
  <!-- <script src="assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js"></script> -->
  <script src="assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js"></script>
  <script src="assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js"></script>
  <script src="assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js"></script>
  <script src="assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
  <!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
  <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
  <script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
  <!-- ================== END BASE JS ================== -->

  <!-- ================== BEGIN PAGE LEVEL JS ================== -->
  <!-- ================== BEGIN PAGE LEVEL JS ================== -->
  <script src="assets/plugins/bootstrap-wizard/js/bwizard.js"></script>
  <script src="assets/js/form-wizards.demo.min.js"></script>
  <script src="assets/js/apps.min.js"></script>
  <!-- ================== END PAGE LEVEL JS ================== -->

  <script>
    $(document).ready(function() {
      App.init();
      TableManageButtons.init();
      FormWizard.init();
    });
  </script>
  <script>
    (function(i, s, o, g, r, a, m) {
      $.fn.dataTableExt.sErrMode = 'throw';
      // window['GoogleAnalyticsObject'] = 'ga';
      window['ga'] = window['ga'] || function() {
        (window['ga'].q = window['ga'].q || []).push(arguments)
      }, window['ga'].l = 1 * new Date();
      a = document.createElement('script'),
        m = document.getElementsByTagName('script')[0];
      a.async = 1;
      a.src = '//www.google-analytics.com/analytics.js';
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-53034621-1', 'auto');
    ga('create', 'UA-xxxxxxxx-x', 'xxxxxx.com');
    ga('send', 'pageview');
  </script>
</body>

</html>