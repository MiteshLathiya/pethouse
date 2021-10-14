<br><br>
<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
    <div class="container">
        <ol class="breadcrumb">
  
            <li class="breadcrumb-item"><a href="<?php echo $mainurl?>">Add More</a></li>
            <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
    
        </ol>
    </div>
</nav>

        <!-- Cart Page Start -->
        <div class="cart_area sp-inner-page">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="#" method="post">				
                            <!-- Cart Table -->
                            <div class="cart-table table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">Image</th>
                                            <th class="pro-title">Product</th>
                                            <th class="pro-price">Price</th>
                                            <th class="pro-quantity">Quantity</th>
                                            <th class="pro-subtotal">Total</th>
                                            <th class="pro-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($wishlist as $wishlist1) {
                                               
                                               ?>
                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img src="admin/<?php echo $wishlist1['pimage']?>" alt="Product"></a></td>
                                            <input type="text" name="courseid" value="<?php echo $_SESSION["id"];?>" readonly style="border:none; display:none">
                                            <td class="pro-title"><a href="#"><?php echo $wishlist1['productname']?></a></td>
                                            <td class="pro-price"><span><?php echo $wishlist1['price']?></span></td>
                                            <td class="pro-quantity">
                                                <div class="pro-qty">
                                                    <div class="count-input-block">
                                                        <input type="number" class="form-control text-center" value="<?php echo $wishlist1['qty']?>" style="border:none; " readonly>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="pro-subtotal"><span><?php echo $wishlist1['subtotal']?></span></td>
                                           
                                            <td class="pro-remove"><a href="<?php echo $mainurl?>Wishlist?Delcart=<?php echo $wishlist1["cartid"];?>"><i class="far fa-trash-alt"></i></a></td>
                                          
                                        </tr>
                                        <?php 
                                            }
                                            ?>
                                          
                                    </tbody>
                                  
                                </table>
                                <div class="jumbotron" style="padding:10px; background-color: lightskyblue; height: 130px;">

<h4 align="right" style="color:black">Subtotal of Products :Rs.<?php echo $subtotal[0]["total"];?>
                                <br><br>
                                
                               <a href="<?php echo $mainurl?>" class="btn-black">Add More Product</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a  class="btn-black" href="<?php echo $mainurl?>ProductBill">Checkout</a>
                                          
                            </div>
                            
                        </form>	
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Page End --> 