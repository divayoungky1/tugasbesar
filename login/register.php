<!DOCTYPE html>
<html lang="en">
  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style2.css" rel="stylesheet">
  </head>
  <body>
    <div class="col-md-4 col-md-offset-4 form-login">
    
    <?php
    if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
        </div>
    <?php endif;?>
        <div class="outter-form-login">
		<div class="logo-login">


        <a href="login.php">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>


			<em class="glyphicon glyphicon-user"></em>
			</div>
        
            <form action="proses-daftar.php" class="inner-login" method="post">
            <h3 class="text-center title-login">Pendaftaran</h3>
			<hr>
			<tr>
				<h4><th><br>Username</th></h4>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
			</tr>			
			<tr>
				<h4><th><br>Nama User</th></h4>
				<div class="form-group">
					<input type="text" class="form-control" name="nama" placeholder="Nama User">
			</tr>
			<tr>
				<h4><th><br>Password</th></h4>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
            </th>    
                <input type="submit" class="btn btn-block btn-custom-green" value="Register" />
            </form>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>