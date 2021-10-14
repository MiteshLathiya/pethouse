
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="form-w3layouts">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                          Category
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
                                <form class="cmxform form-horizontal" method="post" action="" id="frm" enctype="multipart/form-data">
                                    
                               
                                    <div class="form-group ">
                                            <label for="lastname" class="control-label col-lg-3">Main Category</label>
                             
                                            <div class="col-lg-6">
                                           
                                            <select  name="mcatname"  class="form-control"  data-bvalidator="required">
                                                 <option value="">-select Main Category-</option>
                                                 <?php
                                                 {
                                        foreach ($shwmaincat as $shwmaincat1 ) {
                                                         ?>
                                                 <option value="<?php echo $shwmaincat1["mid"];?>"><?php echo $shwmaincat1['mname']?></option>
                                                 <?php
                                        }
                                    }
                                    ?>
                                            </select>
                                  
                                            </div>
                                        </div>
                                             
                                 
                                    <div class="form-group ">
                                            <label for="firstname" class="control-label col-lg-3">Category Name</label>
                                            <div class="col-lg-6">
                                                <input class=" form-control" id="firstname" name="cfname" type="text" data-bvalidator="required,alpha">
                                            </div>
                                        </div>
                                  
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Category Image</label>
                                        <div class="col-lg-6">
                                            <input  class="form-control" id="lastname" name="cimage" type="file" data-bvalidator="required">
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Date</label>
                                        <div class="col-lg-6">
                                            <input  class=" form-control" id="lastname" name="cdate" type="date" data-bvalidator="required,date">
                                        </div>
                                    </div>
                                    
                             

                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit" name="csubmit">Save</button>
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
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
