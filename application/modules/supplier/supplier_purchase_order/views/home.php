
<script src="<?=base_url()?>assets/supplier_portal/js/vendor/jquery-library.js"></script>
<script src="<?=base_url()?>assets/supplier_portal/js/vendor/bootstrap.min.js"></script>

<main id="tg-main" class="tg-main tg-haslayout">
	<section class="tg-main-section tg-haslayout">
		<div class="container">
			<div class="tg-section-name">
				<h2>Purchase Orders</h2>
			</div>
			<div class="col-sm-11 col-xs-11 pull-right">
				<ul class="nav nav-tabs">
					<li class="<?php echo $tab ==1 ? "active" : "" ?>"><a data-toggle="tab" href="#home">Purchase Orders</a></li>
					<li class="<?php echo $tab ==2 ? "active" : "" ?>"><a data-toggle="tab" href="#menu1">My Purchase Orders</a></li>
				</ul>
				<div class="tab-content">
					<div id="home" class="tab-pane fade  <?php echo $tab ==1 ? "in active" : "" ?>">
						<div class="row">
							<div class="tg-tickets">
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">27<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">Order No : PCO88944556</span>
										<h4>Tender Name 1</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Tender Short DIscription</address></li>
										</ul>
									</div>
									<div class="tg-btnsbox">
										<a class="tg-btn modal-view" href="#" >View</a>
									</div>
								</div>

								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">20<span>JAN</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">Order No : PCO8895544</span>
										<h4>Tender Name 2</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Tender Short DIscription</address></li>
										</ul>
									</div>
									<div class="tg-btnsbox">
										<a class="tg-btn modal-view" href="#">View</a>
									</div>
								</div>


							</div>
						</div>
					</div>
					<div id="menu1" class="tab-pane fade  <?php echo $tab ==2 ? "in active" : "" ?>">
						<div class="row">
							<div class="tg-tickets">
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">27<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">Order No : PCO88944556</span>
										<h4>Tender Name 1</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Tender Short DIscription</address></li>
										</ul>
									</div>
									<div class="tg-btnsbox">
										<a class="tg-btn modal-view" href="#" >Action</a>
									</div>
									
								</div>

								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03">20<span>JAN</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">Order No : PCO8895544</span>
										<h4>Tender Name 2</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Tender Short DIscription</address></li>
										</ul>
									</div>
									<!-- <div class="dropdown">
										<button onclick="myFunction()" class="dropbtn">Action</button>
										<div id="myDropdown" class="dropdown-content">
											<a href="#home">Home</a>
											<a href="#about">About</a>
											<a href="#contact">Contact</a>
										</div>
										</div> -->

								</div>


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>



<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog widthAdjust">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Purchase order details</h4>
      </div>
      <div class="modal-body">
	  <table style="width:100%" class="maintable">
	  	<tr>
			<td>Vendor:</td>  
			<td>ABCD XYZ</td>
		</tr>
	  	<tr>
			<td>Tender Name:</td>  
			<td>TNDR#0001</td>
		</tr>
		<tr>
			<td>Date:</td>  
			<td>18-03-2020</td>
		</tr>
		<tr>
			<td>PAC Amount:</td>  
			<td>25000</td>
		</tr>
		<tr>
			<td>Amount:</td>  
			<td>25000</td>
		</tr>
		<tr>
			<td>PAC Amount:</td>  
			<td>25000</td>
		</tr>
		<tr>
			<td>Security Deposit:</td>  
			<td>2000</td>
		</tr>
			<table class="table">
				<tr>
					<th>Material</th>
					<th>Basic Price</th>
					<th>Freight Charges</th>
					<th>Quantity</th>
					<th>Unit price</th>
					<th>Total</th>
				
				</tr>
				<tr>
					<td>LED</td>
					<td>1001</td>
					<td>0.00</td>
					<td>2</td>
					<td>100</td>
					<td>200</td>
				</tr>
			
			</table>
	  </table>
		<div>
			<button type="button" class="btn btn-primary changereq-view" >Change Request</button>
			<button type="button" class="btn btn-success loa-view" >Letter of Acceptance</button>
	  	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<div id="myModal_Loa" class="modal fade" role="dialog">
  <div class="modal-dialog widthAdjust">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Letter of Acceptance</h4>
      </div>
      <div class="modal-body">
	  <table style="width:100%" class="maintable">
	  	<tr>
			<td>Vendor:</td>  
			<td>ABCD XYZ</td>
		</tr>
	  	<tr>
			<td>Tender Name:</td>  
			<td>TNDR#0001</td>
		</tr>
		<tr>
			<td>Date:</td>  
			<td>18-03-2020</td>
		</tr>
		<tr>
			<td><input type="checkbox"><a href="#">Agree to the terms & conditions</a></td>
		</tr>
		
			
	  </table>
		
      </div>
      <div class="modal-footer">
	  <button type="button" class="btn btn-primary" data-dismiss="modal" >Accept</button>

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<div id="myModal_changereq" class="modal fade" role="dialog">
  <div class="modal-dialog widthAdjust">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Change request </h4>
      </div>
      <div class="modal-body">
	  <label>Comment</label>
	  <textarea class="form-control"></textarea>
		
      </div>
      <div class="modal-footer">
	  <button type="button" class="btn btn-primary" data-dismiss="modal" >Save</button>

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<script>

	$(document).ready(function(){
		$('.modal-view').click(function(e){
			e.preventDefault();
		
			$('#myModal').modal();
		});
		$('.loa-view').click(function(e){
			e.preventDefault();
		
			$('#myModal_Loa').modal();
		});

		$('.changereq-view').click(function(e){
			e.preventDefault();
		
			$('#myModal_changereq').modal();
		});

		
	});


</script>



<style>

.maintable>tbody>tr>td{
	border:none!important;
	text-align:left;
}
.widthAdjust{
	max-width:1000px;
	width:100%;
}
</style>

<style>
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>