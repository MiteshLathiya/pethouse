<link href="<?php echo $baseurl?>css/product.css" rel="stylesheet">
<link href="<?php echo $baseurl?>css/productbootstrap.min.css" rel="stylesheet">
<script src="<?php echo $baseurl?>js/product.min.js"></script>
<script src="<?php echo $baseurl?>js/product-font-awesome.min.css"></script>
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="text-left logo p-2 px-5"> <img src="<?php echo $baseurl?>image/main-logo.png"> </div>
                <div class="invoice p-5">
                    <?php foreach ($userdata as $userdata1) 
                        {
                        ?>
                    <h5>Your order Confirmed!</h5> <span class="font-weight-bold d-block mt-4">Hello, <?php echo $userdata1["firstname"]?></span>
                  
                    <span>You order has been confirmed and will be shipped in next two days!</span>
                    
                    <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                
                            
                                <tr>
                                    
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">User Mobile</span>
                                            <span><?php echo $userdata1["mobile"]?></span> </div>
                                    </td>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Payment</span> <span class="fa fa-money">COD</span> </div>
                                    </td>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Shiping Address</span>
                                            <span><?php echo $userdata1["address"]?></span> </div>
                                    </td>
                                </tr>
                              
                            </tbody>
                        </table>
                    </div>
                    <?php
                        }
                        ?>
                    <div class="product border-bottom table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                            <?php foreach ($wishlist as $wishlist1) {
                                               
                                               ?>
                                <tr>
                                    <td width="20%"> <img src="admin/<?php echo $wishlist1["pimage"]?>" width="90"> </td>
                                    <td width="60%"> <span class="font-weight-bold"><?php echo $wishlist1["pname"]?></span>
                                        <div class="product-qty"> Quantity : <?php echo $wishlist1["qty"]?></span>
                                           </div>
                                    </td>
                                    <td width="20%">
                                        <div class="text-right"> <span class="font-weight-bold"><?php echo $wishlist1["psprice"]?></span> </div>
                                    </td>
                                </tr>
                                
                                <?php
                                    }
                                  ?>  
                            </tbody>
                        </table>
                    </div>
                    <div class="row d-flex justify-content-end">
                        <div class="col-md-5">
                            <table class="table table-borderless">
                                <tbody class="totals">
                                    
                                   
                                    <tr class="border-top border-bottom">
                                        <td>
                                            <div class="text-left"> <span class="font-weight-bold">Subtotal</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span class="font-weight-bold"><?php echo $subtotal[0]["total"];?></span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p>We will be sending shipping confirmation email when the item shipped successfully!</p>
                    <p class="font-weight-bold mb-0">Thanks for shopping with us!</p> <span>Petmark Team</span>
                </div>
                <div class="d-flex justify-content-between footer p-3"> <span>Need Help? visit our <a href="#"> help
                            center</a></span> <span>12 June, 2020</span> </div>
            </div>
        </div>
    </div>
</div>