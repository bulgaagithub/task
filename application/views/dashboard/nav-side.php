  <!-- MODALS
    ================================================== -->
    
    <!-- Modal: Demo -->
    <div class="modal fade fixed-right" id="modalDemo" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <form class="modal-content" id="demoForm">
          <div class="modal-body">
        
            <!-- Close -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

            <div class="text-center">
              <img src="assets/admin/img/illustrations/designer-life.svg" alt="..." class="img-fluid mb-3">
            </div>

            <h2 class="text-center mb-2">
              Make Dashkit Your Own
            </h2>

            <p class="text-center mb-4">
              Set preferences that will be cookied for your live preview demonstration.
            </p>

            <hr class="mb-4">

            <h4 class="mb-1">
              Color Scheme
            </h4>

            <p class="small text-muted mb-3">
              Overall light or dark presentation.
            </p>

            <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
              <label class="btn btn-white active col">
                <input type="radio" name="colorScheme" id="colorSchemeLight" value="light" checked> <i class="fe fe-sun mr-2"></i> Light Mode
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="colorScheme" id="colorSchemeDark" value="dark"> <i class="fe fe-moon mr-2"></i> Dark Mode
              </label>
            </div>

            <h4 class="mb-1">
              Navigation Position
            </h4>

            <p class="small text-muted mb-3">
              Select the primary navigation paradigm for your app.
            </p>

            <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
              <label class="btn btn-white active col">
                <input type="radio" name="navPosition" id="navPositionSidenav" value="sidenav" checked> Sidenav
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="navPosition" id="navPositionTopnav" value="topnav"> Topnav
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="navPosition" id="navPositionCombo" value="combo"> Combo
              </label>
            </div>

            <h4 class="mb-1">
              Sidebar Color
            </h4>

            <p class="small text-muted mb-3">
              Usually dictated by the color scheme, but can be overriden. 
            </p>

            <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
              <label class="btn btn-white active col">
                <input type="radio" name="sidebarColor" id="sidebarColorDefault" value="default" checked> Default
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="sidebarColor" id="sidebarColorVibrant" value="vibrant"> Vibrant
              </label>
            </div>
      
          </div>
          <div class="modal-footer border-0">
        
            <button type="submit" class="btn btn-block btn-primary mt-auto">
              Өөрчлөлтийг харах
            </button>

          </div>
        </form>
      </div>
    </div>
    
    <!-- Modal: Members -->

    <!-- Modal: Search -->

    <!-- Modal: Activity -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Brand -->
      <a class="navbar-brand" href="../admin">
        <img src="<?php echo base_url(); ?>assets/admin/img/logo.svg" class="navbar-brand-img 
        mx-auto" alt="...">
      </a>

      <!-- User (xs) -->
      <div class="navbar-user d-md-none">

        <!-- Dropdown -->
        <div class="dropdown">
    
          <!-- Toggle -->
          <a href="#!" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-sm avatar-online">
              <img src="assets/admin/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
            </div>
          </a>

          <!-- Menu -->
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
            <a href="profile-posts.html" class="dropdown-item">Хувийн мэдээлэл</a>
            <a href="settings.html" class="dropdown-item">Засвар</a>
            <hr class="dropdown-divider">
            <a href="/signin/signout" class="dropdown-item">Гарах</a>
          </div>
        </div>
      </div>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidebarCollapse">
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fe fe-search"></span>
              </div>
            </div>
          </div>
        </form>
   <!-- Divider -->
        <hr class="navbar-divider my-3">

        <!-- Heading -->
        <h6 class="navbar-heading">
          Бодлого
        </h6>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>math">
              <i class="fe fe-home"></i>Математик
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#sidebarPages">
              <i class="fe fe-file"></i> Физик
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#sidebarAuth">
              <i class="fe fe-user"></i> Хими
            </a>
          </li>
        </ul>

        <!-- Divider -->
        <hr class="navbar-divider my-3">

        <!-- Heading -->
        <h6 class="navbar-heading">
          Бусад
        </h6>

        <!-- Navigation -->
        <ul class="navbar-nav mb-md-4">

          <!-- Ангилал -->
          <li class="nav-item dropdown">
            <a class="nav-link " href="#sidebarCategory" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCategory">
              <i class="fe fe-clipboard"></i>Ангилал
            </a>
            <div class="collapse " id="sidebarCategory">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="components.html#alerts" class="nav-link">
                    Математик
                  </a>
                </li>
                <li class="nav-item">
                  <a href="components.html#avatars" class="nav-link">
                    Физик
                  </a>
                </li>
                <li class="nav-item">
                  <a href="components.html#badges" class="nav-link">
                    Хими
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <!-- Түвшин -->
          <li class="nav-item dropdown">
            <a class="nav-link" href="#sidebarComponents" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarComponents">
              <i class="fe fe-book-open"></i>Түвшин
            </a>
            <div class="collapse " id="sidebarComponents">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="components.html#alerts" class="nav-link">
                    Математик
                  </a>
                </li>
                <li class="nav-item">
                  <a href="components.html#avatars" class="nav-link">
                    Физик
                  </a>
                </li>
                <li class="nav-item">
                  <a href="components.html#badges" class="nav-link">
                    Хими
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <!-- Вариант -->
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>variant" class="nav-link">
              <i class="fe fe-git-branch"></i>Вариант
            </a>
          </li>
        </ul>
  
        <!-- Push content down -->
        <div class="mt-auto"></div>
  
        
        <!-- Customize -->
        <a href="#modalDemo" class="btn btn-block btn-primary mb-4" data-toggle="modal">
          <i class="fe fe-sliders mr-2"></i> Тохиргоо
        </a>
        
  
        
        <!-- User (md) -->
        <div class="navbar-user d-none d-md-flex" id="sidebarUser">
    
          <!-- Icon -->
         
          <!-- Dropup -->
          <div class="dropup">
      
            <!-- Toggle -->
            <a href="#!" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-sm avatar-online">
                <img src="<?php echo base_url(); ?>assets/admin/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
              </div>
            </a>

            <!-- Menu -->
            <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
              <a href="profile-posts.html" class="dropdown-item">Хувийн мэдээлэл</a>
              <a href="settings.html" class="dropdown-item">Засвар</a>
              <hr class="dropdown-divider">
              <a href="signin/signout" class="dropdown-item">Гарах</a>
            </div>

          </div>

          <!-- Icon -->
         
        </div>
        

      </div> <!-- / .navbar-collapse -->

    </div>
  </nav> 