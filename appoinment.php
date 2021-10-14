<?php

$mainurl = "http://localhost/pethouse/";
$baseurl = "http://localhost/pethouse/assets/";
?>
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
                            {"breakpoint":768, "settings": {"slidesToShow": 2} },
                            {"breakpoint":480, "settings": {"slidesToShow": 1,"rows" :1} }
                        ]'>

                    <div class="single-slide">
                    
                        <div class="pm-product">
                            <div class="image">
                                <a href="product-details.php"><img
                                        src="<?php echo $baseurl ?>image/product/home-1/product-7.jpg" alt=""></a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="doctor-profile.html" tabindex="0">Ruby Perrin</a>
                                    <i class="fas fa-check-circle" style="color:green"></i>
                                </h3>
                                <p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
                                <div class="rating" style="color:orange">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span class="d-inline-block average-rating" style="color:black">(17)</span>
                                </div>
                                <ul class="available-info">
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i> Florida, USA
                                    </li>
                                    <li>
                                        <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                    </li>
                                    <li>
                                        <i class="far fa-money-bill-alt"></i> $300 - $1000
                                        <i class="fas fa-info-circle" data-toggle="tooltip" title=""
                                            data-original-title="Lorem Ipsum"></i>
                                    </li>
                                </ul>
                                <br>
                                <div class="btn-block">
                                       <a href="" class="btn btn-outlined btn-rounded">Book Now</a>
                                    <a href="<?php echo $mainurl?>DoctorProfile" class="btn btn-outlined btn-rounded">View Profile</a>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                   
                    <!-- <div class="single-slide">
                        <div class="pm-product">
                            <div class="image">
                                <a href="product-details.php"><img
                                        src="<?php echo $baseurl ?>image/product/home-1/product-7.jpg" alt=""></a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="doctor-profile.html" tabindex="0">Ruby Perrin</a>
                                    <i class="fas fa-check-circle" style="color:green"></i>
                                </h3>
                                <p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
                                <div class="rating" style="color:orange">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span class="d-inline-block average-rating" style="color:black">(17)</span>
                                </div>
                                <ul class="available-info">
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i> Florida, USA
                                    </li>
                                    <li>
                                        <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                    </li>
                                    <li>
                                        <i class="far fa-money-bill-alt"></i> $300 - $1000
                                        <i class="fas fa-info-circle" data-toggle="tooltip" title=""
                                            data-original-title="Lorem Ipsum"></i>
                                    </li>
                                </ul>
                                <br>
                                <div class="btn-block">
                                    <a href="" class="btn btn-outlined btn-rounded">Book Now</a>
                                    <a href="cart.php" class="btn btn-outlined btn-rounded">View Profile</a>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product">
                            <div class="image">
                                <a href="product-details.php"><img
                                        src="<?php echo $baseurl ?>image/product/home-1/product-7.jpg" alt=""></a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="doctor-profile.html" tabindex="0">Ruby Perrin</a>
                                    <i class="fas fa-check-circle" style="color:green"></i>
                                </h3>
                                <p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
                                <div class="rating" style="color:orange">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span class="d-inline-block average-rating" style="color:black">(17)</span>
                                </div>
                                <ul class="available-info">
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i> Florida, USA
                                    </li>
                                    <li>
                                        <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                    </li>
                                    <li>
                                        <i class="far fa-money-bill-alt"></i> $300 - $1000
                                        <i class="fas fa-info-circle" data-toggle="tooltip" title=""
                                            data-original-title="Lorem Ipsum"></i>
                                    </li>
                                </ul>
                                <br>
                                <div class="btn-block">
                                    <a href="cart.php" class="btn btn-outlined btn-rounded">Book Now</a>
                                    <a href="cart.php" class="btn btn-outlined btn-rounded">View Profile</a>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product">
                            <div class="image">
                                <a href="product-details.php"><img
                                        src="<?php echo $baseurl ?>image/product/home-1/product-7.jpg" alt=""></a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="doctor-profile.html" tabindex="0">Ruby Perrin</a>
                                    <i class="fas fa-check-circle" style="color:green"></i>
                                </h3>
                                <p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
                                <div class="rating" style="color:orange">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span class="d-inline-block average-rating" style="color:black">(17)</span>
                                </div>
                                <ul class="available-info">
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i> Florida, USA
                                    </li>
                                    <li>
                                        <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                    </li>
                                    <li>
                                        <i class="far fa-money-bill-alt"></i> $300 - $1000
                                        <i class="fas fa-info-circle" data-toggle="tooltip" title=""
                                            data-original-title="Lorem Ipsum"></i>
                                    </li>
                                </ul>
                                <br>
                                <div class="btn-block">
                                    <a href="cart.php" class="btn btn-outlined btn-rounded">Book Now</a>
                                    <a href="cart.php" class="btn btn-outlined btn-rounded">View Profile</a>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product">
                            <div class="image">
                                <a href="product-details.php"><img
                                        src="<?php echo $baseurl ?>image/product/home-1/product-7.jpg" alt=""></a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="doctor-profile.html" tabindex="0">Ruby Perrin</a>
                                    <i class="fas fa-check-circle" style="color:green"></i>
                                </h3>
                                <p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
                                <div class="rating" style="color:orange">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span class="d-inline-block average-rating" style="color:black">(17)</span>
                                </div>
                                <ul class="available-info">
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i> Florida, USA
                                    </li>
                                    <li>
                                        <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                    </li>
                                    <li>
                                        <i class="far fa-money-bill-alt"></i> $300 - $1000
                                        <i class="fas fa-info-circle" data-toggle="tooltip" title=""
                                            data-original-title="Lorem Ipsum"></i>
                                    </li>
                                </ul>
                                <br>
                                <div class="btn-block">
                                    <a href="cart.php" class="btn btn-outlined btn-rounded">Book Now</a>
                                    <a href="cart.php" class="btn btn-outlined btn-rounded">View Profile</a>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div> -->


                </div>
            </div>


        </div>

    </div>

</div>
<br><br><br><br><br>