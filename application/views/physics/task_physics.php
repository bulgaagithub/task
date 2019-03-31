
<!DOCTYPE html>
<html>

<!-- Mirrored from webapplayers.com/homer_admin-v2.0/datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Jan 2019 10:23:18 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>ESH. | MN</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    <link rel="stylesheet" href="assets/adminv2/vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/adminv2/vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="assets/adminv2/vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="assets/adminv2/vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/adminv2/vendor/datatables.net-bs/css/dataTables.bootstrap.min.css" />

    <!-- App styles -->
    <link rel="stylesheet" href="assets/adminv2/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="assets/adminv2/fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="assets/adminv2/styles/style.css">

</head>
<body class="fixed-navbar sidebar-scroll">

<!-- Simple splash screen-->
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>Homer - Responsive Admin Theme</h1><p>Special Admin Theme for small and medium webapp with very clean and aesthetic style and feel. </p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header -->
<div id="header">
    <div class="color-line">
    </div>
    <div id="logo" class="light-version">
        <span>
            ESH.MN
        </span>
    </div>
    <nav role="navigation">
        <div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
        <div class="small-logo">
            <span class="text-primary">ESH MN</span>
        </div>
        <div class="mobile-menu">
            <button type="button" class="navbar-toggle mobile-menu-toggle" data-toggle="collapse" data-target="#mobile-collapse">
                <i class="fa fa-chevron-down"></i>
            </button>
            <div class="collapse mobile-navbar" id="mobile-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="" href="login.html">Нэвтрэх</a>
                    </li>
                    <li>
                        <a class="" href="login.html">Гарах</a>
                    </li>
                    <li>
                        <a class="" href="profile.html">Хувийн мэдээлэл</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav no-borders">
              
                <li class="dropdown">
                    <a class="dropdown-toggle label-menu-corner" href="#" data-toggle="dropdown">
                        <i class="pe-7s-mail"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu hdropdown animated flipInX">
                        <div class="title">
                            You have 4 new messages
                        </div>
                        <li>
                            <a>
                                It is a long established.
                            </a>
                        </li>
                        <li>
                            <a>
                                There are many variations.
                            </a>
                        </li>
                        <li>
                            <a>
                                Lorem Ipsum is simply dummy.
                            </a>
                        </li>
                        <li>
                            <a>
                                Contrary to popular belief.
                            </a>
                        </li>
                        <li class="summary"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="signin/signout">
                        <i class="pe-7s-upload pe-rotate-90"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<!-- Navigation -->
<aside id="menu">
    <div id="navigation">
        <div class="profile-picture">
            <a href="index.html">
                <img src="assets/adminv2/images/profile.jpg" class="img-circle m-b" alt="logo">
            </a>

            <div class="stats-label text-color">
                <span class="font-extra-bold font-uppercase">Admin</span>

                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <small class="text-muted">ESH MN <b class="caret"></b></small>
                    </a>
                    <ul class="dropdown-menu animated flipInX m-t-xs">
                        <li><a href="login.html">Гарах</a></li>
                    </ul>
                </div>
                <div id="sparkline1" class="small-chart m-t-sm"></div>
                <div>
                    <h4 class="font-extra-bold m-b-xs">
                        $260 104,200
                    </h4>
                    <small class="text-muted">Your income from the last year in sales product X.</small>
                </div>
            </div>
        </div>

        <ul class="nav" id="side-menu">
            <li>
                <a href="#"><span class="nav-label">Математик</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="math">Бодлого</a></li>
                    <li><a href="math/category">Ангилал</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="nav-label">Физик</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="physics">Бодлого</a></li>
                    <li><a href="physics/category">Ангилал</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="nav-label">Хими</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="chemistry">Бодлого</a></li>
                    <li><a href="chemistry/category">Ангилал</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>

<!-- Main Wrapper -->
<div id="wrapper">

    <div class="normalheader ">
        <div class="hpanel">
            <div class="panel-body">
                <a class="small-header-action" href="#">
                    <div class="clip-header">
                        <i class="fa fa-arrow-up"></i>
                    </div>
                </a>

                <div id="hbreadcrumb" class="pull-right m-t-lg">
                    <ol class="hbreadcrumb breadcrumb">
                        <li><a href="index.html">Удирдлага</a></li>
                        <li>
                            <span>Хүснэгт</span>
                        </li>
                        <li class="active">
                            <span>Бодлогын жагсаалт</span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    Бодлогын хүснэгт
                </h2>
                <small>Физик хичээлийн бодлогын жагсаалт</small>
            </div>
        </div>
    </div>
    
<div class="content">



    <div class="row">
        <div class="col-lg-12">
            <div class="back-link">
                <a href="physics/new_task" class="btn w-xs btn-success">Бодлого нэмэх</a>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-heading">
                    <div class="panel-tools">
                        <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                    </div>
                    Бодлогын жагсаалт
                </div>
                <div class="panel-body">
                <table id="example2" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Асуулт</th>
                    <th>Ангилал</th>
                    <th>Дугаар</th>
                    <th>Дэд дугаар</th>
                    <th>Бүртгэсэн огноо</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($tasks as $task) : ?>
                <tr>
                    <td><?php echo $task['id'];?></td>
                    <td><?php echo $task['task'];?></td>
                    <td><?php echo $task['type'];?></td>
                    <td><?php echo $task['number'];?></td>
                    <td><?php echo $task['sub_number'];?></td>
                    <td><?php echo $task['created_date'];?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
                </table>

                </div>
            </div>
        </div>

    </div>
    </div>

    <!-- Right sidebar -->
    <div id="right-sidebar" class="animated fadeInRight">

        <div class="p-m">
            <button id="sidebar-close" class="right-sidebar-toggle sidebar-button btn btn-default m-b-md"><i class="pe pe-7s-close"></i>
            </button>
            <div>
                <span class="font-bold no-margins"> Analytics </span>
                <br>
                <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.</small>
            </div>
            <div class="row m-t-sm m-b-sm">
                <div class="col-lg-6">
                    <h3 class="no-margins font-extra-bold text-success">300,102</h3>

                    <div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                </div>
                <div class="col-lg-6">
                    <h3 class="no-margins font-extra-bold text-success">280,200</h3>

                    <div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                </div>
            </div>
            <div class="progress m-t-xs full progress-small">
                <div style="width: 25%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" role="progressbar"
                     class=" progress-bar progress-bar-success">
                    <span class="sr-only">35% Complete (success)</span>
                </div>
            </div>
        </div>
        <div class="p-m bg-light border-bottom border-top">
            <span class="font-bold no-margins"> Social talks </span>
            <br>
            <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.</small>
            <div class="m-t-md">
                <div class="social-talk">
                    <div class="media social-profile clearfix">
                        <a class="pull-left">
                            <img src="images/a1.jpg" alt="profile-picture">
                        </a>

                        <div class="media-body">
                            <span class="font-bold">John Novak</span>
                            <small class="text-muted">21.03.2015</small>
                            <div class="social-content small">
                                Injected humour, or randomised words which don't look even slightly believable.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-talk">
                    <div class="media social-profile clearfix">
                        <a class="pull-left">
                            <img src="images/a3.jpg" alt="profile-picture">
                        </a>

                        <div class="media-body">
                            <span class="font-bold">Mark Smith</span>
                            <small class="text-muted">14.04.2015</small>
                            <div class="social-content">
                                Many desktop publishing packages and web page editors.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-talk">
                    <div class="media social-profile clearfix">
                        <a class="pull-left">
                            <img src="images/a4.jpg" alt="profile-picture">
                        </a>

                        <div class="media-body">
                            <span class="font-bold">Marica Morgan</span>
                            <small class="text-muted">21.03.2015</small>

                            <div class="social-content">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-m">
            <span class="font-bold no-margins"> Sales in last week </span>
            <div class="m-t-xs">
                <div class="row">
                    <div class="col-xs-6">
                        <small>Today</small>
                        <h4 class="m-t-xs">$170,20 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                    <div class="col-xs-6">
                        <small>Last week</small>
                        <h4 class="m-t-xs">$580,90 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <small>Today</small>
                        <h4 class="m-t-xs">$620,20 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                    <div class="col-xs-6">
                        <small>Last week</small>
                        <h4 class="m-t-xs">$140,70 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                </div>
            </div>
            <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.
                Many desktop publishing packages and web page editors.
            </small>
        </div>

    </div>

    <!-- Footer-->
    <footer class="footer">
        <span class="pull-right">
            ESH.MN
        </span>
        &copy; 2019
    </footer>

</div>



<!-- Vendor scripts -->
<script src="assets/adminv2/vendor/jquery/dist/jquery.min.js"></script>
<script src="assets/adminv2/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/adminv2/vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="assets/adminv2/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/adminv2/vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="assets/adminv2/vendor/iCheck/icheck.min.js"></script>
<script src="assets/adminv2/vendor/sparkline/index.js"></script>
<!-- DataTables -->
<script src="assets/adminv2/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="assets/adminv2/vendor/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- DataTables buttons scripts -->
<script src="assets/adminv2/vendor/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/adminv2/vendor/pdfmake/build/vfs_fonts.js"></script>
<script src="assets/adminv2/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/adminv2/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/adminv2/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/adminv2/vendor/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<!-- App scripts -->
<script src="assets/adminv2/scripts/homer.js"></script>


<script>

    $(function () {

        // Initialize Example 1
        $('#example1').dataTable( {
            "ajax": 'api/datatables.json',
            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
            "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
            buttons: [
                {extend: 'copy',className: 'btn-sm'},
                {extend: 'csv',title: 'ExampleFile', className: 'btn-sm'},
                {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                {extend: 'print',className: 'btn-sm'}
            ]
        });

        // Initialize Example 2
        $('#example2').dataTable();

    });

</script>

</body>

<!-- Mirrored from webapplayers.com/homer_admin-v2.0/datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Jan 2019 10:23:26 GMT -->
</html>