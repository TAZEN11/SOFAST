<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--<meta http-equiv="x-ua-compatible" content="ie=edge">-->
        <title link rel="icon" href="<?= base_url('assets/img/icon.jpg');?>">Register Sofast</title>
        <!-- Font Awesome -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,600,300,300italic,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <!-- Material Design Bootstrap -->
        <link href="<?= base_url('assets/css/materialize.css');?>" rel="stylesheet">
        <!-- Magnific-popup css -->
        <link href="<?= base_url('assets/css/magnific-popup.css');?>" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="<?= base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <!--<link href="<?= base_url('css/progressbar.css');?>" rel="stylesheet">-->
        <!-- Material Design Bootstrap -->
        <link href="<?= base_url('assets/css/mdb.min.css');?>" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="<?= base_url('assets/css/style.css');?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/responsive.css');?>" rel="stylesheet">
</head>
<body>
	
<div class="col-lg-5 col-lg-offset-2">
	<h1>Register Page</h1>
	<p>Fill in the detaill to register on our website!!</p>
	<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
	<form action="" method="POST" >
	<div class="form-group"> 
		<label for="username"  >Username:</label>
		<input class="form-control" name="username" id="username" type="text">
	</div>

	<div class="form-group"> 
		<label for="email"  >Email:</label>
		<input class="form-control" name="email" id="email" type="text">
	</div>

	<div class="form-group"> 
		<label for="password"  >Password:</label>
		<input class="form-control" name="password" id="password" type="password">
	</div>

	<div class="form-group"> 
		<label for="password"  >Confirm Password:</label>
		<input class="form-control" name="password2" id="password" type="password">
	</div>

	<div class="form-group"> 
		<label for="gender"  >Gender:</label>
		<select class="form-control" id="gender" name="gender">
			<option value="Male">Male</option>
			<option value="Female">Female</option>
		</select>  
	</div>

	<div class="form-group"> 
		<label for="phone"  >Phone</label>
		<input class="form-control" name="phone" id="phone" type="text">
	</div>

	<div >
		<button class="btn btn-primary" name="register">Register</button>
	</div>
	</form>
</div>

</body>