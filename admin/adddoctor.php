<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Doctor
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
                                <form class="cmxform form-horizontal " id="frm" method="post" action=""
                                 enctype="multipart/form-data" novalidate="novalidate">
                                    
                                    
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Doctor Image</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" name="img" type="file" data-bvalidator="required">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Doctor Name</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" name="dname" type="text" data-bvalidator="required,alpha">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Doctor Information</label>
                                        <div class="col-lg-6">
                                            <input class="form-control"  name="dinfo" type="text" data-bvalidator="required">
                                        </div>
                                    </div>
                                   


                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Address</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" name="dadd" type="text" data-bvalidator="required">
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Mobile</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" name="dmob" type="number" data-bvalidator="required,minlen[10],maxlen[10],digit">
                                        </div>
                                    </div>

                                   
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Time Date </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control"  name="ddate" type="datetime-local" data-bvalidator="required">
                                        </div>
                                    </div>


                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Fee</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control"  name="dfee" type="number" data-bvalidator="required,digit">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit" name="dsubmit">Save</button>
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