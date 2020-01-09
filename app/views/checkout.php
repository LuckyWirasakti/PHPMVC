<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Checkout</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.html">Checkout</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <!-- <div class="returning_customer">
                <div class="check_title">
                    <h2>Returning Customer? <a href="#">Click here to login</a></h2>
                </div>
                <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new
                    customer, please proceed to the Billing & Shipping section.</p>
                <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                    <div class="col-md-6 form-group p_star">
                        <input type="text" class="form-control" id="name" name="name">
                        <span class="placeholder" data-placeholder="Username or Email"></span>
                    </div>
                    <div class="col-md-6 form-group p_star">
                        <input type="password" class="form-control" id="password" name="password">
                        <span class="placeholder" data-placeholder="Password"></span>
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" value="submit" class="primary-btn">login</button>
                        <div class="creat_account">
                            <input type="checkbox" id="f-option" name="selector">
                            <label for="f-option">Remember me</label>
                        </div>
                        <a class="lost_pass" href="#">Lost your password?</a>
                    </div>
                </form>
            </div>
            <div class="cupon_area">
                <div class="check_title">
                    <h2>Have a coupon? <a href="#">Click here to enter your code</a></h2>
                </div>
                <input type="text" placeholder="Enter coupon code">
                <a class="tp_btn" href="#">Apply Coupon</a>
            </div> -->
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Billing Details</h3>
                        <?php foreach($data['myCheckout'] as $key=>$value2) : ?>
                        <form class="row contact_form" action="checkout/updatecheckout" method="post" novalidate="novalidate">
                        <input type="hidden" name="id" value="<?=$value2['id']?>">
                        <input type="hidden" name="user_id" value="<?=Flasher::getMemberLog()['id']?>">
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="first" name="fullname" placeholder="Fullname" value="<?=$value2['fullname']?>">
                                
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="number" name="numberphone" placeholder="Phone Number" value="<?=$value2['numberphone']?> ">
                                
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?=$value2['email']?>">
                              
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select name="country" class="country_select">
                                <?php if($value2['country']): ?>
                                    <option value="<?=$value2['country']?>"><?=$value2['country']?></option>
                                <?php endif; ?>
                                <option value="">Country</option>
                                    <option value="Indonesia">Indonesia</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
                            <textarea class="form-control" name="myaddress" id="address" rows="1" placeholder="Address"><?=$value2['myaddress']?></textarea>
                               
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="province" name="province" placeholder="Province" value="<?=$value2['province']?>">
                                
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="city" name="city" placeholder="Town/City" value="<?=$value2['city']?>">
                                
                            </div>
                            <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="district" name="district" placeholder="District" value="<?=$value2['district']?>">
                               
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="number" class="form-control" id="zip" name="postcode" value="<?=$value2['postcode']?>" placeholder="Postcode/ZIP">
                            </div>
                            <!-- <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selector">
                                    <label for="f-option2">Create an account?</label>
                                </div>
                            </div> -->
                            <!-- <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <h3>Order Notes</h3>
                                    <input type="checkbox" id="f-option3" name="selector">
                                    <label for="f-option3">Ship to a different address?</label>
                                </div>
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Your order notes.."></textarea>
                            </div> -->
                    </div>
                    <div class="col-lg-6">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li><a href="#">Product <span>Total</span></a></li>
                                <?php foreach($data['myCart'] as $key=>$value) : ?>
                                <li><a href="#"><?=$value['name']?> <span class="middle">x <?=$value['qty']?></span> <span class="last"><?php $total = $value['price']*$value['qty']; echo '$ '.$total; ?></span></a></li>
                                <?php endforeach; ?>
                            </ul>
                            <ul class="list list_2">
                                <!-- <li><a href="#">Subtotal <span>$2160.00</span></a></li> -->
                                 <li><a href="#">Shipping <span>Free Shipping: $0</span></a></li>
                                <li><a href="#">Total <span>
                                <?php foreach($data['totalmyCart'] as $total ) :?>
                                    $<?=$total['total']?>
                                    <input type="hidden" name="total_price" value="<?=$total['total']?>">
                                    <?php endforeach; ?>
                                </span></a></li>
                            </ul>
                            
                            <!-- <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="selector">
                                    <label for="f-option5">Check payments</label>
                                    <div class="check"></div>
                                </div>
                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County,
                                    Store Postcode.</p>
                            </div>
                            <div class="payment_item active">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option6" name="selector">
                                    <label for="f-option6">Paypal </label>
                                    <img src="img/product/card.jpg" alt="">
                                    <div class="check"></div>
                                </div>
                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                    account.</p>
                            </div> -->
                            <!-- <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector">
                                <label for="f-option4">I’ve read and accept the </label>
                                <a href="#">terms & conditions*</a>
                            </div> -->
                            <button class="primary-btn" type="submit">complete the order</button>
                        </div>
                        <?php endforeach; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->