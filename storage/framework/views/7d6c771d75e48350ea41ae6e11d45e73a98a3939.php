<!doctype html>
 <html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hetemi</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo e(url('assets/images/logohf.png')); ?>">
    <link rel="shortcut icon" href="<?php echo e(url('assets/images/logohf.png')); ?>">

    <link rel="stylesheet" href="<?php echo e(url('assets/css/normalize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/css/flag-icon.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/css/cs-skin-elastic.css')); ?>">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo e(url('assets/scss/style.css')); ?>">
    <!-- <link rel="stylesheet" href="<?php echo e(url('assets/css/radiobutton.css')); ?>"> -->
    <link href="<?php echo e(url('assets/css/lib/vector-map/jqvmap.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(url('assets/css/lib/datatable/dataTables.bootstrap.min.css')); ?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->


</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="<?php echo e(url('assets/images/logohf.png')); ?>" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="<?php echo e(url('assets/images/logohf.png')); ?>" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="<?php if($_SERVER['REQUEST_URI'] =="/"): ?> active <?php endif; ?>">
                        <a href="<?php echo e(url('/')); ?>"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                    </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                  
                    <li class="menu-item-has-children dropdown <?php if($_SERVER['REQUEST_URI'] =="/headerimages"): ?> active <?php endif; ?>">
          <a href="<?php echo e(url('headerimages')); ?>" class="dropdown-toggle"   aria-expanded="false"> <i class="menu-icon fa fa-image"></i>Slider Images</a>
                    </li>
                    <li class="menu-item-has-children dropdown <?php if($_SERVER['REQUEST_URI'] =="/images"): ?> active <?php endif; ?>">
          <a href="<?php echo e(url('images')); ?>" class="dropdown-toggle"   aria-expanded="false"><i class="menu-icon fa fa-image"></i>Images</a>
                    </li>
                    <li class="menu-item-has-children dropdown <?php if($_SERVER['REQUEST_URI'] =="/category"): ?> active <?php endif; ?>">
          <a href="<?php echo e(url('category')); ?>" class="dropdown-toggle"   aria-expanded="false"> <i class="menu-icon fa fa-folder-open"></i>Categories</a>
                    </li>
                    <li class="menu-item-has-children dropdown <?php if($_SERVER['REQUEST_URI'] =="/type"): ?> active <?php endif; ?>">
          <a href="<?php echo e(url('type')); ?>" class="dropdown-toggle"   aria-expanded="false"> <i class="menu-icon fa fa-folder-open"></i>Types</a>
                    </li>



                    <h3 class="menu-title">Message</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown <?php if($_SERVER['REQUEST_URI'] =="/messages"): ?> active <?php endif; ?>">
                        <a href="<?php echo e(url('messages')); ?>" class="dropdown-toggle"> <i class="menu-icon ti-email"></i> Messages </a>
                    </li>
                    <li class="menu-item-has-children dropdown <?php if($_SERVER['REQUEST_URI'] =="/onlineoffers"): ?> active <?php endif; ?>">
              <a href="<?php echo e(url('onlineoffers')); ?>" class="dropdown-toggle"  aria-expanded="false"> <i class="menu-icon fa fa-handshake-o"></i>Online Offers</a>

                    </li>

                    <?php if(Auth::check() && Auth::user()->role == "admin" || Auth::check() && Auth::user()->role == "manager"): ?>
                    <h3 class="menu-title">Company</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown <?php if($_SERVER['REQUEST_URI'] =="/staff"): ?> active <?php endif; ?>">
                        <a href="<?php echo e(url('staff')); ?>" class="dropdown-toggle" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Staff</a>

                    </li>
                    <?php endif; ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                      <i class="fa fa-calendar" ></i>  <?php echo e(Carbon\Carbon::now('Europe/Rome')->format('l,F d, Y')); ?>

                    </div>
                </div>

                <div class="col-sm-5">

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo e(url('assets/images/admin.jpg')); ?>" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="dropdown-item" href="<?php echo e(url("myprofile")); ?>"><i class="fa fa- user"></i>My Profile</a>

                                <form action="<?php echo e(route('logout')); ?>" method="POST">
                                  <?php echo e(csrf_field()); ?>

                                  <button type="submit"
                              class="dropdown-item">
                                      Logout
                                      </button>
                                    </form>
                        </div>
                    </div>



                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->


        <?php echo $__env->yieldContent('content'); ?>





    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="<?php echo e(url('assets/js/vendor/jquery-2.1.4.min.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="<?php echo e(url('assets/js/plugins.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/main.js')); ?>"></script>
    <script src="assets/js/popper.min.js"></script>


    <script src="<?php echo e(url('assets/js/lib/chart-js/Chart.bundle.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/dashboard.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/widgets.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/lib/vector-map/jquery.vmap.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/lib/vector-map/jquery.vmap.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/lib/vector-map/jquery.vmap.sampledata.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/lib/vector-map/country/jquery.vmap.world.js')); ?>"></script>

    <script src="<?php echo e(url('assets/js/lib/data-table/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/lib/data-table/dataTables.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/lib/data-table/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/lib/data-table/buttons.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/lib/data-table/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/lib/data-table/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/lib/data-table/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/lib/data-table/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/lib/data-table/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/lib/data-table/buttons.colVis.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/lib/data-table/datatables-init.js')); ?>"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>
    <script>
            ( function ( $ ) {
                "use strict";

                jQuery( '#vmap' ).vectorMap( {
                    map: 'world_en',
                    backgroundColor: null,
                    color: '#ffffff',
                    hoverOpacity: 0.7,
                    selectedColor: '#1de9b6',
                    enableZoom: true,
                    showTooltip: true,
                    values: sample_data,
                    scaleColors: [ '#1de9b6', '#03a9f5' ],
                    normalizeFunction: 'polynomial'
                } );
            } )( jQuery );
        </script>

</body>
</html>
