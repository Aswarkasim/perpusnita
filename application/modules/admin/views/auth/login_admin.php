<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMIN PERPUSTAKAAN SMKN 5 MAKASSAR</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>dist/css/AdminLTE.min.css">
    <!-- iCheck -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


    <style>
        .bg-img {
            background-image: url(<?= base_url('assets/uploads/bg.jpeg') ?>);
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;

        }
    </style>

</head>



<body class="hold-transition login-page bg-img">
    <div class="login-box">
        <div class="login-logo">
            <p class="text-white"><b>SELAMAT</b> DATANG</p>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Silahkan Login</p>

            <form action="<?= base_url('admin/auth') ?>" method="post">
                <?php
                echo validation_errors('<div class="text text-danger">', '</div>');
                if (isset($error)) {
                    echo '<div class="text text-danger">';
                    echo $error;
                    echo '</div>';
                }
                ?>

                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
                    <br>
                    <p><i class="fa fa-globe"></i> Buka halaman <a href="<?= base_url(); ?>">Home</a></p>
                </div>


            </form>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="<?= base_url('assets/admin/') ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url('assets/admin/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>