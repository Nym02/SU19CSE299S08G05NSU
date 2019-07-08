<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>

    <!-- css files -->
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/login.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans"
      rel="stylesheet"
    />

    <!-- js files- -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
  </head>
  <body>
    <div class="main">
      <div class="loginForm">
        <h1 class="text-center text-dark">Login</h1>
        <form action="#" onsubmit="return regValidation();">
          <div class="form-input">
            <i class="fas fa-user"></i>
            <input type="text" id="uemail" placeholder="Enter Your Email" />
            <label for="" id="email__label1"></label>
          </div>
          <div class="form-input">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Enter Your Password" />
            <label id="pass__label1"></label>
          </div>
          <div class="forgot__pass">
            <a href="#">Forgot Password?</a>
        <form action="includes/login.inc.php" method="POST">
          <div class="form-input">
            <i class="fas fa-user"></i>
            <input type="text" name="uid" placeholder="Enter Your Username" />
            <!-- <input type="email" placeholder="Enter Your Email"> -->
          </div>
          <div class="form-input">
            <i class="fas fa-lock"></i>
            <input type="password" name="pass" placeholder="Enter your Password" />
          </div>

          <input class="btn btn-outline-dark " type="submit" value="Enter" />
        </form>
      </div>
      <div class="form-footer">
        <a href="registration.html">Create An Account.</a>
      </div>
    </div>

    <script src="js/form-validation.js"></script>
  </body>
</html>