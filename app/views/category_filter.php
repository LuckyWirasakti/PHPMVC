<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Shop Category page</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Fashon Category</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<div class="container">
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
            <div class="sidebar-categories">
                <div class="head">Shoes Categories</div>
                <ul class="main-categories">
                    <li class="main-nav-list"><a href="<?=BASE_URL?>/category"></span>All Category<span
                                class="number"></span></a>
                    </li>
                    <?php foreach($data['allcategory'] as $value) : ?>
                    <li class="main-nav-list"><a
                            href="<?=BASE_URL?>/category/filter/<?=$value['id']?>"></span><?=$value['category']?><span
                                class="number"></span></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7 mb-5">
            <!-- Start Filter Bar -->

            <!-- End Filter Bar -->
            <!-- Start Best Seller -->
            <section class="lattest-product-area pb-40 category-list">
                <div class="row">
                    <?php $no=1;
                                foreach($data['category'] as $value) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-product">

                            <img class="img-fluid" src="<?=BASE_URL?>/frontend/img/product/<?=$value['image']?>" alt="">
                            <div class="product-details">
                                <h6><?=$value['name']?></h6>
                                <div class="price">
                                    <h6><?=$value['price']?></h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                                <div class="prd-bottom">
                                    <a href="<?=BASE_URL?>/single/detail/<?=$value['id']?>" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">view more</p>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>
            <!-- single product -->

            <!-- End Best Seller -->
            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item <?=$data['active']==1 ? 'disabled':''?>">
                            <a class="page-link text-black-50 " href="<?=BASE_URL?>/category/<?=$data['active']-1?>">
                                <<</a> </li> <?php for($i = 1; $i <= $data['pagination']; $i++) :?> <li
                                    class="page-item">
                                    <a class="page-link text-black-50 <?=$data['active']==$i ? 'active':''?>"
                                        href="<?=BASE_URL?>/category/filter/<?=$data['idcat']?>/<?=$i?>"><?=$i?></a>
                        </li>
                        <?php endfor; ?>
                        <li class="page-item <?=$data['active']==$data['pagination'] ? 'disabled':''?>">
                            <a class="page-link text-black-50 "
                                href="<?=BASE_URL?>/category/<?=$data['active']+1?>">>></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- End Filter Bar -->
        </div>
        </li>
        </ul>
    </div>
</div>
</div>
</div>




<!-- Start related-product Area -->