<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url()?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url()?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url()?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url()?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          <?php echo form_open("Login/login"); ?>
              <h1>Login</h1>
              <div>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="" />
              </div>
              <div>
              <button type="submit" class="btn btn-default">Login</button>
              </div>
              <?php echo form_close(); ?>
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Belum Jadi Anggota?
                  <a href="#signup" class="to_register"> Daftar </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> East Java Apartment</h1>
                  
                </div>
              </div>
              
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
          <?php echo form_open("Login/create"); ?>
              <h1>Daftar Anggota</h1>
              <div>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required="" />
              </div>
              <div>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="" />
              </div>
              <div>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required="" />
              </div>
              <div>
                <input type="number" class="form-control" id="nomer" name="nomer" placeholder="Nomer" required="" />
              </div> 
              <br>
              <div>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-default">Daftar</button>
              </div>
              <?php echo form_close(); ?>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Sudah Jadi Anggota?
                  <a href="#signin" class="to_register"> Login </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> East Java Apartment</h1>
                  
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
