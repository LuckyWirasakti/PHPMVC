	<!-- start banner Area -->
	<section class="banner-area">
	    <div class="container">
	        <div class="row fullscreen align-items-center justify-content-start">
	            <div class="col-lg-12">
	                <div class="active-banner-slider owl-carousel">
	                    <?php $no=1;
                        foreach($data['banner'] as $value) : ?>
	                    <div class="row single-slide">
	                        <div class="col-lg-5">
	                            <div class="banner-content">
	                                <h1><?=$value['name']?><br>Collection!</h1>
	                                <p><?=$value['description']?></p>
	                                <div class="add-bag d-flex align-items-center">
	                                    <a class="add-btn"><p class="text-white"><?=$no++;?></p></a>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-lg-7">
	                            <div class="banner-img">
	                                <img class="img-fluid" src="img/banner/<?=$value['image']?>" alt="">
	                            </div>
	                        </div>
	                    </div>
	                    <?php endforeach; ?>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
	    <div class="container">
	        <div class="row features-inner">
	            <!-- single features -->
	            <?php foreach($data['features'] as $value) : ?>
	            <div class="col-lg-3 col-md-6 col-sm-6">
	                <div class="single-features">
	                    <div class="f-icon">
	                        <img src="img/features/<?=$value['icon']?>" alt="">
	                    </div>
	                    <h6><?=$value['name']?></h6>
	                    <p><?=$value['description']?></p>
	                </div>
	            </div>
	            <?php endforeach;?>
	        </div>
	    </div>
	</section>
	<!-- end features Area -->

	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
	    <!-- single product slide -->
	    <div class="single-product-slider">
	        <div class="container">
	            <div class="row justify-content-center">
	                <div class="col-lg-6 text-center">
	                    <div class="section-title">
	                        <h1>Latest Products</h1>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
	                            ut labore et
	                            dolore
	                            magna aliqua.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="row">
	                <!-- single product -->
	                <div class="col-lg-3 col-md-6">
	                    <div class="single-product">
	                        <img class="img-fluid" src="img/product/p1.jpg" alt="">
	                        <div class="product-details">
	                            <h6>addidas New Hammer sole
	                                for Sports person</h6>
	                            <div class="price">
	                                <h6>$150.00</h6>
	                                <h6 class="l-through">$210.00</h6>
	                            </div>
	                            <div class="prd-bottom">

	                                <a href="" class="social-info">
	                                    <span class="ti-bag"></span>
	                                    <p class="hover-text">add to bag</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-heart"></span>
	                                    <p class="hover-text">Wishlist</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-sync"></span>
	                                    <p class="hover-text">compare</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-move"></span>
	                                    <p class="hover-text">view more</p>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- single product -->
	                <div class="col-lg-3 col-md-6">
	                    <div class="single-product">
	                        <img class="img-fluid" src="img/product/p2.jpg" alt="">
	                        <div class="product-details">
	                            <h6>addidas New Hammer sole
	                                for Sports person</h6>
	                            <div class="price">
	                                <h6>$150.00</h6>
	                                <h6 class="l-through">$210.00</h6>
	                            </div>
	                            <div class="prd-bottom">

	                                <a href="" class="social-info">
	                                    <span class="ti-bag"></span>
	                                    <p class="hover-text">add to bag</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-heart"></span>
	                                    <p class="hover-text">Wishlist</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-sync"></span>
	                                    <p class="hover-text">compare</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-move"></span>
	                                    <p class="hover-text">view more</p>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- single product -->
	                <div class="col-lg-3 col-md-6">
	                    <div class="single-product">
	                        <img class="img-fluid" src="img/product/p3.jpg" alt="">
	                        <div class="product-details">
	                            <h6>addidas New Hammer sole
	                                for Sports person</h6>
	                            <div class="price">
	                                <h6>$150.00</h6>
	                                <h6 class="l-through">$210.00</h6>
	                            </div>
	                            <div class="prd-bottom">
	                                <a href="" class="social-info">
	                                    <span class="ti-bag"></span>
	                                    <p class="hover-text">add to bag</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-heart"></span>
	                                    <p class="hover-text">Wishlist</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-sync"></span>
	                                    <p class="hover-text">compare</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-move"></span>
	                                    <p class="hover-text">view more</p>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- single product -->
	                <div class="col-lg-3 col-md-6">
	                    <div class="single-product">
	                        <img class="img-fluid" src="img/product/p4.jpg" alt="">
	                        <div class="product-details">
	                            <h6>addidas New Hammer sole
	                                for Sports person</h6>
	                            <div class="price">
	                                <h6>$150.00</h6>
	                                <h6 class="l-through">$210.00</h6>
	                            </div>
	                            <div class="prd-bottom">

	                                <a href="" class="social-info">
	                                    <span class="ti-bag"></span>
	                                    <p class="hover-text">add to bag</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-heart"></span>
	                                    <p class="hover-text">Wishlist</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-sync"></span>
	                                    <p class="hover-text">compare</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-move"></span>
	                                    <p class="hover-text">view more</p>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- single product -->
	                <div class="col-lg-3 col-md-6">
	                    <div class="single-product">
	                        <img class="img-fluid" src="img/product/p5.jpg" alt="">
	                        <div class="product-details">
	                            <h6>addidas New Hammer sole
	                                for Sports person</h6>
	                            <div class="price">
	                                <h6>$150.00</h6>
	                                <h6 class="l-through">$210.00</h6>
	                            </div>
	                            <div class="prd-bottom">

	                                <a href="" class="social-info">
	                                    <span class="ti-bag"></span>
	                                    <p class="hover-text">add to bag</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-heart"></span>
	                                    <p class="hover-text">Wishlist</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-sync"></span>
	                                    <p class="hover-text">compare</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-move"></span>
	                                    <p class="hover-text">view more</p>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- single product -->
	                <div class="col-lg-3 col-md-6">
	                    <div class="single-product">
	                        <img class="img-fluid" src="img/product/p6.jpg" alt="">
	                        <div class="product-details">
	                            <h6>addidas New Hammer sole
	                                for Sports person</h6>
	                            <div class="price">
	                                <h6>$150.00</h6>
	                                <h6 class="l-through">$210.00</h6>
	                            </div>
	                            <div class="prd-bottom">

	                                <a href="" class="social-info">
	                                    <span class="ti-bag"></span>
	                                    <p class="hover-text">add to bag</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-heart"></span>
	                                    <p class="hover-text">Wishlist</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-sync"></span>
	                                    <p class="hover-text">compare</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-move"></span>
	                                    <p class="hover-text">view more</p>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- single product -->
	                <div class="col-lg-3 col-md-6">
	                    <div class="single-product">
	                        <img class="img-fluid" src="img/product/p7.jpg" alt="">
	                        <div class="product-details">
	                            <h6>addidas New Hammer sole
	                                for Sports person</h6>
	                            <div class="price">
	                                <h6>$150.00</h6>
	                                <h6 class="l-through">$210.00</h6>
	                            </div>
	                            <div class="prd-bottom">

	                                <a href="" class="social-info">
	                                    <span class="ti-bag"></span>
	                                    <p class="hover-text">add to bag</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-heart"></span>
	                                    <p class="hover-text">Wishlist</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-sync"></span>
	                                    <p class="hover-text">compare</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-move"></span>
	                                    <p class="hover-text">view more</p>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- single product -->
	                <div class="col-lg-3 col-md-6">
	                    <div class="single-product">
	                        <img class="img-fluid" src="img/product/p8.jpg" alt="">
	                        <div class="product-details">
	                            <h6>addidas New Hammer sole
	                                for Sports person</h6>
	                            <div class="price">
	                                <h6>$150.00</h6>
	                                <h6 class="l-through">$210.00</h6>
	                            </div>
	                            <div class="prd-bottom">

	                                <a href="" class="social-info">
	                                    <span class="ti-bag"></span>
	                                    <p class="hover-text">add to bag</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-heart"></span>
	                                    <p class="hover-text">Wishlist</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-sync"></span>
	                                    <p class="hover-text">compare</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-move"></span>
	                                    <p class="hover-text">view more</p>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- single product slide -->
	    <div class="single-product-slider">
	        <div class="container">
	            <div class="row justify-content-center">
	                <div class="col-lg-6 text-center">
	                    <div class="section-title">
	                        <h1>Coming Products</h1>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
	                            ut labore et
	                            dolore
	                            magna aliqua.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="row">
	                <!-- single product -->
	                <div class="col-lg-3 col-md-6">
	                    <div class="single-product">
	                        <img class="img-fluid" src="img/product/p6.jpg" alt="">
	                        <div class="product-details">
	                            <h6>addidas New Hammer sole
	                                for Sports person</h6>
	                            <div class="price">
	                                <h6>$150.00</h6>
	                                <h6 class="l-through">$210.00</h6>
	                            </div>
	                            <div class="prd-bottom">

	                                <a href="" class="social-info">
	                                    <span class="ti-bag"></span>
	                                    <p class="hover-text">add to bag</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-heart"></span>
	                                    <p class="hover-text">Wishlist</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-sync"></span>
	                                    <p class="hover-text">compare</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-move"></span>
	                                    <p class="hover-text">view more</p>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- single product -->
	                <div class="col-lg-3 col-md-6">
	                    <div class="single-product">
	                        <img class="img-fluid" src="img/product/p8.jpg" alt="">
	                        <div class="product-details">
	                            <h6>addidas New Hammer sole
	                                for Sports person</h6>
	                            <div class="price">
	                                <h6>$150.00</h6>
	                                <h6 class="l-through">$210.00</h6>
	                            </div>
	                            <div class="prd-bottom">

	                                <a href="" class="social-info">
	                                    <span class="ti-bag"></span>
	                                    <p class="hover-text">add to bag</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-heart"></span>
	                                    <p class="hover-text">Wishlist</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-sync"></span>
	                                    <p class="hover-text">compare</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-move"></span>
	                                    <p class="hover-text">view more</p>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- single product -->
	                <div class="col-lg-3 col-md-6">
	                    <div class="single-product">
	                        <img class="img-fluid" src="img/product/p3.jpg" alt="">
	                        <div class="product-details">
	                            <h6>addidas New Hammer sole
	                                for Sports person</h6>
	                            <div class="price">
	                                <h6>$150.00</h6>
	                                <h6 class="l-through">$210.00</h6>
	                            </div>
	                            <div class="prd-bottom">

	                                <a href="" class="social-info">
	                                    <span class="ti-bag"></span>
	                                    <p class="hover-text">add to bag</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-heart"></span>
	                                    <p class="hover-text">Wishlist</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-sync"></span>
	                                    <p class="hover-text">compare</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-move"></span>
	                                    <p class="hover-text">view more</p>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- single product -->
	                <div class="col-lg-3 col-md-6">
	                    <div class="single-product">
	                        <img class="img-fluid" src="img/product/p5.jpg" alt="">
	                        <div class="product-details">
	                            <h6>addidas New Hammer sole
	                                for Sports person</h6>
	                            <div class="price">
	                                <h6>$150.00</h6>
	                                <h6 class="l-through">$210.00</h6>
	                            </div>
	                            <div class="prd-bottom">

	                                <a href="" class="social-info">
	                                    <span class="ti-bag"></span>
	                                    <p class="hover-text">add to bag</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-heart"></span>
	                                    <p class="hover-text">Wishlist</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-sync"></span>
	                                    <p class="hover-text">compare</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-move"></span>
	                                    <p class="hover-text">view more</p>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- single product -->
	                <div class="col-lg-3 col-md-6">
	                    <div class="single-product">
	                        <img class="img-fluid" src="img/product/p1.jpg" alt="">
	                        <div class="product-details">
	                            <h6>addidas New Hammer sole
	                                for Sports person</h6>
	                            <div class="price">
	                                <h6>$150.00</h6>
	                                <h6 class="l-through">$210.00</h6>
	                            </div>
	                            <div class="prd-bottom">

	                                <a href="" class="social-info">
	                                    <span class="ti-bag"></span>
	                                    <p class="hover-text">add to bag</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-heart"></span>
	                                    <p class="hover-text">Wishlist</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-sync"></span>
	                                    <p class="hover-text">compare</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-move"></span>
	                                    <p class="hover-text">view more</p>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- single product -->
	                <div class="col-lg-3 col-md-6">
	                    <div class="single-product">
	                        <img class="img-fluid" src="img/product/p4.jpg" alt="">
	                        <div class="product-details">
	                            <h6>addidas New Hammer sole
	                                for Sports person</h6>
	                            <div class="price">
	                                <h6>$150.00</h6>
	                                <h6 class="l-through">$210.00</h6>
	                            </div>
	                            <div class="prd-bottom">

	                                <a href="" class="social-info">
	                                    <span class="ti-bag"></span>
	                                    <p class="hover-text">add to bag</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-heart"></span>
	                                    <p class="hover-text">Wishlist</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-sync"></span>
	                                    <p class="hover-text">compare</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-move"></span>
	                                    <p class="hover-text">view more</p>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- single product -->
	                <div class="col-lg-3 col-md-6">
	                    <div class="single-product">
	                        <img class="img-fluid" src="img/product/p1.jpg" alt="">
	                        <div class="product-details">
	                            <h6>addidas New Hammer sole
	                                for Sports person</h6>
	                            <div class="price">
	                                <h6>$150.00</h6>
	                                <h6 class="l-through">$210.00</h6>
	                            </div>
	                            <div class="prd-bottom">

	                                <a href="" class="social-info">
	                                    <span class="ti-bag"></span>
	                                    <p class="hover-text">add to bag</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-heart"></span>
	                                    <p class="hover-text">Wishlist</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-sync"></span>
	                                    <p class="hover-text">compare</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-move"></span>
	                                    <p class="hover-text">view more</p>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- single product -->
	                <div class="col-lg-3 col-md-6">
	                    <div class="single-product">
	                        <img class="img-fluid" src="img/product/p8.jpg" alt="">
	                        <div class="product-details">
	                            <h6>addidas New Hammer sole
	                                for Sports person</h6>
	                            <div class="price">
	                                <h6>$150.00</h6>
	                                <h6 class="l-through">$210.00</h6>
	                            </div>
	                            <div class="prd-bottom">

	                                <a href="" class="social-info">
	                                    <span class="ti-bag"></span>
	                                    <p class="hover-text">add to bag</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-heart"></span>
	                                    <p class="hover-text">Wishlist</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-sync"></span>
	                                    <p class="hover-text">compare</p>
	                                </a>
	                                <a href="" class="social-info">
	                                    <span class="lnr lnr-move"></span>
	                                    <p class="hover-text">view more</p>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<!-- end product Area -->

	<!-- Start brand Area -->
	<section class="brand-area section_gap">
	    <div class="container">
	        <div class="row">
                <?php foreach($data['brand'] as $value) :?>
	            <a class="col single-img" href="<?=$value['url']?>">
	                <img class="img-fluid d-block mx-auto" src="img/brand/<?=$value['image']?>" alt="<?=$value['name']?>">
                </a>
                <?php endforeach; ?>
	        </div>
	    </div>
	</section>
	<!-- End brand Area -->

	<!-- Start related-product Area -->
	<section class="related-product-area section_gap_bottom">
	    <div class="container">
	        <div class="row justify-content-center">
	            <div class="col-lg-6 text-center">
	                <div class="section-title">
	                    <h1>Deals of the Week</h1>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
	                        labore et dolore
	                        magna aliqua.</p>
	                </div>
	            </div>
	        </div>
	        <div class="row justify-content-center">
	            <div class="col-lg-10">
	                <div class="row">
	                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
	                        <div class="single-related-product d-flex">
	                            <a href="#"><img src="img/r1.jpg" alt=""></a>
	                            <div class="desc">
	                                <a href="#" class="title">Black lace Heels</a>
	                                <div class="price">
	                                    <h6>$189.00</h6>
	                                    <h6 class="l-through">$210.00</h6>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
	                        <div class="single-related-product d-flex">
	                            <a href="#"><img src="img/r2.jpg" alt=""></a>
	                            <div class="desc">
	                                <a href="#" class="title">Black lace Heels</a>
	                                <div class="price">
	                                    <h6>$189.00</h6>
	                                    <h6 class="l-through">$210.00</h6>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
	                        <div class="single-related-product d-flex">
	                            <a href="#"><img src="img/r3.jpg" alt=""></a>
	                            <div class="desc">
	                                <a href="#" class="title">Black lace Heels</a>
	                                <div class="price">
	                                    <h6>$189.00</h6>
	                                    <h6 class="l-through">$210.00</h6>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
	                        <div class="single-related-product d-flex">
	                            <a href="#"><img src="img/r5.jpg" alt=""></a>
	                            <div class="desc">
	                                <a href="#" class="title">Black lace Heels</a>
	                                <div class="price">
	                                    <h6>$189.00</h6>
	                                    <h6 class="l-through">$210.00</h6>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
	                        <div class="single-related-product d-flex">
	                            <a href="#"><img src="img/r6.jpg" alt=""></a>
	                            <div class="desc">
	                                <a href="#" class="title">Black lace Heels</a>
	                                <div class="price">
	                                    <h6>$189.00</h6>
	                                    <h6 class="l-through">$210.00</h6>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
	                        <div class="single-related-product d-flex">
	                            <a href="#"><img src="img/r7.jpg" alt=""></a>
	                            <div class="desc">
	                                <a href="#" class="title">Black lace Heels</a>
	                                <div class="price">
	                                    <h6>$189.00</h6>
	                                    <h6 class="l-through">$210.00</h6>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-4 col-md-4 col-sm-6">
	                        <div class="single-related-product d-flex">
	                            <a href="#"><img src="img/r9.jpg" alt=""></a>
	                            <div class="desc">
	                                <a href="#" class="title">Black lace Heels</a>
	                                <div class="price">
	                                    <h6>$189.00</h6>
	                                    <h6 class="l-through">$210.00</h6>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-4 col-md-4 col-sm-6">
	                        <div class="single-related-product d-flex">
	                            <a href="#"><img src="img/r10.jpg" alt=""></a>
	                            <div class="desc">
	                                <a href="#" class="title">Black lace Heels</a>
	                                <div class="price">
	                                    <h6>$189.00</h6>
	                                    <h6 class="l-through">$210.00</h6>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-4 col-md-4 col-sm-6">
	                        <div class="single-related-product d-flex">
	                            <a href="#"><img src="img/r11.jpg" alt=""></a>
	                            <div class="desc">
	                                <a href="#" class="title">Black lace Heels</a>
	                                <div class="price">
	                                    <h6>$189.00</h6>
	                                    <h6 class="l-through">$210.00</h6>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<!-- End related-product Area -->
