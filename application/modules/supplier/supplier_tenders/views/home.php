<!--************************************
		Banner Start
*************************************-->
<!-- <div class="tg-banner tg-haslayout">
	<div class="tg-imglayer">
		<img src="images/bg-pattran.png" alt="image desctription">
	</div>
	<div class="container">
		<div class="row">
			<div class="tg-banner-content tg-haslayout">
				<div class="tg-pagetitle">
					<h1>Tenders</h1>
				</div>
				<ol class="tg-breadcrumb">
					<li><a href="<?= $indexurl ?>">Home</a></li>
					<li class="active">Tenders</li>
				</ol>
			</div>
		</div>
	</div>
</div> -->
<!--************************************
		Banner End
*************************************-->
<!--************************************
		Main Start
*************************************-->
<main id="tg-main" class="tg-main tg-haslayout">
	<section class="tg-main-section tg-haslayout">
		<div class="container">
			<div class="tg-section-name">
				<h2>Tenders</h2>
			</div>
			<div class="col-sm-11 col-xs-11 pull-right">
				<ul class="nav nav-tabs">
					<li class="<?php echo $tab ==1 ? "active" : "" ?>"><a data-toggle="tab" href="#home">Tenders</a></li>
					<li class="<?php echo $tab ==2 ? "active" : "" ?>"><a data-toggle="tab" href="#menu1">My Tenders</a></li>
				</ul>

				<div class="tab-content">
					<div id="home" class="tab-pane fade  <?php echo $tab ==1 ? "in active" : "" ?>">
						<div class="row" style="margin-top: 15px;">
							<div class="tg-tickets">
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">27<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">Tender No : TDR001860</span>
										<h4>Tender Name 1</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Tender Short DIscription</address></li>
										</ul>
									</div>
									<div class="tg-btnsbox">
										<a class="tg-btn" href="#">read more</a>
										<a class="tg-btn" href="<?php echo base_url("supplier/tenders/apply/1") ?>">Apply </a>
										<!-- // tender id -->
									</div>
								</div>
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">27<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">Tender No : TDR001862</span>
										<h4>Tender Name 2</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Tender Short DIscription</address></li>
										</ul>
									</div>
									<div class="tg-btnsbox">
										<a class="tg-btn" href="#">read more</a>
										<a class="tg-btn" href="#">Apply </a>
									</div>
								</div>
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">27<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">Tender No : TDR001889</span>
										<h4>Tender Name 3</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Tender Short DIscription</address></li>
										</ul>
									</div>
									<div class="tg-btnsbox">
										<a class="tg-btn" href="#">read more</a>
										<a class="tg-btn" href="#">Apply </a>
									</div>
								</div>


							</div>
						</div>
					</div>
					<div id="menu1" class="tab-pane fade <?php echo $tab ==2 ? "in active" : "" ?>">
						<div class="row" style="margin-top: 15px;">
							<div class="tg-tickets">
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">27<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">My Tender No : TDR001860</span>
										<h4>My Tender Name 1</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Tender Short Description</address></li>
										</ul>
									</div>
									<div class="tg-btnsbox">
										<a class="tg-btn" href="#">read more</a>
										
									</div>
								</div>
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">27<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">My Tender No : TDR001862</span>
										<h4>My Tender Name 2</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Tender Short Description</address></li>
										</ul>
									</div>
									<div class="tg-btnsbox">
										<a class="tg-btn" href="#">read more</a>
										
									</div>
								</div>
								


							</div>
						</div>
					
					</div>
					
				</div>
        

			
			</div>
		</div>
	</section>
</main>
