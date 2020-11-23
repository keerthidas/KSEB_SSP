 <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->

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
									<!--<div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li class="dropdown-header">Dropdown header 1</li>
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
      <li class="divider"></li>
      <li class="dropdown-header">Dropdown header 2</li>
      <li><a href="#">About Us</a></li>
    </ul>
  </div>-->
  <div class="dropdown">
										<button onclick="myFunction()" class="pull-right dropbtn">Action</button>
										<div id="myDropdown" class=" pull-right dropdown-content">
											<a data-toggle="modal" data-target="#shipment">Shipments</a>
											<a data-toggle="modal" data-target="#documents">Documents</a>
											<a data-toggle="modal" data-target="#purchasdetails">ViewDetails</a>
											<a data-toggle="modal" data-target="#termsconditions">Terms and Condition</a>
											<a data-toggle="modal" data-target="#delivery_schedule">Delivery Schedule</a>
											
											<a href="#home">Print</a>
											<a href="#about">Download</a>
										</div>
										</div>
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
										
										  <div class="dropdown">
										<button onclick="myFunction()" class="pull-right dropbtn">Action</button>
										<div id="myDropdown" class=" pull-right dropdown-content">
											<a data-toggle="modal" data-target="#shipment">Shipments</a>
											<a data-toggle="modal" data-target="#documents">Documents</a>
											<a data-toggle="modal" data-target="#purchasdetails">ViewDetails</a>
											<a data-toggle="modal" data-target="#termsconditions">Terms and Condition</a>
											<a data-toggle="modal" data-target="#delivery_schedule">Delivery Schedule</a>
											
											<a href="#home">Print</a>
											<a href="#about">Download</a>
										</div>
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
			<td>Tender Name:</td>  
			<td>TNDR#0001</td>
		</tr>
		<tr>
			<td>Date:</td>  
			<td>18-03-2020</td>
		</tr>
    <tr>
			<td>Last Date of acceptance:</td>  
			<td>01-01-2021</td>
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


<!------------------------Purchase Details------------------------------------------------------->

<div class="modal fade" id="purchasdetails" style="padding-left: 0px !important;">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Purchase Details</h4>
                
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4 class="modal-title"><span id="inspect"></span></h4>
                <div class="table-responsive">

                    <table id="siteins" class="table table-striped table-bordered table-hover"
                        class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">sl no</th>
                                <th scope="col">Purchase Order No</th>
                                <th scope="col">Tender Name</th>
                                <th scope="col">Purchase Date</th>
								
                               
                            </tr>
                        </thead>
									<tr>
                                    <td>1</td>
                                    <td>PC088944556</td>
                                    <td>Tender name1</td>
                                    <td>27-11-2020</td>
                                    

                                </tr>
                                </tbody>
                        <tbody>
                            <tr class="gradeX">
                                <!--<td colspan="6" class="dataTables_empty">No data found</td>-->
                            </tr>
                        </tbody>
                        <tfoot>

                        </tfoot>

                    </table>

                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>


<!-------------------------Purchase DetailsEnd---------------------------------------------------->


<!------------------------Terms and Condition------------------------------------------------------->

<div class="modal fade" id="termsconditions" style="padding-left: 0px !important;">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Terms and Conditions</h4>
                
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4 class="modal-title"><span id="inspect"></span></h4>
                THIS Terms and Condition  is entered into on this date  by and between  a registered company 
WHEREAS, the Client desires to hire the services of the Company to render  services to ;<br>

NOW, THEREFORE, for and in consideration of the mutual covenants made by the parties hereto, the Parties to this agreement agree as follows:<br><br>

<button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>

                 </div>
  <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>				
       
    </div>
</div>

</div>
<!-------------------------terms andconditionEnd---------------------------------------------------->


<!------------------------Terms and Condition------------------------------------------------------->

<div class="modal fade" id="delivery_schedule" style="padding-left: 0px !important;">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Delivery Schedule</h4>
                
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4 class="modal-title"><span id="inspect"></span></h4>
                
                 </div>
  <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>				
       
    </div>
</div>

</div>
<!-------------------------terms andconditionEnd---------------------------------------------------->


<!------------------------Documents------------------------------------------------------->



<div class="modal fade" id="documents" style="padding-left: 0px !important;">

    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
               <ul class="nav nav-tabs">
  <li class="<?php echo $tab ==1 ? "active" : "" ?>"><a href="#agreements" data-toggle="tab">Agreements</a></li>
  <li class="<?php echo $tab ==2 ? "active" : "" ?>"><a href="#banks" data-toggle="tab">Bank Gurantee</a></li>
 
	</ul>
                
            
<div class="tab-content">
					<div id="agreements" class="tab-pane fade  <?php echo $tab ==1 ? "in active" : "" ?>">
					THIS AGREEMENT  is entered into on this date  by and between  a registered company 
WHEREAS, the Client desires to hire the services of the Company to render  services to ;<br>

NOW, THEREFORE, for and in consideration of the mutual covenants made by the parties hereto, the Parties to this agreement agree as follows:<br>

The Services

The Consultant agrees that it shall render services to the Client on matters pertaining to (the “Services”).

Compensation and Payment

The Client shall provide payment to the Consultant at the amount of  paid on every , beginning the next month of the commencement of this Agreement. 
<br><br>
 <button type="button" class="btn btn-primary" data-dismiss="modal">submit</button>
           </div>
		   <div id="banks" class="tab-pane fade  <?php echo $tab ==2 ? "in active" : "" ?>">
					<form action="upload.php" method="post" enctype="multipart/form-data">
 Copy of Bank Gurantee:
 <br> <br>
  <input type="file" name="fileToUpload" id="fileToUpload"><br>
  <input type="submit" value="Upload" name="submit">
</form>
           </div>
		   </div>
	
  <div class="modal-footer" >
  
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>				
       </div>
    </div>
</div>
</div>
<!-------------------------DocumentsEnd---------------------------------------------------->
<!------------------------------shipment--------------------------------------------------------->
<div class="modal fade" id="shipment" style="padding-left: 0px !important;">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">shipment</h4>
                
            </div>

            <!-- Modal body -->
            <div class="modal-body">
               <table id="siteins" class="table table-striped table-bordered table-hover"
                        class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">sl no</th>
                                <th scope="col">Material</th>
                                <th scope="col">Quantity </th>
                                <th scope="col">Action Request</th>
								
                               
                            </tr>
                        </thead>
									<tr>
                                    <td>1</td>
                                    <td>LED</td>
                                    <td>1000</td>
                                    <td><button  data-toggle="modal" data-target="#splitshipment" style="width:66px;color: #fff;background-color: #1e315d; border-color: #ffcc33;">Split</button></td>
                                    

                                </tr>
                                </tbody>
                        <tbody>
                            <tr class="gradeX">
                                <!--<td colspan="6" class="dataTables_empty">No data found</td>-->
                            </tr>
                        </tbody>
                        <tfoot>

                        </tfoot>

                    </table>

                 </div>
  <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>				
       
    </div>
</div>

</div>
<!-------------------------shipment End---------------------------------------------------->


<!------------------------Split Shipment------------------------------------------------------->

<div class="modal fade" id="splitshipment" style="padding-left: 0px !important;">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Split Shipment</h4>
                
            </div>

            <!-- Modal body -->
            <div class="modal-body">
			<div class=
                <h4 class="modal-title"><span id="inspect"></span></h4>
				<div class="split left">
  <div class="centered">
				<div class="container">
    <div class="panel panel-default">
     <!-- <div class="panel-heading"></div>-->
      <div class="panel-body">
            <div class="form-group">
                <label for="title">Select Product:</label>
                <select name="state" class="form-control">
                    <option value="0">LED</option>
			<option value="0">Bulb</option>

                </select>
            </div>


            <div class="form-group">
                <label for="title">Quantity:</label>
                <input type="text"  class="form-control" id="quantity" name="quantity" >
            </div>
			
			<div  class="form-group">
			 <button type="button" id="splitbutton "class="btn btn-primary" data-dismiss="modal">Request</button>
			</div>
</div>
</div>
      </div>
    </div>
</div>

<div class="split horizontal">
  <div class="centered">
				<div class="container">
    <div class="panel panel-default">
     <!-- <div class="panel-heading"></div>-->
      <div class="panel-body">
           <table id="siteins" class="table table-striped table-bordered table-hover"
                        class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">sl no</th>
                                <th scope="col">Product</th>
                                <th scope="col">Quantity</th>
                              
								
                               
                            </tr>
                        </thead>
									<tr>
                                    <td>1</td>
                                    <td>LED</td>
                                    <td>500</td>
                                   
                                    

                                </tr>
                                </tbody>
                        <tbody>
                            <tr class="gradeX">
                                <!--<td colspan="6" class="dataTables_empty">No data found</td>-->
                            </tr>
                        </tbody>
                        <tfoot>

                        </tfoot>

                    </table>

</div>
</div>
      </div>
                 </div>
  <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>				
       
    </div>
</div>

</div>
<!-------------------------Split shipment End---------------------------------------------------->


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
.splitbutton{
	background-color: #1f4056;
}
.dropbtn {
  background-color: #18335a;
  color: white;
  padding: 12px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  margin-left: 179px;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #18335a;
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