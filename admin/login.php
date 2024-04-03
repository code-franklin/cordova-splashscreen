<?php require_once('../config.php') ?>
<!DOCTYPE html>

<head>
  <title> Series 1 Resort Login </title>
</head>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>


 <style>
    html, body{
      height:calc(100%) !important;
      width:calc(100%) !important;
    }

    body{
      background: url(blur-background.png)
      
    }
    .login-title{ 
      text-shadow: 2px 2px black
    }
    #login{
      flex-direction:column !important
    }
   
    #login .col-7,#login .col-5{
      width: 100% !important;
      max-width:unset !important
    }

   .admin {
    color: white;
    margin-top: 150px;
    font-size: 50px;
    font-weight: 900;
   }

   .card {
    position: absolute;
    bottom: 250px;
   
   
   }

  
  </style>


<body class="hold-transition ">
  <script>
    start_loader()
  </script>

  
  <div class="h-100 d-flex align-items-center w-100" id="login">
    <div class="col-7 h-100 d-flex align-items-center justify-content-center">
      <div class="w-100">
     
        <h1 class="admin text-center">Administrator</h1>
      </div>
      

      
    </div>
    <div class="col-5 h-100 bg-gradient">
      <div class="d-flex w-100 h-100 justify-content-center align-items-center">
        <div class="card col-sm-12 col-md-6 col-lg-3 card-outline card-primary rounded-0 shadow">
          <div class="card-header rounded-0">
            <h4 class="text-purle text-center"><b>Login</b></h4>
          </div>
          <div class="card-body rounded-0">
            <form id="login-frm" action="" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control" autofocus name="username" placeholder="Username">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
               
                <!-- /.col -->
                <div class="col-12 ">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function(){
    end_loader();
  })
</script>
</body>
</html>