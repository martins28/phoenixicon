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
    <title>PhoenixIcon|Withdrawals</title>
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
               <li> <a href="account.php" >Account</a></li>
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
  <div class="panel panel-default">
    <div class="panel-heading">
    <div class="container">
    <div class="col-md-6" class="pull-right"> 
    <div class="row">
    <h3 class="panel-title"><b>CONFIRM WITHDRAWAL </b></h3>
    <hr>

      
      </div>

    <div class="row">
    <div class="help-block">Your Request will be processed within 24 hours.<hr>
    <h4>Withdrawal by <span><b>Moneygram</b> or <b>Western union</b> is sent to 
    <b>name registered on account</b></span></h4>
    
    <hr>
    Please Contact Customer Care for any complaint: contact@phoenixicon.com
    </div>

    <div >

          <span><h4>Your withdrawal will be evaluated by our account section 
          and confirmed before it could be wired to you either via:</h4></span>
          <hr>
          <ul>
            
            <li>Bitcoin</li><hr>
            <li>MoneyGram</li><hr>
            <li>Western Union</li><hr>
            <li>Perfect Money.</li>
          </ul>
        </div>

    <hr>
    
    </div>

    
    
    </div>
    </div>

          <div class="well" >
          <table class="table" table-striped>
 <?php 
         if ($count= $result->num_rows) {

    $rows=$result->fetch_all(MYSQLI_ASSOC);

    foreach ($rows as $row ) 
      {
        ?>
       <tr>
              
              <td class="col-md-2">Name:</td>
              <td class="col-md-2"> <b> <?php echo $row['name'];?></b></td>
            </tr>
 

            <tr>
              
              <td class="col-md-2"> Email:</td>
              <td class="col-md-2"><b> <?php echo $row['email'];?></b></td>

            </tr>

            <tr>
              
              <td class="col-md-2">Address</td>
              <td class="col-md-2"><b> <?php echo $row['address'];?></b></td>

            </tr>

            <tr>
              
              <td class="col-md-2">Available Balance:</td>
              <td class="col-md-2"><b>  <?php echo $row['Account_Balance'];?></b></td>

            </tr>

            


            
    <?php
}
  ?>
            
            
          </table>

 <?php
  }

   ?>
   <hr>
   <div class="container" class="col-md-2">
        <form method="post" action="withdrawprocess.php">

      
        <div class="form-group">

          <label for="Mode Of Withdrawal">
            Mode Of Withdrawal
          </label>
          <div class="row">
          <div class="col-md-2">
            <select name="withdrawal_method" onchange="" size="1">
                    <option value="Western Union">Western Union</option>
                    <option value="Moneygram">Moneygram</option>
                    <option value="Bitcoin">Bitcoin</option>
                    <option value="Perfect Money">Perfect Money</option>
                    </select>
          </div>
          </div>
          </div>
            
          <div class="form-group">

          <label for="Amount To Withdraw">
            Amount To Withdraw
          </label>
          <div class="row">
          <div class="col-md-2">
            <input type="text" name="Amount_to_withdraw" required='required' 
            id="Amount To Withdraw" class="form-control">
            
          </div>
          </div>
          </div>

          <div class="form-group">

          <label for="Beneficiary Name">
          Beneficiary Name (For Western Union and Moneygram Transactions):
          </label>
          <div class="row">
          <div class="col-md-2">
            <input type="text" name="Beneficiary_name"  id="Beneficiary Name" class="form-control">
            
          </div>
          </div>
          </div>

          


          <div class="form-group">

          <label for="Bitcoin Address">
            Bitcoin Address
          </label>
          <div class="row">
          <div class="col-md-2">
            <input type="text" name="bitcoin_address" id="Bitcoin Address" class="form-control">
            
          </div>
          </div>
          </div>

          <div class="form-group">

          <label for="Perfect Money Account">
            Perfect Money Account
          </label>
          <div class="row">
          <div class="col-md-2">
            <input type="text" name="perfect_money_account" 
            id="Perfect Money Account" class="form-control">
            
          </div>
          </div>
          </div>

          



          <div class="container">
          <button class="btn btn-info">
            Submit Request
          </button>
            
          </div>
        </form>
    </div>

          </div>



          </div>


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
