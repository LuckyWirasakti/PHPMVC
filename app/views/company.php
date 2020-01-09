<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Company Profile</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="">Company Profile</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<br>
	<!-- End Banner Area -->
	<!-- Start Sample Area -->

	<!-- Start Button -->

	<!-- End Button -->
	<!-- Start Align Area -->
	<div class="whole-wrap pb-100">
		<div class="container">
			<div class="section-top-border">
				<div class="row">
					<div class="col-md-12">

	<!-- End Sample Area --> 
	                     <?php $no=1;
                        foreach($data['company'] as $value) : ?>        
						<img width="200" src="<?=BASE_URL?>/uploads/company/<?=$value['image']?>" width="80%">
					</div>
					<div class="col-md-6 mt-sm-20">
	<br/>
	                  <p><?=$value['description']?></p>
					</div>
				</div>
				 <?php endforeach; ?><br/><br/>
			</div>
		 
		

		</div>
	</div>
</div>

	
			
	<!-- End Align Area -->

