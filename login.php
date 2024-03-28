<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FMS - Admin-Login</title>

    <!-- Bootstrap -->
    <link href="assests/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assests/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assests/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="assests/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assests/build/css/custom.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  </head>

  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form  action="backend/get_ajax.php" method="post" >
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="phone" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required="" />
              </div>
            
                <div class="clearfix"></div>
                <!-- <br /> -->
                <button type="submit" class="btn btn-success" name="login" >Login to FMS</button>
                <div>
                  <h1> FMS</h1>
                </div>
                <div>
                  <p> <?php 
                  session_start();
                        if(isset($_SESSION['msg'])){
                            echo '<span id="msg" class="alert alert-danger">'.$_SESSION['msg'].'</span>';
                            unset($_SESSION["msg"]);?>
                        <script>
                            $(document).ready(function(){
                                setTimeout(function() { 
                                    $('#msg').hide(5000);
                                }, 2000);
                            });
                        </script>    
                        <?php
                        }
                    ?></p>
                </div>
              <!-- </div> -->
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
</html>
