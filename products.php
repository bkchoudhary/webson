<!-- End Header Section -->

<!-- Start Breadcrumbs Section -->
<section class="breadcrumbs-section background_bg" data-img-src="">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="page_title text-center">
                	<h1><?= str_replace( '%20',' ', $type)?></h1>
                    <ul class="breadcrumb justify-content-center">
                    	<li><a href="<?= base_url('')?>">home</a></li>
                        <li><a href="#">shop</a></li>
                        <li><span><?= str_replace( '%20',' ', $type)?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Header Section -->

<!-- Start Shop Section -->
<section class="pt_large pb_large shop-inner-section">
	<div class="container">
    	<div class="row">
        	<div class="col-xl-9 col-lg-8 col-md-12">
                <div class="row">	
                	<?php if( count($articles) ):
                     $count = $this->uri->segment(5, 0);
                           foreach($articles as $article ): ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-box common-cart-box">
                            <div class="product-img common-cart-img">
                               <a href="<?= base_url("user/single/$article->random")?>"> <img src="<?= $article->product_image1?>" alt="product-img" class="responsive-img1"></a>
                           </div>
                            <div class="product-info common-cart-info text-center">
                                <a href="<?= base_url("user/single/$article->random")?>" class="cart-name"><?= $article->product_name?></a>
                                <p class="cart-price"><del>₹ <?= $article->product_mrp?></del>₹ <?= $article->product_price?>/-</p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                   <?php else: ?>
                     <tr>
                     <td colspan="3" style="color: white;">
                      No Records Found.
                       </td>
                     </tr>
                     <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-12">
                        <nav>
                              <?= $this->pagination->create_links(); ?> 
                            
                        </nav>
                    </div>
                </div>
        	</div>
            <div class="col-xl-3 col-lg-4 col-md-12 order-lg-first"> 
            	<div class="shop-sidebar">
                	<div class="side-quantity-box side-box">
                    	<div class="side-box-title">
                        	<h6>Categories</h6>
                        </div>
                        <div class="quantity-box-detail">
                        	<ul>
                        		<!-----////////chage---------------->
                            	<?php include('side_link.php'); ?>
                            </ul>
                        </div>
                    </div>
                   
                   
                   
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Section -->

<!-- Start Footer Section -->
<?php include('public_footer.php'); ?>