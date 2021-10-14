<br><br>

<div class="pt--50">
    <div class="container">

        <div class="slider-header-block tab-header d-flex">
            <div class="block-title">
                <h2>Book Our Doctor</h2>
            </div>
        </div>


        <div class="tab-content pm-slider-tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="petmark-slick-slider border grid-column-slider  arrow-type-two" data-slick-setting='{
                            "autoplay": true,
                            "autoplaySpeed": 1500,
                            "slidesToShow": 3,
                            "rows" :1,
                            "arrows": true
                        }' data-slick-responsive='[
                            {"breakpoint":991, "settings": {"slidesToShow": 3} },
                            {"breakpoint":768, "settings": {"slidesToShow": 5} },
                            {"breakpoint":480, "settings": {"slidesToShow": 1,"rows" :1} }
                        ]'>
                        <?php
											foreach ($shwdoc as $shwdoc1) {
											
											
											?>
                    <div class="single-slide">
                        
                        <div class="pm-product">
                            <div class="image">
                                <img src="admin/<?php echo $shwdoc1['d_image']?>" style="width:300px;height:200px;"
                                    alt=""></a>
                            </div>
                            <div class="pro-content">

                                <h3 class="title">

                                    <a href="doctor-profile.html" tabindex="0"><?php echo $shwdoc1['d_name']?></a>
                                    <i class="fas fa-check-circle" style="color:green"></i>
                                </h3>
                                <p class="speciality"><?php echo $shwdoc1['d_info']?></p>

                                <ul class="available-info">

                                    <li>
                                        <i class="fas fa-map-marker-alt"></i> <?php echo $shwdoc1['d_add']?>

                                    </li>
                                    <li>
                                        <i class="far fa-clock"></i>&nbsp&nbspAvailable on
                                        <?php echo $shwdoc1['d_date']?>
                                    </li>
                                    <li>
                                        <i class="far fa-money-bill-alt"></i>&nbsp$<?php echo $shwdoc1['d_fee']?>
                                        <i class="fas fa-info-circle" data-toggle="tooltip" title=""
                                            data-original-title="Lorem Ipsum"></i>
                                    </li>
                                </ul>

                                <br>

                                <?php
                                    if(!isset($_SESSION["id"]))
                                    {
                                    ?>
                                <div class="btn-block">
                                    <a href="<?php echo $mainurl?>Login1" class="btn btn-outlined btn-rounded">Book
                                        Now</a>
                                    <a href="<?php echo $mainurl?>DoctorProfile"
                                        class="btn btn-outlined btn-rounded">View Profile</a>
                                </div>
                                <?php
                                    }
                                    else
                                    {
                                ?>
                                <div class="btn-block">
                                    <a href="<?php echo $mainurl?>Booking?doctor_details_id=<?php echo $shwdoc1["d_id"];?>"
                                        class="btn btn-outlined btn-rounded">Book
                                        Now</a>
                                    <a href="<?php echo $mainurl?>DoctorProfile?doctor_id=<?php echo $shwdoc1["d_id"];?>"
                                        class="btn btn-outlined btn-rounded">View Profile</a>
                                </div>
                                <?php
                                        }   
                                ?>
                                <br>
                            </div>
                        </div>
                       
                    </div>
                    <?php
											}
											?>
                </div>
            </div>


        </div>

    </div>

</div>
<br><br><br><br><br>