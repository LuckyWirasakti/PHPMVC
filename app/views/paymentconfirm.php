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
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <h3 class="mb-3 text-center">Confirm Payment </h3>
                <?php foreach ($data['myConfirmPayment'] as $key => $myConfirmPayment):?>
                <div class="col-md-12 form-group p_star">
                
                <form class="row contact_form" action="<?=BASE_URL;?>/payment/confirmpayment" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$myConfirmPayment['pc_id']?>">
                            <div class="col-md-12 form-group p_star">
                            <h5>Kode Payment</h5>
                                <input type="text" class="form-control" value="<?=$myConfirmPayment['kode_payment']?>" readonly>
                              
                            </div>
                            <div class="col-md-12 form-group p_star">
                            <h5>Payment Method</h5>
                                <input type="text" class="form-control" value="<?=$myConfirmPayment['payment_method']?>" readonly>
                            </div>
                            <div class="col-md-12 form-group p_star">
                            <h5>Total Price</h5>
                                <input type="text" class="form-control" value="$<?=$myConfirmPayment['total_price']?>" readonly>
                                
                            </div>
                            <?php if($myConfirmPayment['image']==""){?>
                                <div class="col-md-12 form-group p_star">
                            <h5>Upload Transfer</h5>
                            <input type="file" class="form-control" name="paymentimage" required><br/>    
                            </div>
                            <div class="row col-md-12 offset-md-9">
                    <button style="float:right" name="submit" class="btn-md primary-btn pull-right" type="submit">Confirm Payment</button>
                    </div>
                            <?php }else{ ?>
                            <img class="img-fluid" src="<?=BASE_URL;?>/uploads/payement/<?=$myConfirmPayment['image']?>" width="250px" alt=""><br/><br/>
                            <?php } ?>
                            
            </div>
            
            </form>
                <?php endforeach;?>
        </div>
    </div>
</section>