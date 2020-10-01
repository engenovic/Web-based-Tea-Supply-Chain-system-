
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Unilever:: Staff Login</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates,
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

</head>


<body>
  <h3> <a href="../../home/index.php">Home</a></h3>
    <h1>Staff Login </h1>
    <div class=" w3l-login-form">
        <h2>Login Here</h2>
        <form action="signin.php" method="POST">
          <div class=" w3l-form-group" style="color:#fff;">

              <input type="radio"  name="role" value="Driver" >Driver
              <input type="radio"  name="role" value="Clerk">Clerk
            </div>
            <div class=" w3l-form-group">
                <label>Username:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" placeholder="Username" name="username" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" placeholder="Password" name="password" required="required" />
                </div>
            </div>
            <div class="forgot">
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" name="staff">Login</button>
        </form>
    </div>
    <footer>
        <p class="copyright-agileinfo"> &copy; 2020 Unilever Tea Ltd. All Rights Reserved | Designed by Admin</p>
    </footer>

</body>

</html>
