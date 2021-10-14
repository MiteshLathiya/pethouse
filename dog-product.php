<br><br>

<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo $mainurl ?>">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Dog Category</li>
    </ol>
  </div>
</nav>
<main class="section-padding shop-page-section">
  <div class="container">
    <div class="shop-toolbar mb--30">
      <div class="row align-items-center">
        <div class="col-5 col-md-3 col-lg-4">
          <!-- Product View Mode -->
          <div class="product-view-mode">
            <a href="#" class="sortting-btn active" data-target="list "><i class="fas fa-list"></i></a>
            <a href="#" class="sortting-btn" data-target="grid"><i class="fas fa-th"></i></a>
          </div>
        </div>
        <div class="col-12 col-md-9 col-lg-7 offset-lg-1 mt-3 mt-md-0  pr-md-0">
          <div class="sorting-selection">
            <div class="row align-items-center pl-md-0 pr-md-0 no-gutters">
              <div class="col-sm-6 col-md-7 col-xl-8 d-flex align-items-center justify-content-md-end">

                <span>Sort By:</span>
                <select id="input-sort" class="form-control nice-select sort-select" style="display: none;">
                  <option value="" selected="selected">Default Sorting</option>
                  <option value="">Sort
                    By:Name (A - Z)</option>
                  <option value="">Sort
                    By:Name (Z - A)</option>
                  <option value="">Sort
                    By:Price (Low &gt; High)</option>
                  <option value="">Sort
                    By:Price (High &gt; Low)</option>
                  <option value="">Sort
                    By:Rating (Highest)</option>
                  <option value="">Sort
                    By:Rating (Lowest)</option>
                  <option value="">Sort
                    By:Model (A - Z)</option>
                  <option value="">Sort
                    By:Model (Z - A)</option>
                </select>
              </div>
              <div class="col-md-5 col-xl-4 col-sm-6 text-sm-right mt-sm-0 mt-3">
                <span>
                  Showing 1–20 of 52 results
                </span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="shop-product-wrap grid with-pagination row border grid-four-column  mr-0 ml-0 no-gutters">
      <?php foreach ($mactdata as $mactdata1) {

      ?>
        <div class="col-lg-3 col-sm-6">
          <div class="pm-product  ">
            <a href="product-details.html" class="image" tabindex="0">
              <img src="admin/<?php echo $mactdata1["cimage"] ?>" style="width: 150px; height: 150px;" alt="">
            </a>
            <br> <br> <br>
            <div class="content">
              <h3 class="font-weight-500"><a href="product-details.html"><?php echo $mactdata1["cname"] ?></a></h3>
<br>
              <div class="btn-block grid-btn">
                <a href="#" class="btn btn-outlined btn-rounded btn-mid" tabindex="0">View Product</a>
              </div>
                  <a href="cart.html" class="btn btn-outlined btn-rounded btn-mid" tabindex="0">View Product</a>    
            </div>
          </div>
        </div>

      <?php
      }
      ?>


    </div>
    <div class="mt--30">
      <div class="pagination-widget">
        <div class="site-pagination">
          <a href="#" class="single-pagination">|&lt;</a>
          <a href="#" class="single-pagination">&lt;</a>
          <a href="#" class="single-pagination active">1</a>
          <a href="#" class="single-pagination">2</a>
          <a href="#" class="single-pagination">&gt;</a>
          <a href="#" class="single-pagination">&gt;|</a>
        </div>
      </div>

    </div>
  </div>
</main>