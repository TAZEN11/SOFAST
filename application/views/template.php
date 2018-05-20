<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--<meta http-equiv="x-ua-compatible" content="ie=edge">-->
        <title link rel="icon" href="<?= base_url('assets/img/icon.jpg');?>" type="image/gif" sizes="16x16">SOSMED FASTIKOM</title>
        <!-- Font Awesome -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,600,300,300italic,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <!-- Material Design Bootstrap -->
        <link href="<?= base_url('assets/css/materialize.css'); ?>" rel="stylesheet">
        <!-- Magnific-popup css -->
        <link href="<?= base_url('assets/css/magnific-popup.css'); ?>" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <!--<link href="css/progressbar.css" rel="stylesheet">-->
        <!-- Material Design Bootstrap -->
        <link href="<?= base_url('assets/css/mdb.min.css'); ?>" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/responsive.css'); ?>" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".navbar-desktop" id="<?= $halaman ?>">
	
	 <div class="navbar-desktop-wrapper">
            <div id="navbar">
                <div class='preloader'><div class='loaded'>&nbsp;</div></div>
<nav class="navbar navbar-fixed-top navbar-light bg-faded">
            <!--Collapse button-->
            <div class="container">
                <a href="#" data-activates="mobile-menu" class="button-collapse right"><i class="fa fa-bars black-text"></i></a>

                <!--Content for large and medium screens-->
                <div class="navbar-desktop">
                    <!--Navbar Brand-->
                    <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url('assets/img/logo.png'); ?>" alt="" /></a>
                    <!--Links-->
                    <ul class="nav navbar-nav pull-right hidden-md-down text-uppercase">
                        
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('index.php/login'); ?>">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="#!"><i class="fa fa-search fa-lg"></i></a>
                        </li>
                    </ul>
                    
                </div>

                <!-- Content for mobile devices-->
                <div class="navbar-mobile">

                    <ul class="side-nav" id="mobile-menu">
                       
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('index.php/login'); ?>">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!"><i class="fa fa-search fa-lg"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
            </div>
           <div id="content">
                <?php $this->load->view($main_view) ?>
           </div>
        </div>
        
       
	<h1>Selamat Datang di Situs kami.</h1>
	<p>  
	Silakan klik link
	<?php echo anchor('login','Masuk'); ?>
	untuk masuk ke dalam sistem atau
	<?php echo anchor('register','Daftar'); ?>
	untuk mendaftar.
	</p>      
</body>
</html>
