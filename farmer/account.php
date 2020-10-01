<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Unilever::Farmer's Account</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                       <a href="../home/index.php" style="color:white">
                                  Home Page
                                </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">My Account:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="../login/logout.php">Logout</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span> </span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- MY PROFILE-->
		 <div class="col-lg-6">
                                    <div class="card-header">
                                      My Profile
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <?php
                                        include 'display.php';
                                            echo "
                                           <div class='row form-group'>
                                                <div class='col col-sm-5'>
                                                    <label for='input-small' class=' form-control-label'><strong>Tea Number:</strong></label>
                                                </div>
                                                <span class='help-block'>{$TeaNumber}</span>
                                            </div>
                                            <div class='row form-group'>
                                                <div class='col col-sm-5'>
                                                    <label for='input-small' class=' form-control-label'><strong>Full Name:</strong></label>
                                                </div>
                                                <span class='help-block'>{$fname}  {$lname}</span>
                                            </div>
                                            <div class='row form-group'>
                                                <div class='col col-sm-5'>
                                                    <label for='input-small' class=' form-control-label'><strong>Phone Number:</strong></label>
                                                </div>
                                                <span class='help-block'>{$phone}</span>
                                            </div>
                                            <div class='row form-group'>
                                                <div class='col col-sm-5'>
                                                    <label for='input-small' class=' form-control-label'><strong>ID Number:</strong></label>
                                                </div>
                                                <span class='help-block'>{$IDNumber}</span>
                                            </div>
                                            <div class='row form-group'>
                                                <div class='col col-sm-5'>
                                                    <label for='input-small' class=' form-control-label'><strong>Buying Center:</strong></label>
                                                </div>
                                                <span class='help-block'>{$Center}</span>
                                            </div>
                                            ";
                                        ?>


                                        </form>
                                    </div>
                                </div>
                                <div>
                                                <a href="updateProfile.php"><button id="payment-button" type="button" class="btn btn-lg btn-info btn-block>
                                                    <span id="payment-button-amount style=width="size:300px">Update My Information</span>

                                                </button>
                                            </a>
                                            </div>
            <!-- END PROFILE-->
            <!-- MY MESSAGES-->
			<hr>
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Messages</h3>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Date</th>

                                                <th>Message</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        include_once 'display.php';
                                        if(!empty($messes)){
                                          foreach($messes as $msg) {

                                              echo "
                                              <tr>
                                              <td>{$msg['Date']}</td>
                                              <td>{$msg['Message']} </td>

                                           </tr>
                                              ";
                                             }
                                           }
                                             else{
                                               echo "You have no Messages";
                                             }


                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            <!-- END OF MY MESSAGES-->
            <!-- MY SUPPLIES-->
			<hr>
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">My Supplies</h3>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Date</th>

                                                <th>KGS</th>
                                                <th class="text-right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        include_once 'display.php';
                                        if(!empty($kgs)){
                                          foreach($kgs as $kg) {

                                              echo "
                                              <tr>
                                              <td>{$kg['Date']}</td>
                                              <td>{$kg['Kilograms']} KGS.</td>
                                              <td >{$kg['Total']} KGS.</td>

                                           </tr>
                                              ";
                                             }
                                           }
                                             else{
                                               echo "No Supplies Found!";
                                             }


                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            <!-- END OF MY SUPPLIES-->

            <!-- My PAYMENTS-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Transactions History</h3>
							<div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>

                                                <th>Date</th>
                                                <th>Amount</th>
                                                <th>Type</th>
												<th>Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										include_once 'display.php';
                    if(!empty($moneys)){
                      foreach($moneys as $money){
  											echo "<tr>
                                                  <td>{$money['Date']}</td>
                                                  <td>Kshs.{$money['Amount']}</td>
                                                  <td>{$money['TransType']}</td>
  												<td>Kshs.{$money['Balance']}</td>
                                              </tr>";
  										}

                    }
                    else{
                      echo "No Transactions Yet!";
                    }

										?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
							<div class="col-md-6 col-lg-3">
										<hr>
										 <div class="card-title">
                                      <h3 class="text-center title-2">Your Current Balance:</h3>
											<?php

                                                echo "<h3 id='balance'>KES. $Balance</h3>"?>
                                        </div>
                                        <hr>
                                        <form>
										 <?php
										 include_once 'display.php';
                     if(!empty($moneys)){
                       echo "
  										 <div class='form-group'>
                                                  <label for='cc-payment' class='control-label mb-1'>Enter Amount to Withdraw</label>
                                                  <input id='w-amount' name='amount' type='text' class='form-control' aria-required='true' aria-invalid='false' value=''>
                                              </div>
                                              <div>
                                                  <button id='payment-button1' type='submit' class='btn btn-lg btn-info btn-block'>
                                                      <i class='fa fa-lock fa-lg'></i>&nbsp;
                                                      <span id='payment-button-amount'>Withdraw</span>
                                                      <span id='payment-button-sending' style='display:none;''>Sending…</span>
                                                  </button>
                                              </div>
                                          </form>
                          </div>
                          </div>

  											";

                     }
                     else{
                       echo "";
                     }

										 ?>


                        <a titlt= "print screen" alt="print screen";
                                    onclick= "window.print();" target="_blank"
                                    style="cursor:pointer;">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i name="print" ></i>PRINT</button></a>
            <!-- END PAYMENTS->

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2020 Unilever Tea Ltd. All rights reserved. Designed by Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script type="text/javascript">

        $(document).ready(function(){
  $("#payment-button1").on("click",function(e){


e.preventDefault();
    var balance=parseInt($("#balance").text());
    var amount=parseInt($("#w-amount").val());
    var phone=$("#w-phone").val();

  if(amount>balance) {
    alert("Your have insufficient balance")
  }else {

    $.post("withdraw.php",{balance:balance,amount:amount,phone:phone}).done(function(res){

        alert(res);

        location.reload(true);
    })
  }
  })
        })
    </script>

</body>

</html>
<!-- end document-->
