<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--<meta http-equiv="x-ua-compatible" content="ie=edge">-->
        <title link rel="icon" href="<?= base_url('assets/img/icon.jpg');?>" type="image/gif" sizes="16x16">SOSMED FASTIKOM</title>
        <!-- Font Awesome -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,600,300,300italic,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?= base_url('assets/dist/css/AdminLTE.min.css');?>">
  <!-- Font Awesome -->
        <!-- Material Design Bootstrap -->
       
</head>
<body class="hold-transition lockscreen">
	<div class="lockscreen-wrapper">
		<div class="lockscreen-logo">
    			<a href="<?php anchor('beranda');?>"><b><h1>SOFAST</h1></a>
  		</div>
  		
  		<div class="lockscreen-name">
  			Gan Ze
  		</div>
		
		<div class="lockscreen-item">
			<div class="lockscreen-image">
				<img src="<?= base_url('assets/img/bg_kecil.jpg');?>" alt="User Image">
			</div>
		
  				<form class="lockscreen-credentials">
  				<div class="lockscreen-item">
  				Anda ingin <?php echo anchor('login','Masuk'); ?>	atau <?php echo anchor('register','Daftar'); ?> .	
  				</div>
  				</form>
		 </div>
		  
    <div class="lockscreen-footer text-center">
      <footer class="bottom-footer">
         <?php $this->load->view('inc/inc_footer')?>    
      </footer>
    </div>   		    
		  
	</div>
	 
</body>
</html>
