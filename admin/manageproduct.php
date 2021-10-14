<?php
$mainurl ="http://localhost/pethouse/admin/";
$baseurl ="http://localhost/pethouse/admin/assets/";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Manage Product </title>
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
                <th>ID</th>
                <th>M Category id</th>
                <th>Category id</th>
                <th>Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Sell Price</th>
                <th>Date</th>
              
           
            </tr>
        </thead>
        <tbody>
        <?php
                {
                   foreach ($product as $shwmaincat1 ) 
                   {
                     
                    ?>
            <tr>
                
                <td style="color:black"><?php echo $shwmaincat1['pid']?></td>
                <td style="color:black"><?php echo $shwmaincat1['mid']?></td>
                <td style="color:black"><?php echo $shwmaincat1['cid']?></td>
                <td style="color:black"><?php echo $shwmaincat1['pname']?></td>
                <td style="color:black"><img src="<?php echo $shwmaincat1["pimage"];?>" style="width:80px; height:65px"></td>
                <td style="color:black"><?php echo $shwmaincat1['pprice']?></td>
                <td style="color:black"><?php echo $shwmaincat1['psprice']?></td>
                <td style="color:black"><?php echo $shwmaincat1['pdate']?></td>
               
                <td><input type="button" name="del" value="Delete" class="btn btn-danger">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="button" name="up" value="Update" class="btn btn-info"></td>
             
            </tr>
            <?php
                   }
                }
                ?>
        </tbody>
       
    </table>
    </div>
</section>

</section>