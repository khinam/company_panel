<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="images/logo.png" type="image/ico" />

    <title>Company Myanmar! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../custom/style.css">
  </head>

  <body class="nav-md">
    <div class="login">
        <?php
            // $pass = md5('12345');
            // echo $pass;
            // exit();
        ?>
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                <section class="login_content">
                    <?php if(isset($_GET['incorrect'])) : ?>
                        <h4 class = "btn btn-danger">Wrong Email or Password</h4>
                    <?php endif; ?>
                    <form method="post" action="confirm.php">
                        <h1>Admin Login</h1> 
                        <div>
                            <input type="email" class="form-control" name="email" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control" minlength="5" placeholder="Password" required="" />
                        </div>
                        <div>
                            <button type="submit" class="btn btn-default submit" name="adminSubmit">Log in</button>  
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Employee Login？
                                <a href="#signup" class="to_register text-color"> Employee Login</a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-building"></i> Company Panel</h1>
                                p>©2021 All Rights Reserved. Company Panel is a template. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
                </div>

                <div id="register" class="animate form registration_form">
                <section class="login_content">
                    <?php if(isset($_GET['incorrects'])) : ?>
                        <h4 class = "btn btn-danger">Wrong Email or Password</h4>
                    <?php endif; ?>
                    <form method="post" action="emConfirm.php">
                    <h1>Employee Login</h1>
                    <div>
                        <input type="email" name="emails" class="form-control" placeholder="Email" required="" />
                    </div>
                    <div>
                        <input type="password" name="passwords" minlength="5" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-default submit">Log in</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">Admin Login ?
                        <a href="#signin" class="to_register text-color"> Admin Login </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                        <h1><i class="fa fa-group"></i> Emloyee Panel</h1>
                        <p>©2021 All Rights Reserved. Employee Panel is a template. Privacy and Terms</p>
                        </div>
                    </div>
                    </form>
                </section>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>