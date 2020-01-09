<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shopping Cart</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Cart</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
<!--================Cart Area =================-->
<section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                        <form action="cart/updatecart" method="post" enctype="multipart/form-data">
                        <?php foreach($data['usercart'] as $key=>$value) : ?>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="img/product/<?=$value['img']?>" width="50%" alt="">
                                            <input type="hidden" name="id_cart[]" value="<?=$value['id']?>"?>
                                        </div>
                                        <div class="media-body">
                                            <p><?=$value['product_name']?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>$<?=$value['product_price']?></h5>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <input type="text" name="qty[]" id="sst[<?=$key?>]" maxlength="12" value="<?=$value['qty']?>" title="Quantity:"
                                            class="input-text qty">
                                        <button onclick="var result = document.getElementById('sst[<?=$key?>]'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                            class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                        <button onclick="var result = document.getElementById('sst[<?=$key?>]'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                            class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                    </div>
                                </td>
                                <td>
                                    <h5><?php $total = $value['product_price']*$value['qty']; echo '$ '.$total; ?></h5>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <tr class="bottom_button">
                                <td>
                                <button type="submit" class="gray_btn">Update Cart</button>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                            </tr>
                            </form>
                            <tr>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <h5>Subtotal</h5>
                                </td>
                                <td>
                            <?php foreach($data['totalcart'] as $total ) :?>
                                    <h5>$<?=$total['total']?></h5>
                        <?php endforeach; ?>
                                </td>
                            </tr>
                            <tr class="shipping_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                   <h5>Shipping</h5>
                                </td>
                                <td>
                                    <div class="shipping_box">
                                        <ul class="list">
                                            
                                            <li class="active"><a href="#">Free Shipping</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="out_button_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <!-- <td>

                                </td> -->
                                <form action="checkout/addcheckout" method="post">
								<input type="hidden" name="user_cart" value="<?=Flasher::getMemberLog()['id']?>">
								<input type="hidden" name="id_users" value="<?=Flasher::getMemberLog()['id']?>">
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href="home">Continue Shopping</a>
<<<<<<< master
                                        <button class="primary-btn" type="submit">Proceed to checkout</butto>
                                    </div> 
=======
                                       <?php  if(Flasher::getMemberLog()['id']){ ?>
                                        <button class="primary-btn" type="submit">Proceed to checkout</button>
                                       <?php } ?>
                                    </div>
                                    </div>
>>>>>>> local
                                </td>
					</form>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->