<?php
require 'displayMenu.php';

?>
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
    <title>Unilever: Admin Menu</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
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
<body>
 <li class="list-inline-item active">
                                            <a href="index.php">Dashboard</a>
                                        </li>
                                        <div class="col-lg-9">
                                                                     <div class="col-lg-5" style="margin-left: 300px">
                                                                         <div class="card-header">
                                                                            <h2> <strong>Manage Staff</strong></h2>
                                                                         </div>
                                                                         <div class="card-body card-block">
                                                                             <form action="AddStaff.php" method="post" class="form-horizontal">

                                                                                 </div>
                                                                                 <div class="row form-group">
                                                                                     <div class="col col-md-12">
                                                                                         <div class="input-group">
                                                                                             <input type="text" id="input2-group2" name="fullname" placeholder="Full Name" class="form-control">

                                                                                         </div>
                                                                                     </div>
                                                                                 </div>
                                                                                 <div class="radio">
                                                                                     <label for="radio1" class="form-check-label ">
                                                                                         <input type="radio" id="fruit" name="role" value="Driver" class="form-check-input">Driver
                                                                                     </label>
                                                                                 </div>
                                                                                  <div class="radio">
                                                                                     <label for="radio1" class="form-check-label ">
                                                                                         <input type="radio" id="fruit" name="role" value="Clerk" class="form-check-input">Clerk
                                                                                     </label>
                                                                                 </div>
                                                                                 <div class="row form-group">
                                                                                     <div class="col col-md-12">
                                                                                         <div class="input-group">
                                                                                             <input type="text" id="input2-group2" name="username" placeholder="Username" class="form-control">

                                                                                         </div>
                                                                                     </div>
                                                                                 </div>
                                                                                 <div class="row form-group">
                                                                                     <div class="col col-md-12">
                                                                                         <div class="input-group">

                                                                                             <input type="password" id="input3-group2" name="password" placeholder="Password" class="form-control">

                                                                                         </div>
                                                                                     </div>
                                                                                     <span> <div class="input-group-btn"><button type="submit" name="submit" class="btn btn-success btn-sm" style="width: 200px">
                                                                                         <i ></i> Register
                                                                                     </button>



                                                                                 </div>
                                                                             </form>
                                                                         </div>

                                                                     </div>
   <div class="col-lg-9">
                                <div class="col-lg-10" style="margin-left: 300px">
                                    <div class="card-header">
                                      <h2>  <strong> Add Tea Collection</strong></h2>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="credit.php" method="post" class="form-horizontal">

                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <div class="input-group">
                                                        <input type="text" id="input2-group2" name="tnumber" placeholder="Tea Number" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="col col-md-12">
                                                    <div class="input-group">
                                                        <input type="date" id="input2-group2" name="date" placeholder="Date" class="form-control">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">

                                                <div class="col col-md-12">
                                                    <div class="input-group">

                                                        <input type="number" id="input3-group2" name="kgs" placeholder="Kilograms" class="form-control">

                                                    </div>
                                                </div>


        <label for="c2">Price Per KG</label>
    <div class="input-group">
        <span class="input-group-addon">KSHS.</span>
        <input type="number" name="price" value="30" min="0" step="0.10" data-number-to-fixed="2" data-number-stepfactor="1" class="form-control currency" id="c2" />

                                                <span> <div class="input-group-btn"><button type="submit" name="credit" class="btn btn-success btn-sm" style="width: 200px">
                                                    <i ></i> Credit
                                                </button>




                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                                 <div class="col-lg-10" style="margin-left: 300px">
                                <div class="card">
                                    <div class="card-header">
                                      <h2>  <strong> Allocate Staff</strong></h2>
                                    </div>
                                    <div class="card-body card-block">
                                        <form class="form-horizontal" method="POST" action="collect.php">

                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <div class="input-group my-2">
                                                      <label>Select Date</label>
                                                        <input type="date" id="input2-group3" name="date" placeholder="Date" class="form-control">
                                                    </div>
                                                    <div class="input-group my-2">
                                                        <input type="text" id="input2-group3" name="vnumber" placeholder="Vehicle Number" class="form-control">
                                                    </div>

                                                <div class="row form-group mt-3">
                                        <label>Choose Driver</label>
                                               <select name="driver" class="form-control mt-3">
                                               <option>
                                              Select Driver
                                               </option>
                                             <?php
                                               foreach($Drivers as $Driver) {
                                                 echo "<option value=\"{$Driver['StaffID']}\" >{$Driver['Name']}</option>";
                                               }
                                               ?>
                                               </select>
                                            </div>

                                            <div class="row form-group mt-3">
                                    <label>Choose Clerk</label>
                                           <select name="clerk" class="form-control mt-3">
                                           <option>
                                          Select Clerk
                                           </option>
                                         <?php
                                           foreach($clerks as $clerk) {
                                             echo "<option value=\"{$clerk['StaffID']}\">{$clerk['Name']}</option>";
                                           }
                                           ?>
                                           </select>
                                        </div>
                                        <div class="row form-group mt-3">
                                <label>Choose Buying center</label>
                                       <select name="bcenter" class="form-control mt-3">
                                       <option>
                                      Select Buying center
                                       </option>
                                     <?php
                                       foreach($bcenters as $bcenter) {
                                         echo "<option>{$bcenter['CenterName']}</option>";
                                       }
                                       ?>
                                       </select>
                                    </div>
                                                </div>
                                            </div>


                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success btn-sm" name="add" style="width: 200px">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
  </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2020 Unilever Tea Ltd. All rights reserved. Designed by Admin</p>
                                </div>
                            </div>
                        </div>
</body>
</html>
