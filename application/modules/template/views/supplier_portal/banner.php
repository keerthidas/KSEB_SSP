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
				<!-- <div class="tg-pagetitle">
					<h3><?php echo $title; ?></h3>
				</div> -->
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


  <style>
  
  .p-10{
	  padding-top:10px;
  }
  </style>
             

  <?php if($this->uri->segment(2) == 'tenders')  { ?>

			<div class="">

 				<div class="col-sm-12 col-xs-12 p-10">

 					<div class="form-group row form_filter">

 						<div class="col-sm-12 col-lg-3" >
 							<select class="select2 form-control" id="tenderid" name="group_flat__id"
 												data-placeholder="Select a TenderId" >
												 <option>Select Tender</option>
 								<option value="0">TDR001860</option> 
								<option value="0">TDR001862</option> 
							   	<option value="0">TDR001889</option>
							</select>
 									

 						</div>

						<div class="col-sm-3 col-xs-12 ">
 							
 							<input type="date" class="select2 form-control"  id="district" name="group_flat__id" placeholder="Select a date" >
							
 						</div>

						<div class="col-sm-3 col-xs-12 ">
 							
 							<select class="select2 form-control"  placeholder="Select a location/purchaser">
							 <option>Select Location</option>
                            	<option value="0">TVM TEST</option> 
								<option value="0">KTM 11</option> 
							   	<option value="0">EKM 89</option>
							</select>	

 								
 						</div>

						<div class="col-sm-3 col-xs-12 ">
 							
 							<input type="button" value="search" class="btn btn-primary">
 						
 						</div>
 					</div>
				</div>
			</div>
  <?php } else{ ?>

	<div id="main" style="opacity:0">
  <button class="openbtn"  data-toggle="tooltip" title="Quick Links!">☰ </button>
  </div>
	  
	  
<?php	 
  }?>

<div class="col-md-12 row all-slides">
<div class="col-md-2">
