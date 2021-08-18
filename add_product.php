<?php include('public_header.php'); ?>
<!-- End Header Section -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php echo base_url("../assets/ckeditor/ckeditor.js"); ?>"></script>
<!-- Start Breadcrumbs Section -->
<section class="breadcrumbs-section background_bg" data-img-src="../assets/image/cart-breadcrumbs-img.jpg">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-12">
                <div class="page_title text-center">
                	<h1>Add Product</h1>
                    <ul class="breadcrumb justify-content-center">
                    	<li><a href="<?= base_url('seller/dashboard')?>">home</a></li>
                        <li><a href="#">shop</a></li>
                        <li><span>Add Product</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Header Section -->



<!-- Start My Account Section -->
<section class="pt_large pb_large">
	<div class="container">
    	<div class="row">
        	<div class="col-md-8 mb-8 mb-md-0">
            	<div class="title">
                	<h4>Add Product</h4>
                </div>
            	<form action="<?= base_url('seller/store_product')?>" method="post" enctype="multipart/form-data" accept-charset="utf-8">
            		<input type="text"  class="invisible" name="created_date" value="<?= date('Y-m-d H:i:s')?>">
            		<input type="text"  class="invisible" name="random" value="<?= strtoupper(substr(md5(time().rand(10000,99999)), 0, 10))?>">
                    <div class="form-group">
                        <label>Product Title <span class="required">*</span></label>
                        <input type="text" required="" class="form-control" name="product_name" value="">
                    </div>
                    <div class="form-group">
                        <label> Product Category<span class="required">*</span></label>
                        <select name='sheo_type' class="form-control" required="">
                        <option vlaue="">men type</option>
						<option vlaue="">women type</option>
                        </select>
                   
                    </div>
                    <div class="form-group">
                        <label> Stock<span class="required">*</span></label>
                        <select name='stock' id="type" class="form-control" required="">
                        	<option value="" disabled selected> -- Select an Tag -- </option>
                        	<option value="In Stock">In Stock</option>
                        	<option value="Out Of Stock">Out Of Stock</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Product MRP Price <span class="required">*</span></label>
                        <input type="text" required="" class="form-control" name="product_mrp" value="">
                    </div>
                    <div class="form-group">
                        <label>Product Price after Discount <span class="required">*</span></label>
                        <input type="text" required="" class="form-control" name="product_price" value="">
                    </div>
                    <div class="form-group">
                        <label>Product Description <span class="required">*</span></label>
                        <textarea name="description" class="ckeditor" required=""></textarea>
                       
                    </div>
                    
                     <div class="form-group">
                        <label>Product Images <span class="required">*</span></label>
                        <input type="file" required="" class="form-control" name="image1" value="">
                        <input type="file"  class="form-control" name="image2" value="">
                        <input type="file"  class="form-control" name="image3" value="">
                        <input type="file"  class="form-control" name="image4" value="">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add Product">
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</section>
<!-- End My Account Section -->

<!-- Start Footer Section -->
<?php include('public_footer.php'); ?>