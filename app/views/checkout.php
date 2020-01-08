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
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Billing Details</h3>
                        <?php foreach($data['myCheckout'] as $key=>$value2) : ?>
                        <form class="row contact_form" action="checkout/updatecheckout" method="post" novalidate="novalidate">
                        <input type="hidden" name="id" value="<?=$value2['id']?>">
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