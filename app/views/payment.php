<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Payment</h1>
                    <nav class="d-flex align-items-center">
                        <a href="#">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="#">Payment</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
        <div class="col-lg-6 offset-3">
        <?php foreach($data['myPayment'] as $key=>$value) : ?>
                        <form action="<?=BASE_URL?>/payment/generate" method="post">
                        <input type="hidden" name="id" value="<?=$value['id']?>">
                        <input type="hidden" name="user_id" value="<?=Flasher::getMemberLog()['id']?>">
                        <div class="order_box">
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5"  name="payment_method" value="Paypal">
                                    <label for="f-option5">Paypal </label>
                                    <img src="img/product/card.jpg" alt="">
                                    <div class="check"></div>
                                </div>
                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                    account.</p>
                            </div>
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option6"  name="payment_method" value="Bank BCA">
                                    <label for="f-option6">Bank BCA </label>
                                    <img src="img/product/card.jpg" alt="">
                                    <div class="check"></div>
                                </div>
                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                    account.</p>
                            </div>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector" checked>
                                <label for="f-option4">I’ve read and accept the </label>
                                <a href="#">terms & conditions*</a>
                            </div>
                            <button class="primary-btn" type="submit">complete the payment</button>
                        </div>
                        </form>
                        <?php endforeach; ?>
                    </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->
   