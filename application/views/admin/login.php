
<!DOCTYPE html>
<html>

<!-- Mirrored from webapplayers.com/homer_admin-v2.0/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Jan 2019 10:18:32 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>ESH.MN | Нэвтрэх</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    <link rel="stylesheet" href="assets/adminv2/vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/adminv2/vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="assets/adminv2/vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="assets/adminv2/vendor/bootstrap/dist/css/bootstrap.css" />

    <!-- App styles -->
    <link rel="stylesheet" href="assets/adminv2/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="assets/adminv2/fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="assets/adminv2/styles/style.css">

</head>
<body class="blank">

<!-- Simple splash screen-->
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>Homer - Responsive Admin Theme</h1><p>Special Admin Theme for small and medium webapp with very clean and aesthetic style and feel. </p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="color-line"></div>

<!-- <div class="back-link">
    <a href="index.html" class="btn btn-primary">Back to Dashboard</a>
</div> -->

<div class="login-container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center m-b-md">
                <h3>Нэвтрэх</h3>
                <small>Удирдлагын системд нэвтрэх</small>
            </div>
            <div class="hpanel">
                <div class="panel-body">
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('signin/signin'); ?>
                            <div class="form-group">
                                <label class="control-label" for="username">Нэвтрэх нэр</label>
                                <input type="text" placeholder="Admin" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                         <!--        <span class="help-block small">Your unique username to app</span> -->
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Нууц үг</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                               <!--  <span class="help-block small">Yur strong password</span> -->
                            </div>
                            <!-- <div class="checkbox">
                                <input type="checkbox" class="i-checks" checked>
                                     Remember login
                                <p class="help-block small">(if this is a private computer)</p>
                            </div> -->
                            <button class="btn btn-success btn-block">Нэвтрэх</button>
                            <a class="btn btn-default btn-block" href="#">Бүртгүүлэх</a>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <strong>ESH.MN</strong> - Математик, Физик, Хими <br/> бодлогын сан
        </div>
    </div>
</div>


<!-- Vendor scripts -->
<script src="assets/adminv2/vendor/jquery/dist/jquery.min.js"></script>
<script src="assets/adminv2/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/adminv2/vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="assets/adminv2/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/adminv2/vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="assets/adminv2/vendor/iCheck/icheck.min.js"></script>
<script src="assets/adminv2/vendor/sparkline/index.js"></script>

<!-- App scripts -->
<script src="assets/adminv2/scripts/homer.js"></script>

</body>

<!-- Mirrored from webapplayers.com/homer_admin-v2.0/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Jan 2019 10:18:32 GMT -->
</html>