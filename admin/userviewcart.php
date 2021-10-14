<?php
$mainurl ="http://localhost/pethouse/admin/";
$baseurl ="http://localhost/pethouse/admin/assets/";
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Manage Client</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo  $baseurl?>css/dataTables.bootstrap4.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo  $baseurl?>css/bootstrap.css'>
    <script src='<?php echo  $baseurl?>js/jquery-3.5.1.js'></script>
    <script src='<?php echo  $baseurl?>js/jquery.dataTables.min.js'></script>
    <script src='<?php echo  $baseurl?>js/dataTables.bootstrap4.min.js'></script>
</head>
<body>
    
</body>
</html>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<section id="main-content">
	<section class="wrapper">
		<div class="form-w3layouts">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
               
                <th>TOTAL</th>
                <th>Date</th>
              
           
            </tr>
        </thead>
        <tbody>
        <?php foreach ($wishlist as $wishlist1) {
                                               
                                               ?>
            <tr>
                
                <td style="color:black"><?php echo $wishlist1['pid']?></td>
                <td style="color:black"><img src="<?php echo $wishlist1['pimage']?>" style="width: 100px;height: 100px;"> </td>
                <td style="color:black"><?php echo $wishlist1['productname']?></td>
          
                <td style="color:black"><?php echo $wishlist1['psprice']?></td>
                <td style="color:black"><?php echo $wishlist1['qty']?></td>
                <td style="color:black"><?php echo $wishlist1['subtotal']?></td>
                <td style="color:black"><?php echo $wishlist1['added_date']?></td>
                
               
               
             
            </tr>
            <?php
                   
                }
                ?>
        </tbody>
       
    </table>
    </div>
</section>

</section>