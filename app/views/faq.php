<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>FAQ Page</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">FAQ</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<div class="whole-wrap pb-5 pt-5 ">
    <div class="container">
        <div class="section-top-border">
            <h3 class="mb-30 pb-2">FAQ</h3>
            <div class="row">
                <?php foreach($data['faq'] as $value) : ?>
                <div class="col-md-6 mb-3">
                    <div class="single-defination">
                        <h4 class="mb-20"><?=$value['question']?></h4>
                        <p><?=$value['answer']?></p>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>