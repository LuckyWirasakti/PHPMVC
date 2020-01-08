<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Product Details Page</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
                    <a href="single.phpl">Products Details</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Single Product Area =================-->
<div class="product_image_area">
    <div class="container">
        <?php foreach ($data['product'] as $valueproduct) : ?>
        <div class="row s_product_inner">
            <div class="col-lg-6">
                <div class="s_Product_carousel">
                    <div class="single-prd-item">
                        <img class="img-fluid" src="<?=BASE_URL?>/frontend/img/product/<?=$valueproduct['image']?>" alt="">
                    </div>
                    <div class="single-prd-item">
                        <img class="img-fluid" src="<?=BASE_URL?>/frontend/img/product/<?=$valueproduct['image']?>" alt="">
                    </div>
                    <div class="single-prd-item">
                        <img class="img-fluid" src="<?=BASE_URL?>/frontend/img/product/<?=$valueproduct['image']?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
            <form class="row contact_form" action="<?=BASE_URL?>/cart/addcart/<?=$valueproduct['id']?>" method="post" id="contactForm"
                                novalidate="novalidate">
            <input type="hidden" name="id_product" value="<?=$valueproduct['id']?>">
            <input type="hidden" name="user_cart" value="<?=$valueproduct['id']?><?=Flasher::getMemberLog()['id']?>">
            <input type="hidden" name="id_users" value="<?=Flasher::getMemberLog()['id']?>">
            <input type="hidden" name="status_cart" value="1">
                <div class="s_product_text">
                    <h3><?=$valueproduct['name']?></h3>
                    <h2>$<?=$valueproduct['price']?></h2>
                    <ul class="list">
                        <li><a class="active" href="#"><span>Category</span> : Household</a></li>
                        <li><a href="#"><span>Stok</span> : <?=$valueproduct['status_product']?></a></li>
                    </ul>
                    <p><?=$valueproduct['description']?></p>
                    <div class="product_count">
                        <label for="qty">Quantity:</label>
                        <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                            class="input-text qty">
                        <button
                            onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                            class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                        <button
                            onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                            class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                    </div>
                    <div class="card_area d-flex align-items-center">
                    <?php 
            if(is_null(Flasher::getMemberLog()['id'])){
                
            }else{
            ?>
                        <button type="submit" class="primary-btn" >Add to Cart</button>
                    </div>
            <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->

<!--================Product Description Area =================-->
<section class="product_description_area">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                    aria-controls="contact" aria-selected="false">Comments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab"
                    aria-controls="review" aria-selected="false">Reviews</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <?php foreach($data['comment'] as $value) : ?>
                        <div class="comment_list">
                            <div class="review_item">
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="img/product/review-1.png" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4><?=$value['name']?></h4>
                                        <h5>12th Feb, 2018 at 05:56 pm</h5>
                                    </div>
                                </div>
                                <p class="mb-4"><?=$value['comment']?></p>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                    <div class="col-lg-6">
                        <div class="review_box">
                            <h4>Post a comment</h4>
                            <form class="row contact_form" action="<?=BASE_URL?>/single/store_comment/<?=$valueproduct['id']?>" method="post" id="contactForm"
                                novalidate="novalidate">
                                <input type="hidden" name="id_product" value="<?=$valueproduct['id']?>">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Your Full name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="comment" id="comment" rows="1"
                                            placeholder="Comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 text-right">
                                    <button type="submit" value="submit" class="btn primary-btn">Submit Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade show" id="review" role="tabpanel" aria-labelledby="review-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- <div class="row total_rate">
                            <div class="col-6">
                                <div class="box_total">
                                    <h5>Overall</h5>
                                    <h4>4.0</h4>
                                    <h6>(03 Reviews)</h6>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="rating_list">
                                    <h3>Based on 3 Reviews</h3>
                                    <ul class="list">
                                        <li><a href="#">5 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i> 01</a></li>
                                        <li><a href="#">4 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i> 01</a></li>
                                        <li><a href="#">3 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i> 01</a></li>
                                        <li><a href="#">2 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i> 01</a></li>
                                        <li><a href="#">1 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i> 01</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                        <?php foreach($data['review'] as $value) : ?>
                        <div class="review_list">
                            <div class="review_item mb-3">
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="img/product/review-1.png" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4><?=$value['name']?></h4>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <p><?=$value['reviews']?></p>
                            </div>                            
                        </div>
                        <?php endforeach;?>
                    </div>
                    <?php 
            if(is_null(Flasher::getMemberLog())){
                
            }else{
            ?>
                    <div class="col-lg-6">
                        <div class="review_box">
                            <h4>Add a Review</h4>
                            <p>Your Rating:</p>
                            <ul class="list">
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <form class="row contact_form" action="single/store_review" method="post" id="contactForm"
                                novalidate="novalidate">
                                <input type="hidden" name="id_product" value="<?=$valueproduct['id']?>">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Your Full name" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Your Full name'">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email Address" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Email Address'">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="Phone Number" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Phone Number'">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="reviews" id="reviews" rows="1"
                                            placeholder="Review" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Review'"></textarea></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 text-right">
                                    <button type="submit" value="submit" class="primary-btn">Submit Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    
    <?php endforeach;?>
</section>
