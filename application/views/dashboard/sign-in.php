
<!doctype html>
<html lang="en">
  
<!-- Mirrored from dashkit.goodthemes.co/sign-in-illustration.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 08:37:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="assets/admin/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="assets/admin/libs/highlight.js/styles/vs2015.css">
    <link rel="stylesheet" href="assets/admin/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="assets/admin/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="assets/admin/libs/flatpickr/dist/flatpickr.min.css">

    <!-- Theme CSS -->
      
    <link rel="stylesheet" href="assets/admin/css/theme.min.css" id="stylesheetLight">

    <link rel="stylesheet" href="assets/admin/css/theme-dark.min.css" id="stylesheetDark">

    <style>body { display: none; }</style>
    

    <title>Dashkit</title>
  </head>
  <body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">

    <!-- CONTENT
    ================================================== -->
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 offset-xl-2 offset-md-1 order-md-2 mb-5 mb-md-0">

          <!-- Image -->
          <div class="text-center">
            <img src="assets/admin/img/illustrations/happiness.svg" alt="..." class="img-fluid">
          </div>

        </div>
        <div class="col-12 col-md-5 col-xl-4 order-md-1 my-5">
          
          <!-- Heading -->
          <h1 class="display-4 text-center mb-3">
            Sign in
          </h1>
          
          <!-- Subheading -->
          <p class="text-muted text-center mb-5">
            Free access to our dashboard.
          </p>
          
          <!-- Form -->
        <?php echo validation_errors(); ?>
        <?php echo form_open('signin/signin'); ?>

            <!-- Email address -->
            <div class="form-group">

              <!-- Label -->
              <label>Username</label>

              <!-- Input -->
              <input type="text" name="username" class="form-control" placeholder="Username">

            </div>

            <!-- Password -->
            <div class="form-group">

              <div class="row">
                <div class="col">
                      
                  <!-- Label -->
                  <label>Password</label>

                </div>
                <div class="col-auto">
                  
                  <!-- Help text -->
                  <a href="password-reset-illustration.html" class="form-text small text-muted">
                    Forgot password?
                  </a>

                </div>
              </div> <!-- / .row -->

              <!-- Input group -->
              <div class="input-group input-group-merge">

                <!-- Input -->
                <input type="password" class="form-control form-control-appended" name="password" placeholder="Enter your password">

                <!-- Icon -->
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fe fe-eye"></i>
                  </span>
                </div>

              </div>
            </div>

            <!-- Submit -->
            <button class="btn btn-lg btn-block btn-primary mb-3">
              Sign in
            </button>

            <!-- Link -->
            <div class="text-center">
              <small class="text-muted text-center">
                Don't have an account yet? <a href="sign-up-illustration.html">Sign up</a>.
              </small>
            </div>
            
          </form>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="assets/admin/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/admin/libs/chart.js/dist/Chart.min.js"></script>
    <script src="assets/admin/libs/chart.js/Chart.extension.min.js"></script>
    <script src="assets/admin/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="assets/admin/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="assets/admin/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="assets/admin/libs/list.js/dist/list.min.js"></script>
    <script src="assets/admin/libs/quill/dist/quill.min.js"></script>
    <script src="assets/admin/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="assets/admin/libs/select2/dist/js/select2.min.js"></script>

    <!-- Theme JS -->
    <script src="assets/admin/js/theme.min.js"></script>

  </body>

<!-- Mirrored from dashkit.goodthemes.co/sign-in-illustration.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 08:37:30 GMT -->
</html>