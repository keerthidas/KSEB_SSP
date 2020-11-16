<!--************************************
		Banner Start
*************************************-->
<div class="tg-banner tg-haslayout">
	<div class="tg-imglayer">
		<img src="images/bg-pattran.png" alt="image desctription">
	</div>
	<div class="container">
		<div class="row">
			<div class="tg-banner-content tg-haslayout">
				<div class="tg-pagetitle">
					<h3><?php echo $title; ?></h3>
				</div>
				<ol class="tg-breadcrumb">
					<?php

					$url= '#';
					if(isset($indexurl)){
						$url=$indexurl;
					}
					?>
					<li><a href="<?= $url ?>">Home</a></li>
					<li class="active"><?php echo $title; ?></li>

                </ol>
    
			</div>
            
		</div>
	</div>
</div>

<div id="main" style="opacity:0">
  <button class="openbtn"  data-toggle="tooltip" title="Quick Links!">☰ </button>
  </div>
             

<div class="col-md-12 row all-slides">
<div class="col-md-2">
