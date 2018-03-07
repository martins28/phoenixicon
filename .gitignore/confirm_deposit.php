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
    <title>PhoenixIcon| Deposits</title>
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
                <li ><a href="index.html" >Home</a></li>
                <a href="account.php" >Account</a></li>
                <li><a href="withdraw.php">Withdraw</a></li>
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
        <div class="container">
          <div class="page-header">
            <div><b><?php //echo 'Welcome, '. $_SESSION['username']; ?> </b></div>
          </div>
         
<div class="container">
<div class="panel panel-default">
    <div class="panel-heading">
    <div class="container">
    <div class="col-md-6" class="pull-right"> 
    <div class="row">
    <h3 class="panel-title" class="text-center"><b>Instant Money Transfer Details</b></h3>
    <hr>

  </div>
  </div>  

      
  </div>

    
  </div>

    
    
  </div>
  </div>



 
    <div class="container" class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
    <div class="container">
    <div class="col-md-6" class="pull-right"> 
    <div class="row">
    <h3 class="panel-title"><b>PhoenixIcon Instant Money Transfer Details</b></h3>
    <hr>
    </div>

    <div class="row">
    <h4><p>Our Instant Money Transfer Details are provided only on request.</p>
    <p>Send request via email to contact@phoenixicon.com</p>


    </h4>
    </div>

    </div>
    </div>
    </div>
    
    </div>
    </div>

   
    <div class="container">
    <div class="panel panel-default">
    <div class="panel-heading">
    <div class="container">
    <div class="col-md-6" class="pull-right"> 
    <div class="row">
    <h3 class="panel-title"><b>Instructions:</b></h3>
    <hr>
    </div>

    <div class="container">
    <div><b>
   <p>Use provided receiver details to send us instant money transfer. </p>
  <p> <b>Attention:</b> The receiver details are relevant within 72hours.</p>
    </div>
     <p>If you have not paid the order within specified time frame, please make sure to collect
      the receiver details from operator! </p>
      <hr>
     <p>Once you have paid for the order, please use the form below to enter data about 
     the transaction and the sender.</p> 
     <p>Order is processed within 24 hours after payment confirmation.</p>
    </div>
    <hr>
    <div>
    <p>Please confirm below with the appropriate account for which you made your deposit.</p> 
      <p> MTCN number for Western Union, Ref number for Moneygram and Bitcoin, Batch number for Perfect money.</p>
    </div>
    </b>
    </div>

    </div>
    </div>
    </div>
    </div>
    </div>


    <div >

  <div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
    <div class="container">
    <div class="col-md-6" class="pull-right"> 
    <div class="row">
    <h3 class="panel-title"><b>CONFIRM DEPOSIT </b></h3>
    <hr>

      
      </div>

    <div class="row">
    <div class="help-block">Your Request will be processed within 24 hours.
    <hr>
    Please Contact Customer Care for any complaint:<b> contact@phoenixicon.com</b>
    </div>
    <hr>
    <div class="help-block">Your account details are as follows:</div>
    </div>

    
    
    </div>
    </div>

          <div class="userdetails" class="well" >
          <table class="table" table-striped>
 <?php 
         if ($count= $result->num_rows) {

    $rows=$result->fetch_all(MYSQLI_ASSOC);

    foreach ($rows as $row ) 
      {
        ?>
       <tr>
              
              <td class="col-md-2">Name:</td>
              <td class="col-md-2"> <b> <?php echo $row['name'];?> </b></td>

            </tr>
 

            <tr>
              
              <td class="col-md-2"> Email:</td>
              <td class="col-md-2"><b> <?php echo $row['email'];?></b></td>

            </tr>

            


            
    <?php
}
  ?>
            
            
          </table>

 <?php
  }

   ?>
   <hr>
   <div class="container">
        <form method="post" action="depositprocess.php">
            <b>
          <div >
          
          <label for="Full Name">
            <b>Full Name</b>
          </label>
          <div class="row">
          <div class="col-md-2">
            <input type="text" name="Full_name" required='required' 
            >
            
          </div>
          </div>
          </div>

          <div class="form-group">

          <label for="username">
            <b>Confirm Username</b>
          </label>
          <div class="row">
          <div class="col-md-2">
            <input type="text" name="Username" required='required' >
            
          </div>
          </div>
          </div>

          <div class="form-group">

          <label for="email">
            <b>Confirm Email</b>
          </label>
          <div class="row">
          <div class="col-md-2">
            <input type="text" name="email" required='required' >
            
          </div>
          </div>
          </div>


          <div class="form-group">

          <label for="MTCN Number(Western union)">
         <b> MTCN Number(Western Union)</b>
          </label>
          <div class="row">
          <div class="col-md-2">
            <input type="text" name="mtcn" id="MTCN Number (Western union):" class="form-control">
            
          </div>
          </div>
          </div>

          <div class="form-group">

          <label for="Ref Number (Moneygram, Bitcoin):">
           <b> Ref Number(Moneygram,Bitcoin)</b>
          </label>
          <div class="row">
          <div class="col-md-2">
            <input type="text" name="refnumber" id="Ref Number (Moneygram, Bitcoin):" class="form-control">
            
          </div>
          </div>
          </div>

          <div class="form-group">

          <label for="Batch Number (Perfect money)">
           <b> Batch Number(Perfect Money)</b>
          </label>
          <div class="row">
          <div class="col-md-2">
            <input type="text" name="batchnumber" id="Batch Number (Perfect money)" class="form-control">
            
          </div>
          </div>
          </div>

          <div class="form-group">

          <label for="Full Sender Number">
            <b>Full Sender Phone Number</b>
          </label>
          <div class="row">
          <div class="col-md-2">
            <input type="tel" name="fullsendernumber" required='required'
             id="Full Sender Number" class="form-control">
             
          </div>
          </div>
          </div>


          <div class="form-group">

          <label for="Sender country">
            <b>Sender Country</b>
          </label>
          <div class="row">
          <div class="col-md-2">
            <input type="text" name="sendercountry" required='required'
             id="Sender country" class="form-control">
            
          </div>
          </div>
          </div>

          <div class="form-group">

          <label for="Sender city">
           <b> Sender City</b>
          </label>
          <div class="row">
          <div class="col-md-2">
            <input type="text" name="sendercity" required='required'
             id="Sender city" class="form-control">
            
          </div>

          </div>
          </div>

          <div class="container">
          <div class="row">

          <div class="col-md-2">
          <button class="btn btn-info">
           <b> Make Deposit</b>
          </button>
          </div>
         
           </div> 
          </div>
          </b>
        </form>
    </div>

          </div>


    <!-- End: MAIN CONTENT -->
    <!-- Start: FOOTER -->
    
    <!-- End: FOOTER -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/boot-business.js"></script>
  </body>
</html>
