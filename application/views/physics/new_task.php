
<!DOCTYPE html>
<html>

<!-- Mirrored from webapplayers.com/homer_admin-v2.0/wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Jan 2019 10:23:34 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>HOMER | WebApp admin theme</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    <link rel="stylesheet" href="../assets/adminv2/vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="../assets/adminv2/vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="../assets/adminv2/vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="../assets/adminv2/vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/adminv2/vendor/sweetalert/lib/sweet-alert.css" />
    <link rel="stylesheet" href="../assets/adminv2/vendor/summernote/dist/summernote.css" />
    <link rel="stylesheet" href="../assets/adminv2/vendor/summernote/dist/summernote-bs3.css" />


    <!-- App styles -->
    <link rel="stylesheet" href="../assets/adminv2/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="../assets/adminv2/fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="../assets/adminv2/styles/style.css">

     <script src="../assets/adminv2/plugins/ckeditor/ckeditor.js"></script>

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
            <span class="text-primary">ESH.MN</span>
        </div>
        <div class="mobile-menu">
            <button type="button" class="navbar-toggle mobile-menu-toggle" data-toggle="collapse" data-target="#mobile-collapse">
                <i class="fa fa-chevron-down"></i>
            </button>
            <div class="collapse mobile-navbar" id="mobile-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="" href="login.html">Гарах</a>
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
                    <a href="../signin/signout">
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
                <img src="images/profile.jpg" class="img-circle m-b" alt="logo">
            </a>

            <div class="stats-label text-color">
                <span class="font-extra-bold font-uppercase">Admin</span>

                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <small class="text-muted">ESH.MN <b class="caret"></b></small>
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
                    <li><a href="../math">Бодлого</a></li>
                    <li><a href="../math/category">Ангилал</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="nav-label">Физик</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="../physics">Бодлого</a></li>
                    <li><a href="../physics/category">Ангилал</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="nav-label">Хими</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="../chemistry">Бодлого</a></li>
                    <li><a href="../chemistry/category">Ангилал</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>

<!-- Main Wrapper -->
<div id="wrapper">

    <div class="small-header">
        <div class="hpanel">
            <div class="panel-body">
                <div id="hbreadcrumb" class="pull-right">
                    <ol class="hbreadcrumb breadcrumb">
                        <li><a href="index.html">Удирдлага</a></li>
                        <li>
                            <span>Физик</span>
                        </li>
                        <li class="active">
                            <span>Бодлого </span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    Физик
                </h2>
                <small>Физик хичээлийн бодлогын сан</small>
            </div>
        </div>
    </div>

<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-heading">
                    <div class="panel-tools">
                        <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                    </div>
                    Бодлого бүртгэх форм
                </div>
                <div class="panel-body">

                    <form action="../physics/save_task" method="post" id="form" enctype="multipart/form-data">

                        <div class="tab-content">
                        <div id="step1" class="p-m tab-pane active">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>Ангилал</label>
                                            <select class="form-control m-b" name="category">
                                                 <option>Cонгох</option>
                                                    <?php foreach($category as $cat) : ?>
                                                        <option value="<?php echo $cat['id']; ?>"><?php echo $cat['name'];?></option>
                                                    <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Дугаар</label>
                                            <select class="form-control m-b" name="number">
                                                <option>Cонгох</option>
                                            <?php for($i = 1; $i <= 100; $i++) { ?>
                                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>Дэс дугаар</label>
                                            <select class="form-control m-b" name="sub_number">
                                                <option>Cонгох</option>
                                            <?php for($i = 1; $i <= 100; $i++) { ?>
                                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Түвшин</label>
                                            <select class="form-control m-b" name="level">
                                                <option>Cонгох</option>
                                                <?php foreach($level as $lv): ?>
                                                <option value="<?php echo $lv['id'];?>"><?php echo $lv['level_name'];?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-12">
                                            <label>Бодлогын асуулт</label>
                                             <textarea name="task" id="editor1" rows="10" cols="80">
                                                Бодлогын асуулт энд оруулна уу...
                                            </textarea>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">Зураг хавсаргах</label>
                                        <input type="file" name="files[]" multiple/>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-12" id="answers">
                                            <div class="form-group col-lg-8">
                                                <label for="question">Хариулт</label>
                                                <textarea name="answers[]" id="editor2" rows="5" cols="80">
                                                    Хариултыг энд оруулна уу...
                                                </textarea>
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <button id="addbutton" class="btn btn-rounded-circle btn-success" style="margin-top: 30px;">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                // Replace the <textarea id="editor1"> with a CKEditor
                                // instance, using default configuration.
                                CKEDITOR.replace( 'editor1' );
                                CKEDITOR.replace( 'editor2' );
                            </script>
                            <div class="text-left m-t-xs">
                                 <button type="submit" class="btn btn-success">Хадгалах</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </div>

    <!-- Right sidebar -->

    <!-- Footer-->
    <footer class="footer">
        <span class="pull-right">
            ESH.MN
        </span>
        &copy; 2019
    </footer>

</div>



<!-- Vendor scripts -->
<script src="../assets/adminv2/vendor/jquery/dist/jquery.min.js"></script>
<script src="../assets/adminv2/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="../assets/adminv2/vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../assets/adminv2/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assets/adminv2/vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="../assets/adminv2/vendor/iCheck/icheck.min.js"></script>
<script src="../assets/adminv2/vendor/sparkline/index.js"></script>
<script src="../assets/adminv2/vendor/sweetalert/lib/sweet-alert.min.js"></script>
<script src="../assets/adminv2/vendor/summernote/dist/summernote.min.js"></script>

<!-- App scripts -->
<script src="../assets/adminv2/scripts/homer.js"></script>

<script>
        $(document).ready(function(){
            var wrapper = $("#answers");
            var x = 1;
            var y = 3;
            $("#addbutton").click(function(e){
                e.preventDefault();
                if (x < 5 ) {
                    x++;
                    $(wrapper).append('<div class="form-group col-lg-8"><textarea name="answers[]" id="editor'+y+'" rows="5" cols="80">Хариултыг энд оруулна уу...</textarea></div><div class="form-group col-lg-4"><button onclick="javascript:removeElement("editor'+y+'");  id="remove'+y+'" class="btn btn-rounded-circle btn-danger" style="margin-top: 30px;">-</button></div>');
                    CKEDITOR.replace( 'editor' + y);
                    y++;
                } else 
                {
                    alert('Hello! :)');
                }
            });
        });
    </script>

<script>

    $(function(){

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            $('a[data-toggle="tab"]').removeClass('btn-primary');
            $('a[data-toggle="tab"]').addClass('btn-default');
            $(this).removeClass('btn-default');
            $(this).addClass('btn-primary');
        })

        $('.next').click(function(){
            var nextId = $(this).parents('.tab-pane').next().attr("id");
            $('[href=#'+nextId+']').tab('show');
        })

        $('.prev').click(function(){
            var prevId = $(this).parents('.tab-pane').prev().attr("id");
            $('[href=#'+prevId+']').tab('show');
        })

        $('.submitWizard').click(function(){

            var approve = $(".approveCheck").is(':checked');
            if(approve) {
                // Got to step 1
                $('[href=#step1]').tab('show');

                // Serialize data to post method
                var datastring = $("#simpleForm").serialize();

                // Show notification
                swal({
                    title: "Thank you!",
                    text: "You approved our example form!",
                    type: "success"
                });
//            Example code for post form
//            $.ajax({
//                type: "POST",
//                url: "your_link.php",
//                data: datastring,
//                success: function(data) {
//                    // Notification
//                }
//            });
            } else {
                // Show notification
                swal({
                    title: "Error!",
                    text: "You have to approve form checkbox.",
                    type: "error"
                });
            }
        })
    });
</script>

</body>

<!-- Mirrored from webapplayers.com/homer_admin-v2.0/wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Jan 2019 10:23:34 GMT -->
</html>