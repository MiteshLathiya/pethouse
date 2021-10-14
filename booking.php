<br><br>
<?php
$mainurl = "http://localhost/pethouse/";
$baseurl = "http://localhost/pethouse/assets/";
?>
<!---->
<link rel="stylesheet" href="<?php echo $baseurl?>css/gray.css" />
<script src='<?php echo $baseurl;?>js/jquery.bvalidator.min.js'></script>
    <script src='<?php echo $baseurl;?>js/default.min.js'></script>
    <script src='<?php echo $baseurl;?>js/gray.js'></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $("#frm").bValidator();


        });
    </script>



  

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $mainurl?>BookDoctor">Back</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Booking</li>
                    </ol>
                </nav>

            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<div class="pt--50">
    <div class="container">



        <div class="slider-header-block tab-header d-flex">
            <div class="block-title">
                <h2>Book Our Doctor</h2>
            </div>
        </div>


       



        <!-- Page Content -->

        <div class="single-slide">
            <div class="pm-product">
                <form method="post"  enctype="multipart/form-data" id="frm">
                    <div class="row">

                        <div class="col-md-4">



                            <?php foreach ($doctordata as $shwdoc1 ) 
						            	{
							
							            ?>

                            <div class="card" style="width: 18rem;">
                                <a href="doctor-profile.html" class="booking-doc-img"></a>
                                <img class="card-img-top" name="dimg" src="admin/<?php echo $shwdoc1['d_image']?>"
                                    alt="Card image cap">
                                <img>
                                </a>
                               <input type="text" name="did" value="<?php echo $shwdoc1['d_id']?>" readonly style="display: none; border: none;">
                             
                                <div class="card-body" style="background-color: whitesmoke;">
                                    <h5 class="card-title">
                                    <input type="text" name="dname" value="<?php echo $shwdoc1['d_name']?>" readonly style="border: none;background-color: whitesmoke;">
                                     
                                    </h5>
                                    <p class="card-text"><i class="fas fa-info-circle"></i>
                                    <input type="text" name="dinfo" value="<?php echo $shwdoc1['d_info']?>" readonly style="border: none;background-color: whitesmoke;">
                                     
                                    </p>
                                    <p class="card-text"><i class="fas fa-map-marker-alt"></i>
                                    <input type="text" name="dadd" value="<?php echo $shwdoc1['d_add']?>" readonly style="border: none;background-color: whitesmoke;">
                                    </p>
                                    <p class="card-text"></i>
                                        <i class="fas fa-rupee-sign"></i>
                                        <input type="text" name="dfee" value="<?php echo $shwdoc1['d_fee']?>" readonly style="border: none;background-color: whitesmoke;">
                                        <br><br>
                                            <input name="bookdoctor"  type="submit" class="btn btn-outline-primary" >  
                         
                            &nbsp&nbsp&nbsp&nbsp&nbsp<a href="<?php echo $mainurl?>DoctorProfile?doctor_id=<?php echo $shwdoc1["d_id"]?>"
                                class="btn btn-outline-primary">View Profile</a>
                                        <br><br>

                                </div>
                            </div>

                            <?php
								} 
								?>
                        </div>

                        <div class="col-md-6">
                       
									
                                    <!-- Personal Information -->
                                    <div class="info-widget">
                                        
                                        <h4 class="card-title">User Information</h4>
                                        <hr />
                                        <div class="row">
                                        <?php foreach ($userdata as $userdata1) {
                                         
                                        ?>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label>First Name</label>
                                                    <input name="unm" value="<?php echo $userdata1["firstname"]?>" data-bvalidator="required,alpha" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label>Last Name</label>
                                                    <input name="ulm" value="<?php echo $userdata1["lastname"]?>" class="form-control" type="text" data-bvalidator="required,alpha">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label>Email</label>
                                                    <input name="uem" class="form-control" value="<?php echo $userdata1["email"]?>" type="email" data-bvalidator="required">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label>Phone</label>
                                                    <input name="umb" class="form-control" value="<?php echo $userdata1["mobile"]?>" type="text" data-bvalidator="required,minlen[10],maxlen[10],digit">
                                                </div>
                                            </div>
                                            <?php 
                                            }
                                            ?>
                                        </div>
                 
                                    </div>
                                    <!-- /Personal Information -->
                                    
                                
                                <br><br>
                            <h3>Select Booking Date</h3>

                            <hr />
                         
                            <input type="datetime-local" name="date2"  data-bvalidator="required">
                           <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
                            
                         
                      

                        </div>



                    </div>
                </form>
            </div>
            </div>


            <!-- /Page Content -->



        </div>
        <!-- /Main Wrapper -->
        <div class="row">
        <div class="col-md-7 col-lg-8">
							<div class="card">
								<div class="card-body">
								
									<!-- Checkout Form -->
									
									<!-- /Checkout Form -->
									
								</div>
							</div>
							
						</div>
                        </div>
    </div>

</div>
<br><br>