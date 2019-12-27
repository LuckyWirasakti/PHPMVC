<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Payment</h1>
                    <nav class="d-flex align-items-center">
                        <a href="#">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="#">Payment<span class="lnr lnr-arrow-right"></span></a>
                        <a href="#">Pay Now</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <section class="order_details section_gap">
		<div class="container">
            <?php foreach($data['myPaymentJoin'] as $key=>$value) : ?>
                <h3 style="text-align:center;font-style:italic">Thank you. Your order has been received.<br/><br/> Please complete your payment to <b><?=$value['payment_method']?></b> amount <b>$<?=$value['total_price']?></b> then upload proof of your payment transaction with the code <b><?=$value['kode_payment']?></b></h3>
            <?php endforeach; ?>
        </div>
	</section>
   