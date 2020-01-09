<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1><?=$data['title']?></h1>
                <nav class="d-flex align-items-center">
                    <a href="<?=BASE_URL?>/member">Member<span class="lnr lnr-arrow-right"></span></a>
                    <a href="<?=BASE_URL?>/member"><?=$data['title']?></a>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="blog_area single-post-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget author_widget">
                        <h3 class="widget_title">My Profile</h3>
                        <?php if(Flasher::getMemberLog()['imageprofile']==""){?>
                <img class="author_img rounded-circle" src="<?=BASE_URL;?>/uploads/user-profile/noimage.png" width="80%" alt=""><br/><br/>
            <?php }else{ ?>
            <img class="author_img rounded-circle" src="<?=BASE_URL;?>/uploads/user-profile/<?=Flasher::getMemberLog()['imageprofile']?>" width="80%" alt=""><br/><br/>
            <?php } ?>
                        <h4><?=strtoupper(Flasher::getMemberLog()['username']);?></h4>
                    </aside>
                    <aside class="single_sidebar_widget post_category_widget mt-5 mb-3">
                        <ul class="list cat-list">
                            <li>
                                <a class="d-flex justify-content-between">
                                    <p>Email </p>
                                    <p><?=Flasher::getMemberLog()['email'];?></p>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex justify-content-between">
                                    <p>Gender</p>
                                    <p><?=Flasher::getMemberLog()['gender']=='L'?'Man':'Woman';?></p>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex justify-content-between">
                                    <p>Favorite Food</p>
                                    <p><?=Flasher::getMemberLog()['food'];?></p>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex justify-content-between">
                                    <p>Mother Name</p>
                                    <p><?=Flasher::getMemberLog()['mom'];?></p>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex justify-content-between">
                                    <p>Created At</p>
                                    <p><?=Flasher::getMemberLog()['create_at'];?></p>
                                </a>
                            </li>
                        </ul>

                    </aside>
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Menu</h4>
                        <ul class="list cat-list">
                            <li>
                                <a href="<?=BASE_URL?>/profile" class="d-flex justify-content-between">
                                    <p>Profile</p>
                                    <p><i class="lnr lnr-arrow-right"></i></p>
                                </a>
                            </li>
                            <li>
                                <a href="<?=BASE_URL?>/payment/list/<?=Flasher::getMemberLog()['id'];?>" class="d-flex justify-content-between">
                                    <p>Payment</p>
                                    <p><i class="lnr lnr-arrow-right"></i></p>
                                </a>
                            </li>
                            <li>
                                <a href="<?=BASE_URL?>/contact" class="d-flex justify-content-between">
                                    <p>Help and Support</p>
                                    <p><i class="lnr lnr-arrow-right"></i></p>
                                </a>
                            </li>
                            <li>
                                <a href="<?=BASE_URL?>/member/logout" class="d-flex justify-content-between">
                                    <p>Logout</p>
                                    <p><i class="lnr lnr-arrow-right"></i></p>
                                </a>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
            <div class="col-lg-8">
                <h3 class="mb-3">Transaction History</h3>
                <div class="progress-table-wrap">
                    <div class="progress-table" style="min-width: auto">
                        <div class="table-head">
                            <div class="serial">#</div>
                            <div class="country">Name</div>
                            <div class="visit">Qty</div>
                            <div class="percentage">Total</div>
                            <div class="percentage">Status Payment</div>
                        </div>
                        <?php foreach ($data['transaction'] as $key=>$value):?>
                        <div class="table-row">
                            <div class="serial"><?=$key+1?></div>
                            <div class="country"><?=$value['name']?></div>
                            <div class="visit"><?=$value['qty']?></div>
                            <div class="visit">$<?=$value['total_price']?></div>
                            <div class="visit">$<?=$value['total_price']?></div>
                            <!-- <div class="percentage">
                                <a href="" class="genric-btn primary circle arrow">Store<span class="lnr lnr-arrow-right"></span></a>
                            </div> -->
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>