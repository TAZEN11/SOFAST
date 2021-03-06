<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SOFAST | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- <link href="<?= base_url('asset/bootstrap_3_3_6/css/bootstrap.min.css') ?>" rel="stylesheet"> -->
  <!-- <link href="<?= base_url('asset/css/style.css') ?>" rel="stylesheet"> -->
  <!-- <link href="<?= base_url('asset/jquery_ui_1_12_0/jquery-ui.min.css') ?>" rel="stylesheet"> -->
  <!-- <link href="<?= base_url('asset/timepicker_1_6_3/jquery-ui-timepicker-addon.css') ?>" rel="stylesheet"> -->
</head>

<body>
  <?php $this->load->view('navbar') ?>

  <div class="container">
    <?php $this->load->view($mainView) ?>
  </div>

  <?php $this->load->view('footer') ?>

  <!--[if lt IE 9]>
  <script src="<?= base_url('asset/js/html5shiv_3_7_2/html5shiv.min.js') ?>"></script>
  <script src="<?= base_url('asset/js/respond_1_4_2/respond.min.js') ?>"></script>
  <![endif]-->
  <!-- <script src="<?= base_url('asset/js/jquery-1.12.4.min.js') ?>"></script> -->
  <!-- <script src="<?= base_url('asset/jquery_ui_1_12_0/jquery-ui.min.js') ?>"></script> -->
  <!-- <script src="<?= base_url('asset/timepicker_1_6_3/jquery-ui-timepicker-addon.js') ?>"></script> -->
  <!-- <script src="<?= base_url('asset/bootstrap_3_3_6/js/bootstrap.min.js') ?>"></script> -->
  <!-- <script src="<?= base_url('asset/js/app.js') ?>"></script> -->
</body>

</html>
