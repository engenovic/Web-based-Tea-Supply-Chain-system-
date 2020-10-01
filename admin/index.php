<?php
session_start();
if(!isset($_SESSION['Admin'])) {
	?>
	  <script>
	  alert("You  must first login as the Admin!");
	  window.location="../login/staff_login/index.php";
	  </script>
	  <?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin Dashboard</title>

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

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo" >
                Unilever Tea Ltd.
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                           <li>
														   <a href="menu.php"><i class="fa fa-indent nav_icon"></i>Menu <span class="fa arrow"></span></a>
													 </li>
													 <li>
	                             <a href="message.php"><i class="fa fa-envelope nav_icon"></i>Messaging<span class="fa arrow"></span></a>

	                             <!-- /.nav-second-level -->
	                         </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                                <div class="account-wrap" style="margin-left:750%;margin-Top:10%" >
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/maisy.jpg" alt="Maisy Kipekenei" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Maisy</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/maisy.jpg" alt="Maisy Kipekenei" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Maisy Kipekenei</a>
                                                    </h5>
                                                    <span class="email">maisy@unileverLtd.co.ke</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                                </div>

                                            </div>
                                            <div class="account-dropdown__footer">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
					 <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>


                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php
                                                include_once  'dashb.php';
                                            echo "$Fnum_rows" ;
                                                ?>
                                                </h2>
                                                <span>Registered Farmers</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                            <h2><?php
                                                include_once 'dashb.php';
                                          echo "$Pnum_rows" ;
                                                ?>
                                                </h2>
                                                <span>Tea Supplies</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                            <h2><?php
                                                include_once 'dashb.php';
                                            echo "$Anum_rows" ;
                                                ?>
                                                </h2>
                                                <span>Transactions</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>

									<div>
						<div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->


											  <h3 class="title-5 m-b-35">A. Farmers Package</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Tea Number</th>
                                                <th>Farmer Name</th>
                                                <th>Supplied Tea(KGS)</th>
                                                <th class="text-right">Account Balance</th>
                                                <th class="text-right">Supplied Date</th>
                                                <th class="text-right">Buying Center</th>
                                                <th class="text-right">ID Number</th>
                                                <th class="text-right">Phone Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        include_once 'dashb.php';
																				if(!empty($supplies)){
																					foreach($supplies as $supply) {
	                                            echo "
	                                            <tr>
	                                            <td>{$supply['TeaNumber']}</td>
	                                            <td>{$supply['fullName']}</td>
	                                            <td>{$supply['Total']}</td>
	                                            <td class='text-right'>Khs.{$supply['Balance']}</td>
	                                            <td class='text-right'>{$supply['Date']}</td>
	                                            <td class='text-right'>{$supply['CenterID']}</td>
	                                            <td class='text-right'>{$supply['IDNumber']}</td>
	                                            <td class='text-right'>{$supply['Phone']}</td>

	                                         </tr>
	                                            ";
	                                           }
																				}
																				else{
                                        echo "No Supplies found!";
																				}

                                        ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
						</div>
                        <hr>
					<h2> B. Farmer Transactions</h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Transaction ID</th>
                                                <th>Farmer Name</th>
                                                <th>Date</th>
                                                <th class="text-right">Transaction Type</th>
                                                <th class="text-right">Amount</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        include_once 'dashb.php';
																				if(!empty($trans)){
																					foreach($trans as $ts) {
																							echo "

																							<tr>
																							<td>{$ts['TransID']}</td>
																							<td>{$ts['fullName']}</td>
																							<td>{$ts['Date']}</td>
																							<td class='text-right'>{$ts['TransType']}</td>
																							<td class='text-right'>Kshs.{$ts['Amount']}</td>
																					 </tr>
																							";
																						 }
																				}
																				else{
                                      echo "No Transactions found!";
																				}

                                        ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                                            <hr>
						       <h2> C. Staff Allocation </h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Collection ID</th>
                                                <th>Driver</th>
                                                <th>Clerk</th>
                                                <th class="text-right">Center Name</th>
                                                <th class="text-right">Date</th>
												<th class="text-right">Vehicle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        include_once 'dashb.php';
																				if(!empty($staffs)){
																					foreach($staffs as $staff) {
	                                            echo "

	                                            <tr>
	                                            <td>{$staff['CollectionID']}</td>
	                                            <td>{$staff['Driver']}</td>
	                                            <td>{$staff['Clerk']}</td>
	                                            <td class='text-right'>{$staff['Center']}</td>
	                                            <td class='text-right'>{$staff['Date']}</td>
	                                            <td class='text-right'>Kshs.{$staff['CarNumber']}</td>
	                                         </tr>
	                                            ";
	                                           }
																				}
																				else{
                                        echo "No Allocations Made!";
																				}

                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <h4> D. Staff Data and Financial Info </h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- USER DATA-->
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i> Staff data</h3>
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>Staff ID</td>
                                                    <td>Name</td>
                                                    <td>Role</td>
                                                    <td>Change Status</td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            include_once 'dashb.php';
																						if(!empty($users)){
																							foreach($users as $user)
																							{
																									echo "<tr>
																									<td>
																											<label class='au-checkbox'>
																													<input type='checkbox'>
																													<span class='au-checkmark'></span>
																											</label>
																									</td>
																									<td>
																									<div class='table-data__info'>
																									<h6>{$user['StaffID']}</h6>
																									</td>
																							</div>
																									<td>
																											<div class='table-data__info'>
																													<h6>{$user['Name']}</h6>
																													<span>
																															<a href='#'>{$user['Role']}</a>
																													</span>
																											</div>
																									</td>
																									<td>
																											<div class='rs-select2--trans rs-select2--sm'>
																													<select class='select' id={$user['StaffID']} name='property'>
																															<option selected='selected'>Access</option>
																															<option value=''>Remove</option>
																													</select>
																													<div class='dropDownSelect2'></div>
																											</div>
																									</td>
																									<td>
																											<span class='more'>
																													<i class='zmdi zmdi-more'></i>
																											</span>
																									</td>
																							</tr>";
																							}
																						}
																						else{
                                          echo "No Registered Users yet!";
																						}

                                            ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div><a titlt= "print screen" alt="print screen";
                                    onclick= "window.print();" target="_blank"
                                    style="cursor:pointer;">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i name="print" ></i>PRINT</button></a>
                                <!-- END USER DATA-->
															</div>
	                            <hr>
	                            <div class="col-lg-6">
	                                <!-- TOP MPESA-->
	                                <div class="top-campaign">
	                                    <h3 class="title-3 m-b-30"> KSHS::MPESA Withdrawals</h3>
	                                    <div class="table-responsive">
	                                        <table class="table table-top-campaign">
	                                        <thead>
	                                                <tr>
	                                                   <td><h3>Code</h3></td>
	                                                    <td><h3>Date</h3></td>
	                                                   <td> <h3>Amount</h3></td>
																										 <td> <h3>Status</h3></td>


	                                                </tr>
	                                                <hr>
	                                            </thead>
	                                            <tbody>
	                                            <?php
	                                            include_once  'dashb.php';
																							if(!empty($mpesas)){
																								foreach($mpesas as $mpesa){
		                                                echo"<tr>
		                                                <td>{$mpesa['RefCode']}</td>
		                                                <td>{$mpesa['Time']}</td>
		                                                <td>{$mpesa['Amount']}</td>
		                                                <td>{$mpesa['Status']}</td>

		                                                </tr>";
		                                            }
																							}
																							else{
                                              echo " No MPESA Transactions found!";
																							}

	                                            ?>

	                                            </tbody>
	                                        </table>
	                                    </div>
	                                </div>
	                                <!--  END MPESA-->
	                            </div>
	                        </div>



                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <hr>
                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2020 Unilever Tea Ltd. All rights reserved. Designed by Admin</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

//change
$(".select").on("change",(e)=>{


var userid=e.target.id;

$.post("deleteProduct.php",{userid:userid}).done((res)=>{

    alert(res);
    location.reload(true);

})

})
   })

</script>
</body>

</html>
<!-- end document-->
