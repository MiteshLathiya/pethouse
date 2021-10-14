<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="<?php echo $mainurl?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-list"></i>
                        <span>Main Category</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo $mainurl?>maincategory">Add Main Category</a></li>
                        <li><a href="<?php echo $mainurl?>managemaincat">Manage Main Category </a></li>
                    </ul>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-list"></i>
                        <span>Category</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo $mainurl?>category">Add Category</a></li>
                        <li><a href="<?php echo $mainurl?>managecategory">Manage Category </a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-product-hunt"></i>
                        <span>Product</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo $mainurl?>product">Add  Product</a></li>
                        <li><a href="<?php echo $mainurl?>manageproduct">Manage Product  </a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-medkit"></i>
                        <span>Doctor</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo $mainurl?>adddoctor">Add  Doctor</a></li>
                        <li><a href="<?php echo $mainurl?>managedoctor">Manage Doctor  </a></li>
                    </ul>
                </li>

                <li>
                    <a class="" href="<?php echo $mainurl?>manageclient">
                        <i class="fa fa-user"></i>
                        <span>Manage User</span>
                    </a>
                </li>

                <li>
                    <a class="" href="<?php echo $mainurl?>manageuserproduct">
                        <i class="fa fa-user"></i>
                        <span>Manage User Product</span>
                    </a>
                </li>

                <li>
                    <a class="" href="<?php echo $mainurl?>manageuserdoctor">
                        <i class="fa fa-heartbeat"></i>
                        <span>Manage User Doctor</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->