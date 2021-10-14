<?php
$mainurl ="http://localhost/pethouse/admin/";
$baseurl ="http://localhost/pethouse/admin/assets/";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Manage Doctor</title>
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
                <th>Name</th>
                <th>Imformation</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Date</th>
                <th>Fees</th>
            </tr>
        </thead>
        <tbody>
        <?php
                {
                   foreach ($shwdoc as $shwdoc1 ) 
                   {
                     
                    ?>
            <tr>
                
                <td style="color:black"><?php echo $shwdoc1['d_id']?></td>
               <td> <img src="<?php echo $shwdoc1["d_image"];?>" style="width:80px; height:65px"></td>
                <td style="color:black"><?php echo $shwdoc1['d_name']?></td>
                <td style="color:black"><?php echo $shwdoc1['d_info']?></td>
                <td style="color:black"><?php echo $shwdoc1['d_add']?></td>
                <td style="color:black"><?php echo $shwdoc1['d_mob']?></td>
                <td style="color:black"><?php echo $shwdoc1['d_date']?></td>
                <td style="color:black"><?php echo $shwdoc1['d_fee']?></td>
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