<link rel="stylesheet" href="<?php echo $baseurl?>css/gray.css" />
<script src='<?php echo $baseurl;?>js/jquery.bvalidator.min.js'></script>
    <script src='<?php echo $baseurl;?>js/default.min.js'></script>
    <script src='<?php echo $baseurl;?>js/gray.js'></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $("#frm3").bValidator();


        });
    </script>
<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo $mainurl?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">My Account</li>
        </ol>
    </div>
</nav>
<?php foreach ($userdata as $userdata1) {
   
   ?>
<div class="page-section sp-inner-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <!-- My Account Tab Menu Start -->
                    <div class="col-lg-3 col-12">
                        <div class="myaccount-tab-menu nav" role="tablist">
                            <a href="#dashboad" class="active" data-toggle="tab"><i class="fas fa-tachometer-alt"></i>
                                Dashboard</a>

                            <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>

                            <a href="#download" data-toggle="tab"><i class="fas fa-download"></i> Download</a>

                            <!-- <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i> Payment
                                Method</a> -->

                            

                            <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account Details</a>

                            <a href="<?php echo $mainurl;?>?lgout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </div>
                    </div>
                    <!-- My Account Tab Menu End -->

                    <!-- My Account Tab Content Start -->
                    <div class="col-lg-9 col-12 mt--30 mt-lg-0">
                        <div class="tab-content" id="myaccountContent">
                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Dashboard</h3>

                                    <div class="welcome mb-20">
                                        <p>Hello, <strong><h3><?php echo $userdata1['firstname']?>&nbsp;&nbsp;<?php echo $userdata1['lastname']?></h3></strong> And <strong><a
                                                href="<?php echo $mainurl;?>?lgout" class="logout"> Logout Here</a></p></strong>
                                    </div>

                                    <p class="mb-0">From your account dashboard. you can easily check &amp; view your
                                        recent orders, manage your shipping and billing addresses and edit your
                                        password and account details.</p>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->

                            <!-- Single Tab Content Start -->
                           
                            <div class="tab-pane fade" id="orders" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Orders</h3>

                                    <div class="myaccount-table table-responsive text-center">
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <?php foreach ($wishlist as $wishlist1) {
                                               
                                               ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $wishlist1['cartid']?></td>
                                                    <td><?php echo $wishlist1['productname']?></td>
                                                    <td><?php echo $wishlist1['added_date']?></td>
                                                    <td> <?php echo $wishlist1['status']?></td>
                                                    <td>Rs.<?php echo $wishlist1['subtotal']?></td>
                                                    <td><a href="<?php echo $mainurl?>Cart?product_id=<?php echo $wishlist1["pid"];?>" class="btn">View</a></td>
                                                </tr>
                                                
                                            </tbody>
                                            <?php 
                            }
                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                          
                            <!-- Single Tab Content End -->

                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="download" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Downloads</h3>
                                    
                                    <div class="myaccount-table table-responsive text-center">
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Date</th>
                                                    <th>Expire</th>
                                                    <th>Download</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                            <?php foreach ($wishlist as $wishlist1) {
                                               
                                               ?>
                                                <tr>
                                                    <td><?php echo $wishlist1["pname"]?></td>
                                                    <td><?php echo $wishlist1["added_date"]?></td>
                                                    <td>Yes</td>
                                                    <td><a href="#" class="btn">Download File</a></td>
                                                </tr>
                                                <?php
                                    }
                                    ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                   
                                </div>
                            </div>
                            <!-- Single Tab Content End -->

                            <!-- Single Tab Content Start -->
                            <!-- <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Payment Method</h3>

                                    <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                </div>
                            </div> -->
                            <!-- Single Tab Content End -->

                            <!-- Single Tab Content Start -->
                            
                            <!-- Single Tab Content End -->

                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="account-info" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Account Details</h3>

                                    <div class="account-details-form">
                                        <form action="" method="post" id="frm3">
                                            <div class="row">
                                                <div class="col-lg-6 col-12 mb-30"><h6>Enter Firstname</h6>
                                                    <input id="first-name" name="fn" value="<?php echo $userdata1['firstname']?>" data-bvalidator="required,alpha" placeholder="First Name" type="text" data-bvalidator="required,alpha">
                                                </div>

                                                <div class="col-lg-6 col-12 mb-30"><h6>Enter Lastname</h6>
                                                    <input id="last-name" name="ln" value="<?php echo $userdata1['lastname']?>" placeholder="Last Name" type="text" data-bvalidator="required,alpha">
                                                </div>

                                                <div class="col-12 mb-30"><h6>Enter Email</h6>
                                                    <input id="email" name="em" value="<?php echo $userdata1['email']?>" placeholder="Email Address" type="email" data-bvalidator="required">
                                                </div>

                                                <div class="col-12 mb-30"><h6>Enter Mobile</h6>
                                                    <input id="email"  name="mb" value="<?php echo $userdata1['mobile']?>" placeholder="Mobile" type="mobile" data-bvalidator="required">
                                                </div>

                                                <div class="col-12">
                                                <input type="submit" name="update" value="Update">
                                                  
                                                </div>

                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <!-- Single Tab Content End -->
                        </div>
                    </div>
                    <!-- My Account Tab Content End -->
                </div>

            </div>
        </div>
    </div>
</div>
<?php
}
?>

