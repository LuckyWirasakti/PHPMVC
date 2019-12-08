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
	                                <img class="img-fluid" src="frontend/img/banner/<?=$value['image']?>" alt="">
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
	                        <img src="frontend/img/features/<?=$value['icon']?>" alt="">
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
	<section>
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
                    <?php foreach ($data['product'] as $value) :?>
	                <div class="col-lg-3 col-md-6">
	                    <div class="single-product">

	                        <img class="img-fluid" src="frontend/img/product/<?=$value['image']?>" alt="">
	                        <div class="product-details">
	                            <h6><?=$value['name']?></h6>
	                            <div class="price">
	                                <h6><?=$value['price']?></h6>
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
                    <?php endforeach;?>
	            </div>
                <div class="row justify-content-center">
                    <a href="#"><h3>-- View All --</h3></a>
                </div>
	        </div>
	    </div>
	</section>
	<!-- end product Area -->

	<!-- Start brand Area -->
	<section class="brand-area section_gap">
	    <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Our Members</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et
                            dolore
                            magna aliqua.</p>
                    </div>
                </div>
            </div>
	        <div class="row">
                <?php foreach($data['brand'] as $value) :?>
	            <a class="col single-img" href="<?=$value['url']?>">
	                <img class="img-fluid d-block mx-auto" src="frontend/img/brand/<?=$value['image']?>" alt="<?=$value['name']?>">
                </a>
                <?php endforeach; ?>
	        </div>
	    </div>
	</section>
	<!-- End brand Area -->