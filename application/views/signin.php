<!DOCTYPE html>
<html class="no-js">

<head>
    <!-- Some assets concatenated and minified to improve load speed. Download version includes source css, javascript and less assets -->
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=1, initial-scale=1, maximum-scale=1">

    <title>PMS App - SMS Finance</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css'); ?>">
    <!-- /bootstrap -->

    <!-- core styles -->
    <link rel="stylesheet" href="<?php echo base_url('asset/min/main.min.css'); ?>">
    <!-- /core styles -->

    <!-- page styles -->
    <!-- /page styles -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- load modernizer -->
    <script src="<?php echo base_url('asset/vendor/modernizr.js'); ?>"></script>
</head>

<body class="bg-dark">
    <div class="app-user">
        <div class="user-container">
            <?php
                if($error !== ''){
            ?>
                <div class="alert alert-danger">
                    <strong>Sorry!</strong> <?php echo $error; ?>
                </div>
            <?php
                }
            ?>
            <section class="panel panel-default">
                <header class="panel-heading">Sign in</header>
                <div class="bg-white user pd-lg">
                    <h6>
                        <strong>PMS App. </strong>Signin untuk memulai!</h6>

                    <form role="form" action="<?php echo base_url('login/do_login'); ?>" method="post">
                        <input type="text" class="form-control mg-b-sm" placeholder="Username" name="username" autofocus value="<?php echo $username; ?>">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <label class="checkbox pull-left"></label>
                        <button class="btn btn-info btn-block" type="submit">Sign in</button>
                    </form>
                </div>
            </section>
        </div>
    </div>
</body>
</html>
