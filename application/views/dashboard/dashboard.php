<!doctype html>
<html lang="mn">
  
<!-- Mirrored from dashkit.goodthemes.co/dashboard-alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 08:32:28 GMT -->
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

  <!-- Libs JS -->
  <script src="//cdn.ckeditor.com/4.11.1/full/ckeditor.js"></script>

  <!-- Theme CSS -->
    
  <link rel="stylesheet" href="assets/admin/css/theme.min.css" id="stylesheetLight">

  <link rel="stylesheet" href="assets/admin/css/theme-dark.min.css" id="stylesheetDark">

  <style>body { display: none; }</style>
  

  <title>TaskLib</title>
</head>
  <body>

    <!-- MODALS
    ================================================== -->

    <!-- NAVIGATION
    ================================================== -->
    
    <?php require_once(APPPATH . 'views/dashboard/nav-side.php'); ?>   

    <!-- MAIN CONTENT
    ================================================== -->
  <div class="main-content">

    <!-- HEADER -->
    <div class="header">
      <div class="container-fluid">

        <!-- Body -->
        <div class="header-body">
          <div class="row align-items-end">
            <div class="col">
              
              <!-- Pretitle -->
              <h6 class="header-pretitle">
                Overview
              </h6>

              <!-- Title -->
              <h1 class="header-title">
                Удирдлагын самбар
              </h1>

            </div>
        
          </div> <!-- / .row -->
        </div> <!-- / .header-body -->

      </div>
    </div> <!-- / .header -->
    
    <!-- CARDS -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-lg-6 col-xl">
          
          <!-- Card -->
          <div class="card">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">

                  <!-- Title -->
                  <h6 class="card-title text-uppercase text-muted mb-2">
                    Математик
                  </h6>
                  
                  <!-- Heading -->
                  <span class="h2 mb-0">
                    $24,500
                  </span>

                  <!-- Badge -->
                  <span class="badge badge-soft-success mt--1">
                    +3.5%
                  </span>

                </div>
                <div class="col-auto">
                  
                  <!-- Icon -->
                  <span class="h2 fe fe-dollar-sign text-muted mb-0"></span>

                </div>
              </div> <!-- / .row -->

            </div>
          </div>

        </div>
        <div class="col-12 col-lg-6 col-xl">
          
          <!-- Card -->
          <div class="card">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">

                  <!-- Title -->
                  <h6 class="card-title text-uppercase text-muted mb-2">
                    Физик
                  </h6>
                  
                  <!-- Heading -->
                  <span class="h2 mb-0">
                    763.5
                  </span>

                </div>
                <div class="col-auto">
                  
                  <!-- Icon -->
                  <span class="h2 fe fe-briefcase text-muted mb-0"></span>

                </div>
              </div> <!-- / .row -->

            </div>
          </div>
            
        </div>
        <div class="col-12 col-lg-6 col-xl">
          
          <!-- Card -->
          <div class="card">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">

                  <!-- Title -->
                  <h6 class="card-title text-uppercase text-muted mb-2">
                    Хими
                  </h6>

                  <div class="row align-items-center no-gutters">
                    <div class="col-auto">

                      <!-- Heading -->
                      <span class="h2 mr-2 mb-0">
                        84.5%
                      </span>
                      
                    </div>
                    <div class="col">
                      
                      <!-- Progress -->
                      <div class="progress progress-sm">
                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                    </div>
                  </div> <!-- / .row -->

                </div>
                <div class="col-auto">
                  
                  <!-- Icon -->
                  <span class="h2 fe fe-clipboard text-muted mb-0"></span>

                </div>
              </div> <!-- / .row -->

            </div>
          </div>
            
        </div>
        <div class="col-12 col-lg-6 col-xl">
          
          <!-- Card -->
          <div class="card">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">

                  <!-- Title -->
                  <h6 class="card-title text-uppercase text-muted mb-2">
                    Хандалт
                  </h6>
                  
                  <!-- Heading -->
                  <span class="h2 mb-0">
                    $85.50
                  </span>

                </div>
                <div class="col-auto">
                  
                  <!-- Icon -->
                  <span class="h2 fe fe-clock text-muted mb-0"></span>

                </div>
              </div> <!-- / .row -->

            </div>
          </div>
            
        </div>
      </div> <!-- / .row -->

      <!-- / .row -->

      <!-- FORMS -->
  
      <!-- Performance -->
      <div class="row">
        <div class="col-12 col-xl-12">
          
          <!-- Performance -->
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">
              
                  <!-- Title -->
                  <h4 class="card-header-title">
                    Performance
                  </h4>

                </div>
                <div class="col-auto">

                  <!-- Nav -->
                  <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                    <li class="nav-item" data-toggle="chart" data-target="#performanceChart" data-update='{"data":{"datasets":[{"data":[0,10,5,15,10,20,15,25,20,30,25,40]}]}}'>
                      <a class="nav-link active" href="#" data-toggle="tab">
                        All
                      </a>
                    </li>
                    <li class="nav-item" data-toggle="chart" data-target="#performanceChart" data-update='{"data":{"datasets":[{"data":[7,35,12,27,34,17,19,30,28,32,24,39]}]}}'>
                      <a class="nav-link" href="#" data-toggle="tab">
                        Direct
                      </a>
                    </li>
                    <li class="nav-item" data-toggle="chart" data-target="#performanceChart" data-update='{"data":{"datasets":[{"data":[2,12,35,25,36,25,34,16,4,14,15,37]}]}}'>
                      <a class="nav-link" href="#" data-toggle="tab">
                        Organic
                      </a>
                    </li>
                  </ul>

                </div>
              </div> <!-- / .row -->

            </div>
            <div class="card-body">
              
              <!-- Chart -->
              <div class="chart">
                <canvas id="performanceChart" class="chart-canvas"></canvas>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>

  </div> <!-- / .main-content -->

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
    <script>
      $(document).ready(function(){
          var wrapper = $("#answers");
          var x = 1;
          var y = 3;
          $("#addbutton").click(function(e){
              e.preventDefault();
              if (x < 5 ) {
                  x++;
                $(wrapper).append('<div class="form-group"><textarea name="answers[]" id="editor'+y+'" rows="5" cols="80">Хариултыг энд оруулна уу...</textarea></div>');
                CKEDITOR.replace( 'editor' + y);
                y++;
              } else 
              {
                alert('Hello! :)');
              }
          });
      });
    </script>

  </body>

<!-- Mirrored from dashkit.goodthemes.co/dashboard-alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 08:34:10 GMT -->
</html>