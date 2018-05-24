 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >  
    <style type="text/css">  
     .form-box{  
      max-width: 500px;  
      position: relative;  
      margin: 5% auto;  
     }  
    </style> 
 </head>
 <body>
 	<div class="wrapper">
 	  <div class="container">
 	    <div class="row">
 		  <div class="form-box">
 			<div class="panel panel-primary">
 		     <div class="panel-heading text-center">  
          <h3 ><a>Pendaftaran Akun</a><b > SOFAST</b></h3>  
         </div>
 	<div class="panel-body">
 	  <div class="row">
 	  	<div class="col-sm-12">
	<?php echo form_open('register');?>
	<!-- <?php echo $this->session->flashdata('msg'); ?> -->
	    </div>
	  </div>
	<form action="<?php echo base_url(); ?>" method="post">
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
			<label class="control-label" for="name">Nama</label>:
				<div>
				
				<input type="text" class="form-control" id="name" name="name" placeholder="Enter Nama" value="<?php echo set_value('name'); ?>" required="">
                           
                <span class="text-danger"><?php echo form_error('name'); ?></span>  
				</div>
				</div>
			</div>
				<div class="col-sm-6">
				<div class="form-group">
			<label class="control-label" for="name">Username</label>:
				<div>
				
				<input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>" required="">
                           
                <span class="text-danger"><?php echo form_error('username'); ?></span>  
				</div>					
				</div>
			</div>
		</div>
 		<div class="form-group">  
            <label class="control-label" for="pswd">Email</label>  
              <div>  
             <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?php echo set_value('email'); ?>" required="" />
                       
             <span class="text-danger"><?php echo form_error('email'); ?></span>  
              </div>            
        </div>       
		<div class="form-group">  
            <label class="control-label" for="password">Password</label>  
             <div>  
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" value="<?php echo set_value('password'); ?>" required="" />
              <span class="text-danger"><?php echo form_error('password'); ?></span>  
             </div>  
        </div>
	<div class="form-group">  
                   <label class="control-label" for="cn-pswd">Confirm Password</label>  
                     <div>  
                       <input type="password" class="form-control"  id="password_conf" placeholder="Konfirmasi Password" name="password_conf" value="<?php echo set_value('password_conf'); ?>" required=""/>
                       <!-- <input type="password" class="form-control" id="cn-pswd" name="confirmpswd" placeholder="Confirm Password" required="">   -->
                       <span class="text-danger"><?php echo form_error('password_conf'); ?></span>  
                     </div>  
                 </div>  
                 <div class="form-group">   
                   <div class="row">  
                     <div class="col-sm-offset-5 col-sm-3 btn-submit">  <button type="submit" class="btn btn-success">Register</button>  
                     </div>  
                     <div class="col-sm-offset-1 col-sm-3 ">
                    <?php echo anchor(site_url().'/beranda','Beranda'); ?>
                     </div>
                   </div>  
                 </div>
	
 	</form>
 	</div>		
 				</div>
 			</div>
 		</div>
 	</div>/
 </div>
 </body>
 </html>
