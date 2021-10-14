<?php
$mainurl ="http://localhost/pethouse/admin/";
$baseurl ="http://localhost/pethouse/admin/assets/";
?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Product
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
                        </header>

                    </section>
                </div>
            </div>
            

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">




                        <div class="panel-body">
                            <div class="form">
                            <form method="post" enctype="multipart/form-data" id="frm">
                            
                           
                                    <!-- <div class="form-group ">
                                        <div class="col-lg-6">
                                            <select name="mcatname" class="form-control" data-bvalidator="required">
                                                <option value="">-select Main Category-</option>
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="col-lg-6">
                                            <select name="mcatname" class="form-control" data-bvalidator="required">
                                                <option value="">-select  Category-</option>
                                           
                                            </select>
                                        </div>
                                    </div> -->
                                    <?php foreach ($adminprofile as $adminprofile1) 
                                    {
                                    ?>
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Admin Image</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" value="<?php echo $adminprofile1['image']?>" name="aimg" type="file" >
                                        </div>
                                    </div><br><br><br>
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Admin Name</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" value="<?php echo $adminprofile1['name']?>" name="aname" type="text" >
                                        </div>
                                    </div><br><br>
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Admin Email</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" value="<?php echo $adminprofile1['email']?>" name="aemail" type="email" >
                                        </div>
                                    </div><br><br>
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Admin Password</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" value="<?php echo $adminprofile1['password']?>" name="apass" type="password" >
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit" name="asubmit">Save</button>
                                            <button class="btn btn-default" type="reset">Clear</button>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
            
        </div>
    </section>

</section>

<!--main content end-->
</section>

</body>

</html>