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
                <th>Doctor</th>
                <th>Price</th>
                <th>Time</th>
                <th>Action</th>
               
              
           
            </tr>
        </thead>
        <tbody>
       
        <?php foreach ($doctorcartbill as $doctorcartbill1) {
                                               
                                               ?>
            <tr>
             <form method="GET">
                <input name="billid" type="text" value="<?php echo $doctorcartbill1['bill_id']?>" style="display: none;">
                <input type="text" value="success" name="success" style="display: none;">
                <td style="color:black"><?php echo $doctorcartbill1['d_id']?></td>
                <td style="color:black"><img src="<?php echo $doctorcartbill1['d_image']?>" style="width: 100px;height: 100px;"> </td>
                <td style="color:black"><?php echo $doctorcartbill1['d_name']?></td>
          
                <td style="color:black"><?php echo $doctorcartbill1['d_fee']?></td>
                <td style="color:black"><?php echo $doctorcartbill1['doctorbook_date']?></td>
             
                <td style="color:black"><a href="<?php echo $mainurl?>admindoctorcart?bill_id=<?php echo $doctorcartbill1["bill_id"]?>" class="btn btn-success"><span class="fa fa-check-circle" >&nbsp;&nbsp;Approve</span></a>&nbsp;&nbsp;&nbsp;<a href="<?php echo $doctorcartbill1["bill_id"]?>" class="btn btn-danger"><span class="fa fa-times-circle" >&nbsp;&nbsp;Cancel</span></a></td>
              
                
                </form>
               
             
            </tr>
            <?php
                   
                }
                ?>
                
        </tbody>
       
    </table>
    </div>
</section>

</section>