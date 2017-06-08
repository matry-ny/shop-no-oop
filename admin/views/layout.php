
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <link href="/vendor/secondtruth/startmin/css/bootstrap.min.css" rel="stylesheet">
        <link href="/vendor/secondtruth/startmin/css/metisMenu.min.css" rel="stylesheet">
        <link href="/vendor/secondtruth/startmin/css/startmin.css" rel="stylesheet">
        <link href="/vendor/secondtruth/startmin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">Shop</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="<?= BASE_URL ?>"><i class="fa fa-home fa-fw"></i> На сайт</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> Shop <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?= ADMIN_URL ?>/users/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="<?= ADMIN_URL ?>"><i class="fa fa-dashboard fa-fw"></i> Панель управления</a>
                            </li>
                            <li>
                                <a href="<?= ADMIN_URL ?>/categories"><i class="fa fa-table fa-fw"></i> Категории</a>
                            </li>
                            <li>
                                <a href="<?= ADMIN_URL ?>/products"><i class="fa fa-table fa-fw"></i> Товары</a>
                            </li>
                            <li>
                                <a href="<?= ADMIN_URL ?>/users"><i class="fa fa-bar-chart-o fa-fw"></i> Пользователи и группы<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?= ADMIN_URL ?>/roles">Группы пользователей</a>
                                    </li>
                                    <li>
                                        <a href="<?= ADMIN_URL ?>/users">Пользователи</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Настройки</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php include $subview; ?>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->

        <script src="/vendor/secondtruth/startmin/js/jquery.min.js"></script>
        <script src="/vendor/secondtruth/startmin/js/bootstrap.min.js"></script>
        <script src="/vendor/secondtruth/startmin/js/metisMenu.min.js"></script>
        <script src="/vendor/secondtruth/startmin/js/startmin.js"></script>
    </body>
</html>
