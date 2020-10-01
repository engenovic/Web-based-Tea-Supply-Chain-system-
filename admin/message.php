
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
    <title>Admin:: Messaging</title>

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
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                           <li>
														   <a href="menu.php"><i class="fa fa-indent nav_icon"></i>Menu <span class="fa arrow"></span></a>
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




											  <h3 class="title-5 m-b-60">INBOX</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Tea Number</th>
																								  <th>Time</th>

                                                <th class="text-right">Type</th>
																								  <th ><c>Message</c></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        include_once 'dashb.php';
                                        foreach($messes as $mess) {
                                            echo "
                                            <tr>
                                            <td>{$mess['TeaNumber']}</td>
																						<td >{$mess['Date']}</td>

                                            <td >{$mess['Type']}</td>

                                               <td >{$mess['Message']}</td>
                                         </tr>
                                            ";
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
												<div class="col-lg-5" style="margin-left: 300px">
														<div class="card-header">
															 <h2> <strong>Compose SMS</strong></h2>
														</div>
														<div class="card-body card-block">
																<form action="reply.php" method="post" class="form-horizontal">

																		</div>
																		<div class="row form-group">
																			<div class="col col-lg-5">
																					<div class="input-group">

																							<input type="text" id="input3-group2" name="tnumber" placeholder="Tea Number" class="form-control" style="height: 50px">

																					</div>
																			</div>
																		</div>


																		<div class="row form-group">
																				<div class="col col-lg-5">
																						<div class="input-group">

																								<input type="message" id="input3-group2" name="message" placeholder="Message" class="form-control" style="height: 100px">

																						</div>
																				</div>
																				<span> <div class="input-group-btn"><button type="submit" name="mess" class="btn btn-success btn-sm" style="width: 100px;height:50px">
																						<i ></i> SEND MESSAGE
																				</button>



																		</div>
																</form>
														</div>

												</div>

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
