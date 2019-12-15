<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1><?=$data['title']?></h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Search</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- start product Area -->
<section class="section_gap">
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Related Products</h1>
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

                            <img class="img-fluid" src="<?=BASE_URL?>/frontend/img/product/<?=$value['image']?>" alt="">
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
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-md justify-content-center">
                        <li class="page-item <?=$data['active']==1 ? 'disabled':''?>">
                            <a class="page-link text-black-50 " href="<?=BASE_URL?>/home/show/<?=$data['search']?>/<?=$data['active']-1?>"><<</a>
                        </li>
                        <?php for($i = 1; $i <= $data['pagination']; $i++) :?>
                            <li class="page-item">
                                <a class="page-link text-black-50 <?=$data['active']==$i ? 'active':''?>" href="<?=BASE_URL?>/home/show/<?=$data['search']?>/<?=$i?>"><?=$i?></a>
                            </li>
                        <?php endfor; ?>
                        <li class="page-item <?=$data['active']==$data['pagination'] ? 'disabled':''?>">
                            <a class="page-link text-black-50 " href="<?=BASE_URL?>/home/show/<?=$data['search']?>/<?=$data['active']+1?>">>></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- end product Area -->