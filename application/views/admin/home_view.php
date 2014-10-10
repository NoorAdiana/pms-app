<!DOCTYPE html>
<html class="no-js">

<head>
    <!-- Some assets concatenated and minified to improve load speed. Download version includes source css, javascript and less assets -->
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=1, initial-scale=1, maximum-scale=1">

    <title><?php echo $title; ?></title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url("asset/bootstrap/css/bootstrap.min.css")?>">
    <!-- /bootstrap -->

    <!-- core styles -->
    <link rel="stylesheet" href="<?php echo base_url("asset/min/main.min.css")?>">
    <!-- /core styles -->

    <!-- page styles -->
    <!-- /page styles -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- load modernizer -->
    <script src="<?php echo base_url("asset/vendor/modernizr.js")?>"></script>
</head>

<!-- body -->

<body>
    <div class="app">
        <!-- top header -->
        <header class="header header-fixed navbar bg-white">

            <div class="brand bg-success">
                <a href="#" class="fa fa-bars off-left visible-xs" data-toggle="off-canvas" data-move="ltr"></a>

                <a href="<?php echo base_url('home'); ?>" class="navbar-brand text-white">
                    <i class="fa fa-check mg-r-xs"></i>
                    <b>SMS Finance</b>
                </a>
            </div>

            <ul class="nav navbar-nav navbar-right off-right">
                <li class="hidden-xs">
                    <a href="#">
                        <?php echo $username; ?>
                    </a>
                </li>

                <li class="quickmenu mg-r-md">
                    <a href="#" data-toggle="dropdown">
                        <img src="<?php echo base_url("asset/img/avatar.jpg"); ?>" class="avatar pull-left img-circle" alt="user" title="user">
                        <i class="caret mg-l-xs hidden-xs no-margin"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right mg-r-xs">
                        <li>
                            <a href="#">Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>
        <!-- /top header -->

        <section class="layout">
            <!-- sidebar menu -->
            <aside class="sidebar canvas-left bg-dark">
                <!-- main navigation -->
                <nav class="main-navigation">
                    <ul>
                        <li>
                            <a href="<?php echo base_url('home'); ?>">
                                <i class="fa fa-chevron-right"></i>
                                <span>DASHBOARD</span>
                            </a>
                        </li>
                        <li class="dropdown show-on-hover">
                            <a href="#" data-toggle="dropdown">
                                <i class="fa fa-chevron-right"></i>
                                <span>TICKET</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">
                                        <span>Open Ticket</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Assign</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Not Assign</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown show-on-hover">
                            <a href="#" data-toggle="dropdown">
                                <i class="fa fa-chevron-right"></i>
                                <span>USER MANAGEMENT</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">
                                        <span>New User</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Edit User</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown show-on-hover">
                            <a href="#" data-toggle="dropdown">
                                <i class="fa fa-chevron-right"></i>
                                <span>BRANCH MANAGEMENT</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">
                                        <span>New Branch</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Edit Branch</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown show-on-hover">
                            <a href="#" data-toggle="dropdown">
                                <i class="fa fa-chevron-right"></i>
                                <span>GROUP MANAGEMENT</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">
                                        <span>New Group</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Edit Group</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown show-on-hover">
                            <a href="#" data-toggle="dropdown">
                                <i class="fa fa-chevron-right"></i>
                                <span>STATUS MANAGEMENT</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">
                                        <span>New Status</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Edit Status</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown show-on-hover">
                            <a href="#" data-toggle="dropdown">
                                <i class="fa fa-chevron-right"></i>
                                <span>POSITION MANAGEMENT</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">
                                        <span>New Position</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Edit Position</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-chevron-right"></i>
                                <span>SEARCH TICKET</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /main navigation -->


                <!-- footer -->
                <footer>

                </footer>
                <!-- /footer -->
            </aside>
            <!-- /sidebar menu -->

            <!-- main content -->
            <section class="main-content">

                <!-- content wrapper -->
                <div class="content-wrap">
                </div>
                <!-- /content wrapper -->
            </section>
            <!-- /main content -->
        </section>

    </div>

    <script src="<?php echo base_url('asset/min/main.min.js')?>"></script>

    <!-- page scripts -->
    <!-- /page scripts -->
</body>
<!-- /body -->

</html>
