<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
	  <meta charset="UTF-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <title>
	     <?php echo ucfirst($this->session->userdata('username')); ?>'s Profil | 
	  </title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	   <!-- Font Awesome -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	  <!-- Ionicons -->
	  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	  <!-- Theme style -->
	  <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css');?>">
	  <!-- Google Font: Source Sans Pro -->
	  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
 </head>

<body class="hold-transition sidebar-mini">
	
	<div class="wrapper">
		<?php $this->load->view('inc/inc_navbar')?>
		<!-- Main Sidebar Container -->
		<!-- <?php $this ->load->view('inc/inc_sidebar')?> -->
<!-- /Main Sidebar Container -->

<div class="content-wrapper">
     <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h2> Hi <?php echo ucfirst($this->session->userdata('username')); ?> ..</h2>
            </div>

            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php anchor(site_url().'/beranda'); ?>">Home</a></li>
              <li class="breadcrumb-item active"><?php echo ucfirst($this->session->userdata('username')); ?>'s Profil</li>
              </ol>
            </div>


          
         </div>
      </div><!-- /.container-fluid -->
    </section>

	<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        	<div class="col-md-3">
        		
				<?php $this->load->view('inc/inc_img_profil')?>
				<?php $this->load->view('inc/inc_inf_profil')?>
        <div>
          <a href="<?php anchor(site_url().'/profil/create');?>">input</a>


        </div>
			</div>
        	</div>
          
            
            <!-- /.card -->

            <!-- About Me Box -->
           
          <!-- /.col -->
        </div>

        <!-- /.row -->
      </div>
	<!-- /.container-fluid -->
        
    </section>
		</div>
</div>
<footer class="main-footer">
  <?php $this->load->view('inc/inc_footer')?>    
</footer>
    <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  
 <!-- jQuery -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- FastClick -->
<script src="<?= base_url('assets/plugins/fastclick/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/dist/js/adminlte.min.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/dist/js/demo.js');?>"></script>
</body>
 