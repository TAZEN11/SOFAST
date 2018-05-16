<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN | SOFAST</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?= base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" />
    <!-- Font Awesome -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,600,300,300italic,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <!-- CUSTOM STYLES-->
    <link href="<?= base_url('assets/css/custom.css'); ?>" rel="stylesheet" />
    <!-- Magnific-popup css -->
        <link href="<?= base_url('assets/css/magnific-popup.css'); ?>" rel="stylesheet">
         <!-- Bootstrap core CSS -->
        <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
     <!-- GOOGLE FONTS-->
   <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> -->

</head>
<body>
    <div class="head">
        <br>
      </br>
      <br>
      </br><br>
      </br>

         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>Masuk ke Sofast</strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Your Username " />
                                        </div>
                                            <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="Your Password" />
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> Remember me
                                            </label>
                                            <span class="pull-right">
                                                   <a href="#" >Forget password ? </a> 
                                            </span>
                                        </div>
                                     
                                     <a href="#" class="btn btn-primary ">Login Now</a>
                                    <hr />
                                    Not register ? <a href="daftar" >click here </a> 
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?= base_url('assets/js/jquery-1.10.2.js'); ?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?= base_url('assets/js/jquery.metisMenu.js'); ?>"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?= base_url('assets/js/custom.js'); ?>"></script>
   
</body>
</html>
