<?php
error_reporting(1);
session_start();
$username=$_SESSION['username'];

        if (isset($_SESSION['username'])) {
           // echo 'welcome, '. $_SESSION['username'];
            require 'connxn.php';
        
        $result=$db->query("SELECT * FROM user WHERE username='$username'");
        
        


} else {
    header('location: signin.php');
}
    
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title>PhoenixIcon | Action Page</title>
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
            <a href="index.html" class="brand brand-bootbus"><img src="img/picon3.png">PhoenixIcon</a>
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
               
                <li><a href="#">Withdraw</a></li>
                <li><a href="contact_us.html">Contact us</a></li>
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
      <!-- Start: SERVICE LIST -->
        
<section>
  <div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
    <div class="container">
    <div class="col-md-6">  
    <div class="row">
    <h3 class="panel-title"><b>Confirmatory Page</b></h3>
    <hr>

      
  </div>

    <div class="row">
    <div class="help-block"><h5>Your Request will be processed within 24 hours.
    </h5><hr>
    
    
    <hr>
    Please Contact Customer Care for any complaint: <b>contact@BinaryInvestors.com</b>
    </div>
    <div>
      <a href="logout.php"><button class="btn btn-success">Log Out</button></a>
    
      <a href="account.php"><button class="btn btn-success">View Account</button></a>
    </div>
    
    
    </div>

    
    
    </div>
    </div>
    </section>
        </div>
      <!-- End: SERVICE LIST -->
    </div>
    <!-- End: MAIN CONTENT -->
    <!-- Start: FOOTER -->
            <div class="container">
          
          <div class="page-header">
            <h2>We accept</h2>
          </div>
          <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span2">
                <div class="thumbnail">
                  <img src="img/perfmoney.jpg" alt="product name">
                  
                  
                </div>
              </li>
              <li class="span2">
                <div class="thumbnail">
                  <img src="img/western-union.jpg" alt="product name">
                  
                  
                </div>
              </li>
              <li class="span2">
                <div class="thumbnail">
                  <img src="img/moneygram.jpg" alt="product name">
                  
                  
                </div>
              </li>
               <li class="span2">
                <div class="thumbnail">
                  <img src="img/bitcoin.jpg" alt="product name">
                  
                  
                </div>
              </li>
            </ul>
          </div>
        </div>
      <!-- End: PRODUCT LIST -->
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
          &copy; 2015 Phoenixicon.com, All Rights Reserved.
        </p>
      </div>
    </footer>
    <!-- End: FOOTER -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/boot-business.js"></script>
  </body>
</html>
