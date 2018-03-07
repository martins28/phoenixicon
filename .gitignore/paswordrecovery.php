<?php
session_start();
$username=$_SESSION['username'];

    if (isset($_SESSION['username'])) {
      
      require 'connxn.php';
    
    $result=$db->query("SELECT * FROM user WHERE username='$username'");
    
    


} ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title>PhoenixIcon | Recover Password</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="css/boot-business.css" rel="stylesheet">
  </head>
  <body>
    <!-- Start: HEADER -->
    <header>
      <!-- Start: Navigation wrapper -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
          <a href="index.html" class="brand brand-bootbus">PhoenixIcon.com</a>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
             <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <li >
                  <a href="index.html" >Home</a>
                                    
                </li>
                <li>
                  <a href="about.html" >About</a>
                </li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="contact_us.html">Contact us</a></li>
                <li><a href="account.php">Account/a></li>
                <li><a href="logout.php">Logout</a></li>
              
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Navigation wrapper -->   
    </header>
    <!-- End: HEADER -->
    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h1></h1>
        </div>
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-header"><i class="icon-lock"></i> Recover your password!</h4>
            <div class="widget-body">
              <div class="center-align">
                <form class="form-horizontal form-signin-signup" action="recoverprocess.php" method="POST">
                  <input type="text" name="username" placeholder="Username" required="required">
                  <input type="text" name="email" placeholder="email" required="required">
                  <div class="remember-me">
                    
                   
                    <div class="clearfix"></div>
                  </div>
                  <input type="submit" value="submit" class="btn btn-primary btn-large">
                </form>
                <h4><i class="icon-question-sign"></i> Don't have an account?</h4>
                <a href="signup.php" class="btn btn-large bottom-space">Signup</a>
                
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End: MAIN CONTENT -->
    <!-- Start: FOOTER -->
     <footer>
      <div class="container">
        <div class="row">
          
          
          <div class="span2">
            <h4><i class="icon-thumbs-up icon-white"></i> Support</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="contact_us.html">Contact us</a></li>            
              </ul>
            </nav>
            
          </div>
          <div class="span3">
            <h4>Get in touch</h4>
            
            <div class="social-icons-row">
              <i class="icon-envelope"></i> contact@phoenixicon.com        
            </div>
            
          </div>      
          
        </div>
      </div>
      <hr class="footer-divider">
      <div class="container">
        <p>
          &copy; 2016 Phoenixicon.com, All Rights Reserved.
        </p>
      </div>
    </footer>
    <!-- End: FOOTER -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/boot-business.js"></script>
  </body>
</html>