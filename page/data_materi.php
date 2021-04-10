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
<!-- begin #content -->
<div id="content" class="content">
  <!-- begin breadcrumb -->
  <ol class="breadcrumb pull-right">
    <li><a href="javascript:;">Home</a></li>
    <li><a href="javascript:;">Form Stuff</a></li>
    <li class="active">Wizards</li>
  </ol>
  <!-- end breadcrumb -->
  <!-- begin page-header -->
  <h1 class="page-header">Wizards <small>header small text goes here...</small></h1>
  <!-- end page-header -->

  <!-- begin row -->
  <div class="row">
    <!-- begin col-12 -->
    <div class="col-md-12">
      <!-- begin panel -->
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
          </div>
          <h4 class="panel-title">Form Wizards</h4>
        </div>
        <div class="panel-body">
          <form action="/" method="POST">
            <div id="wizard">
              <ol>
                <li>
                  Identification
                  <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
                </li>
                <li>
                  Contact Information
                  <small>Aliquam bibendum felis id purus ullamcorper, quis luctus leo sollicitudin.</small>
                </li>
                <li>
                  Login
                  <small>Phasellus lacinia placerat neque pretium condimentum.</small>
                </li>
                <li>
                  Completed
                  <small>Sed nunc neque, dapibus non leo sed, rhoncus dignissim elit.</small>
                </li>
              </ol>
              <!-- begin wizard step-1 -->
              <div>
                <fieldset>
                  <legend class="pull-left width-full">Identification</legend>
                  <!-- begin row -->
                  <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="firstname" placeholder="John" class="form-control" />
                      </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Middle Initial</label>
                        <input type="text" name="middle" placeholder="A" class="form-control" />
                      </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="lastname" placeholder="Smith" class="form-control" />
                      </div>
                    </div>
                    <!-- end col-4 -->
                  </div>
                  <!-- end row -->
                </fieldset>
              </div>
              <!-- end wizard step-1 -->
              <!-- begin wizard step-2 -->
              <div>
                <fieldset>
                  <legend class="pull-left width-full">Contact Information</legend>
                  <!-- begin row -->
                  <div class="row">
                    <!-- begin col-6 -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" name="phone" placeholder="123-456-7890" class="form-control" />
                      </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" name="email" placeholder="someone@example.com" class="form-control" />
                      </div>
                    </div>
                    <!-- end col-6 -->
                  </div>
                  <!-- end row -->
                </fieldset>
              </div>
              <!-- end wizard step-2 -->
              <!-- begin wizard step-3 -->
              <div>
                <fieldset>
                  <legend class="pull-left width-full">Login</legend>
                  <!-- begin row -->
                  <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Username</label>
                        <div class="controls">
                          <input type="text" name="username" placeholder="johnsmithy" class="form-control" />
                        </div>
                      </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Pasword</label>
                        <div class="controls">
                          <input type="password" name="password" placeholder="Your password" class="form-control" />
                        </div>
                      </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Confirm Pasword</label>
                        <div class="controls">
                          <input type="password" name="password2" placeholder="Confirmed password" class="form-control" />
                        </div>
                      </div>
                    </div>
                    <!-- end col-6 -->
                  </div>
                  <!-- end row -->
                </fieldset>
              </div>
              <!-- end wizard step-3 -->
              <!-- begin wizard step-4 -->
              <div>
                <div class="jumbotron m-b-0 text-center">
                  <h1>Login Successfully</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat commodo porttitor. Vivamus eleifend, arcu in tincidunt semper, lorem odio molestie lacus, sed malesuada est lacus ac ligula. Aliquam bibendum felis id purus ullamcorper, quis luctus leo sollicitudin. </p>
                  <p><a class="btn btn-success btn-lg" role="button">Proceed to User Profile</a></p>
                </div>
              </div>
              <!-- end wizard step-4 -->
            </div>
          </form>
        </div>
      </div>
      <!-- end panel -->
    </div>
    <!-- end col-12 -->
  </div>
  <!-- end row -->
</div>
<!-- end #content -->
<script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
<script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
<script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="assets/plugins/bootstrap-wizard/js/bwizard.js"></script>
<script src="assets/js/form-wizards.demo.min.js"></script>
<script src="assets/js/apps.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
  $(document).ready(function() {
    App.init();
    FormWizard.init();
  });
</script>
<script>
  (function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-53034621-1', 'auto');
  ga('send', 'pageview');
</script>