<?php
$mainurl ="http://localhost/pethouse/admin/";
$baseurl ="http://localhost/pethouse/admin/assets/";
?>
<header>

    <script>
      

        function str(val) {
            $.ajax({
                type: "POST",
                url: "<?php echo $mainurl?>ajaxgetdata.php",
                data: "cn=" + val,

                success: function(data) {

                    $("#st").html(data);
                }
            });
        }

       
    </script>
 </header>
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
                            <div class="form-group">
                                Select MainCatgory :<select name="maincategory" id="cn" onchange="return str(this.value)" data-bvalidator="required" class="form-control">
                                    <option value="">-Select MainCatgory-</option>
                                    <?php
                                    $sel = "select * from maincategory";
                                    $query = mysqli_query($con, $sel);
                                    while ($result = mysqli_fetch_array($query)) {

                                    ?>
                                        <option value="<?php echo $result["mid"]; ?>"><?php echo $result["mname"]; ?></option>

                                    <?php

                                    }
                                    ?>

                                </select>
                            </div>
                            <div class="form-group">
                                Select Category :<select name="category" id="st" onchange="return str1(this.value)" class="form-control" data-bvalidator="required">
                                    <option value="">-Select Category-</option>

                                </select>
                            </div>

                            

                           
                      
                                  
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
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Porduct Image</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="firstname" name="pimg" type="file" data-bvalidator="required">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Porduct Name</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="lastname" name="pname" type="text" data-bvalidator="required">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Price</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="lastname" name="price" type="number" data-bvalidator="required,digit">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Sell Price</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="lastname" name="sprice" type="number" data-bvalidator="required,digit">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Date </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="lastname" name="pdate" type="date" data-bvalidator="required,date">
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit" name="psubmit">Save</button>
                                            <button class="btn btn-default" type="reset">Clear</button>
                                        </div>
                                    </div>
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