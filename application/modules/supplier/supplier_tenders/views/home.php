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

<style>
.btn-primary {
    color: #fff;
    background-color: #1e315d;
    border-color: #ffcc33;;
}

small{
    font-size:12px;
    margin-top:0px;
    vertical-align:top;
}
.tg-matchdate{
    padding:0px;
    font: 25px/25px 'Oswald', Arial, Helvetica, sans-serif;
}

.tg-matchdate_custom{
    padding:13px!important;
    font: 36px/36px 'Oswald', Arial, Helvetica, sans-serif;
}



/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}


</style>
<head>
<link rel="stylesheet" href="path/to/material-design-iconic-font/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

</head>

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
							<?php foreach($tender as $tenders){ ?>
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03"><small>Last date</small><br><?php 
										$time=strtotime($tenders->tender_date);
											echo date('j  ', $time);?>
                                   <span><?php $time=strtotime($tenders->tender_date);
										echo date('M ', $time);?></span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag"><?php echo $tenders->tender_num ?></span>
										<h4>TENDER<?php echo $tenders->id ?></h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Tender Autority:<?php echo $tenders->tendering_authority ?></address></li>
										</ul>
									</div>
									<div class="tg-btnsbox" style="margin-top:11px;">
										<a class="btn btn-primary btn-sm tenderdetails" style="#1e315d" onclick="mytenderdetails(<?php echo htmlentities(json_encode($tenders), ENT_QUOTES, 'UTF-8')?>);" data-tender="<?php echo htmlentities(json_encode($tenders), ENT_QUOTES, 'UTF-8');?>" data-toggle="modal" data-target="#tendermore">Read More</a>
										<a class="btn btn-primary btn-sm" href="<?php echo base_url("supplier/tenders/apply/1") ?>">Apply </a>
										<!--<a class="btn btn-primary btn-sm" href="#">Tender Status </a>-->
										<!--<a class="btn btn-primary btn-sm" href="#">Payment Status </a>-->
										<!--<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" >Clarifications </a>-->
										<!-- // tender id -->
									</div>
								</div>
						<?php	}?>
								<!--<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03"><small>Last date</small><br>27<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">Tender No : TDR001862</span>
										<h4>Tender Name 2</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Tender Short DIscription</address></li>
										</ul>
									</div>
									<div class="tg-btnsbox" style="margin-top:11px;" >
										<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tendermore">Read More</a>
										<a class="btn btn-primary btn-sm" href="#">Apply </a>
										<!--<a class="btn btn-primary btn-sm" href="#">Tender Status </a>
										<a class="btn btn-primary btn-sm" href="#">Payment Status </a>-->
										<!--<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" >Clarifications </a>-->
									<!--</div>
								</div>
								<div class="tg-ticket">
									<time class="tg-matchdate" datetime="2016-05-03"><small>Last date</small><br>28<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">Tender No : TDR001889</span>
										<h4>Tender Name 3</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Tender Short DIscription</address></li>
										</ul>
									</div>-->
									<!--<div class="tg-btnsbox" style="margin-top:11px;" >
										<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tendermore">Read More</a>
										<a class="btn btn-primary btn-sm" href="#">Apply </a>
										<!--<a class="btn btn-primary btn-sm" href="#">Tender Status </a>
										<a class="btn btn-primary btn-sm" href="#">Payment Status </a>-->
										<!--<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" >Clarifications </a>-->
									<!--</div>
								</div>-->


							</div>
						</div>
					</div>
					<div id="menu1" class="tab-pane fade <?php echo $tab ==2 ? "in active" : "" ?>">
						<div class="row" style="margin-top: 15px;">
							<div class="tg-tickets">
								<div class="tg-ticket">
									<time class="tg-matchdate tg-matchdate_custom" datetime="2016-05-03">30<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">My Tender No : TDR001860</span>
										<h4>My Tender Name 1</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Tender Short Description</address></li>
										</ul>
									</div>
									<div class="tg-btnsbox">
										<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tendermore">Read More</a>
										<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tenderstatus" >Tender Status </a>
										<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#paymentstatus" >Payment Status </a>
										<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#application_form" >Application Form </a>
										<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#siteinspect" >Factory Visit </a>
									</div>
								</div>
								<div class="tg-ticket">
									<time class="tg-matchdate tg-matchdate_custom" datetime="2016-05-03">27<span>Dec</span></time>
									<div class="tg-matchdetail">
										<span class="tg-theme-tag">My Tender No : TDR001862</span>
										<h4>My Tender Name 2</h4></h4>
										<ul class="tg-matchmetadata">
											<li><address>Tender Short Description</address></li>
										</ul>
									</div>
									<div class="tg-btnsbox">
										<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tendermore">Read More</a>
										<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tenderstatus" >Tender Status </a>
										<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#paymentstatus" >Payment Status </a>
										<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#application_form" >Application Form </a>
										<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#siteinspect" >Factory Visit </a>
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
<!-- Modal -->
<div class="modal fade" id="myModal" style="padding-left: 0px !important;">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Clarifications</h4>
                 <a href="#" class="gx-fab-btn gx-btn-primary position-absolute addButtonCustom"
                            data-toggle="modal" id="add" data-target="#Service">
                           <i class="zmdi zmdi-plus-circle zmdi-hc-2x" style="margin-left:480px; border-color: #ffcc33;"></i>
                        </a>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4 class="modal-title"><span id="questions"></span></h4>
                <div class="table-responsive">

                    <table id="questions" class="table table-striped table-bordered table-hover"
                        class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">sl no</th>
                                <th scope="col">questions</th>
                                <th scope="col">reply</th>
                                <th scope="col">status</th>
								<th scope="col">Post Date</th>
                               
                            </tr>
                        </thead>
									<tr>
                                    <td>1</td>
                                    <td>Annual production rate</td>
                                    <td></td>
                                    <td>Pending</td>
                                    <td>13-11-2020</td>
                                   

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

<div class="modal fade" id="Service">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="adding">Add Questions</h4>
                
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="questions_form">
                    <div class="form-group row">
                        <label for="subject" class="col-md-2 col-sm-3 control-label">Subject</label>
                        <div class="col-md-10 col-sm-9" id="ques_group">
                            <input type="text" class="form-control" id="subject" placeholder="Add Subject">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-2 col-sm-3 control-label">Description</label>
                        <div class="col-md-10 col-sm-9" id="ques_des_group">
                            <input type="description" class="form-control" id="description" placeholder=" Add Description">
                        </div>
                    </div>
					<div class="form-group row">
                        <label for="comment" class="col-md-2 col-sm-3 control-label">Comment</label>
                        <div class="col-md-10 col-sm-9" id="comment_des_group">
                            <input type="description" class="form-control" id="description" placeholder="Add Comment">
                        </div>
                    </div>
                    <input type="hidden" name="questionid" id="questionid">

                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="">Submit</button>
            </div>

        </div>
    </div>
</div>

<!------------------------Site Inspections------------------------------------------------------->

<div class="modal fade" id="siteinspect" style="padding-left: 0px !important;">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">PreDispatch Investigation</h4>
                
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
                                <th scope="col">Inspection Date</th>
                                <th scope="col">Inspection Fee</th>
                                <th scope="col">Pay Fee</th>
								
                               
                            </tr>
                        </thead>
									<tr>
                                    <td>1</td>
                                    <td>13-11-2020</td>
                                    <td>2500</td>
                                    <td><button  data-toggle="modal" data-target="#Payment" style="width:66px;color: #fff;background-color: #1e315d; border-color: #ffcc33;">Pay</button></td>
                                    

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


<!-------------------------SiteInspection End---------------------------------------------------->
<div class="modal fade" id="Payment">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="adding">Add Payment</h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="questions_form">
                    <div class="form-group row">
                        <label for="subject" class="col-md-2 col-sm-3 control-label">Pay Amount</label>
                        <div class="col-md-10 col-sm-9" id="ques_group">
                            <input type="text" class="form-control" id="subject" placeholder="Add fee amount">
                        </div>
                    </div>
                   
                    <input type="hidden" name="pay" id="pay">

                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
               
                <button type="button" style="margin-right: 252px;" class="btn btn-primary" onclick="">Submit</button>
            </div>

        </div>
    </div>
</div>
<!---------------------------------------tender status-------------------------------------------------->
<div class="modal fade" id="tenderstatus">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
			 <h4 class="modal-title" id="adding">Tender Status</h4>
                <h4 class="modal-title" id="adding"></h4>
                
            </div>

            <!-- Modal body -->
            <div class="modal-body">
               Your Tender Status is active on 17-11-2020
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                
            </div>

        </div>
    </div>
</div>

<!-------------------------------tender status end------------------------------------------->
<!------------------------------Payment status---------------------------------------------->
<div class="modal fade" id="paymentstatus">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
			 <h4 class="modal-title" id="payment">Payment Status</h4>
                <h4 class="modal-title" id="payment"></h4>
                
            </div>

            <!-- Modal body -->
            <div class="modal-body">
               Your Payment Status is in Pending Process
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                
            </div>

        </div>
    </div>
</div>
<!------------------------------payment end------------------------------------------------>

<div class="modal fade" id="application_form">
    <div class="modal-dialog">
        <div class="modal-content" style="">

            <!-- Modal Header -->
            <div class="modal-header">
			 <h4 class="modal-title" id="payment">Preview Of Application Form</h4>
                <h4 class="modal-title" id="payment"></h4>
                
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                          <div class="modal-body">
                <form id="questions_form">
				<table>
			
                    <div class="form-group row">
                        <label for="subject" class="col-md-6 col-sm-6 control-label">Type of Business?</label>
                        <div class="col-md-6 col-sm-6">MRO Supply <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;>--></div>

                           
                    </div>
                    <div class="form-group row">
                      <label for="subject" class="col-md-6 col-sm-6 control-label">Company Establishment Date?</label>
                        <div class="col-md-6 col-sm-6">30-11-2020 </div>
                    </div>
					<div class="form-group row">
                        <label for="comment" class="col-md-6 col-sm-6 control-label">Ownership Classification?</label>
                          <div class="col-md-6 col-sm-6">Large Business </div>
                    </div>
					<div class="form-group row">
                        <label for="comment" class="col-md-6 col-sm-6 control-label">Annual Production?</label>
                          <div class="col-md-6 col-sm-6">2 </div>
                    </div>
					<div class="form-group row">
                        <label for="comment" class="col-md-6 col-sm-6 control-label">Change of Ownership in the past 3 yrs?</label>
                          <div class="col-md-6 col-sm-6">Yes  </div>
                    </div>
					<div class="form-group row">
                        <label for="comment" class="col-md-6 col-sm-6 control-label">Third Party Certification?</label>
                          <div class="col-md-6 col-sm-6">Association For Service Disabled Veterans </div>
                    </div>
					<div class="form-group row">
                        <label for="comment" class="col-md-6 col-sm-6 control-label">Is GST Applicable?</label>
                          <div class="col-md-6 col-sm-6">Yes</div>
                    </div>
					<div class="form-group row">
                        <label for="comment" class="col-md-6 col-sm-6 control-label">Company Turnover?</label>
                          <div class="col-md-6 col-sm-6">200000</div>
                    </div>
					<div class="form-group row">
                        <label for="comment" class="col-md-6 col-sm-6 control-label">Incorporation Certificate?</label>
                          <div class="col-md-6 col-sm-6"><a href="xx"></a>img.doc </div>
                    </div>
					<div class="form-group row">
                        <label for="comment" class="col-md-6 col-sm-6 control-label">TurnOver Slab?</label>
                          <div class="col-md-6 col-sm-6">10L-20L </div>
                    </div>
					</table>
                    <input type="hidden" name="questionid" id="questionid">

                </form>
        </div>
    </div>
	
	 <div class="modal-footer">
	            <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#Servissce" >Clarification</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
</div>


        </div>
    </div>
	<!--------------------------------------------------clarifications----------------------------------------->
	<div class="modal fade" id="myModalclarification" style="padding-left: 0px !important;">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Clarifications</h4>
                 <a href="#" class="gx-fab-btn gx-btn-primary position-absolute addButtonCustom"
                            data-toggle="modal" id="add" data-target="#Servissce">
                           <i class="zmdi zmdi-plus-circle zmdi-hc-2x" style="margin-left:480px; border-color: #ffcc33;"></i>
                        </a>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4 class="modal-title"><span id="questions"></span></h4>
                <div class="table-responsive">

                    <table id="questions" class="table table-striped table-bordered table-hover"
                        class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">sl no</th>
                                <th scope="col">questions</th>
                                <th scope="col">reply</th>
                                <th scope="col">status</th>
								<th scope="col">Post Date</th>
                               
                            </tr>
                        </thead>
									<tr>
                                    <td>1</td>
                                    <td>Annual production rate</td>
                                    <td></td>
                                    <td>Pending</td>
                                    <td>13-11-2020</td>
                                   

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


<div class="modal fade" id="Servissce">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="adding">Clarifications</h4>
                
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="questions_form">
                   
					
					<div class="modal-body">
                <form id="questions_form">
                   
                   <div class="form-group row">
                        <label for="comment" class="col-md-2 col-sm-3 control-label">Questions</label>
                        <div class="col-md-10 col-sm-9" id="comment_des_group">
                       <textarea class="form-control" readonly value="Use of MRO Supply in Business Type?">Use of MRO Supply in Business Type?</textarea>
                        </div>
                    </div>
					<div class="form-group row">
                        <label for="comment" class="col-md-2 col-sm-3 control-label">Comment</label>
                        <div class="col-md-10 col-sm-9" id="comment_des_group">
                       <textarea class="form-control" cols="4" rows="5"></textarea>
                        </div>
                    </div>
					<div class="form-group row">
                        <label for="comment" class="col-md-2 col-sm-3 control-label">File Upload</label>
                        <div class="col-md-10 col-sm-9" id="comment_des_group">
                       <input type="file" id="nofile">
                        </div>
                    </div>
				
                    <input type="hidden" name="questionid" id="questionid">

                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
			 <button type="button" class="btn btn-primary" onclick="">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
               
            </div>

        </div>
    </div>
</div>
</div>

<!---------------------------------------tender status-------------------------------------------------->
<div class="modal fade" id="tendermore">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
			 <h3 class="modal-title" id="adding" style="color:navy;">Tender Details</h3>
                <h4 class="modal-title" id="adding"></h4>
                
            </div>

            <!-- Modal body -->
			
            <div class="modal-body" id="tenderdetails">
			<!--<div id="basicopeningdetails">
			<h5 style="color:orange;">TENDER OPENING DETAILS</h5><b>
			</div>
			 <div id="basicopeningdetails">
			<h5 style="color:orange;">prc_procurement_process_dtls</h5><b>
			</div>
			
			<div id="basicopeningdetails">
			<h5 style="color:orange;">prc_requestions</h5><b>
			</div>
			
			<div id="basicopeningdetails">
			<h5 style="color:orange;">prc_tender_closing</h5><b>
			</div>
			
			<div id="basicopeningdetails">
			<h5 style="color:orange;">prc_tender_technical_evaluations</h5><b>
			</div>
			
			<div id="basicopeningdetails">
			<h5 style="color:orange;">prc_tender_price_bid_openings</h5><b>
			</div> -->
			</div>
              <!-- <label>vender Name:bb</label>
			   <label>Vender Address:D-370, Vibhuti Khand, Gomti Nagar, Lucknow-226010</label>
			   <label>prc_tender_opening_id:1</label>
			   <label>prc_vendor_id: 1</label>
			   <!--<label>Tender Category:Works</label>
			   <label>Payment Mode:Online</label>
			   <label>Form Of Contract:Item Rate</label>-->
            
			
<!--<h5 style="color:orange;">Tender Fee Details</h5>
&nbsp;&nbsp;<label>Tender Fee in ₹:2,950</label>
	<label>Fee Payable To:Nil</label>
	<label>Tender Fee Exemption Allowed:No</label>
	<label>	Fee Payable At:Nil</label>

	
		<h5 style="color:orange;"> Work Details</h5>
	<label>Title:Construction of KSEB TMR Divison in MS Unit</label>
	<label>Work Description:Construction of KSEB TMR Divison in MS Unit</label>
	<label>Independent External Monitor/Remarks:NA</label>	
	<label>	Period Of Work(Days):180</label>

		<h5 style="color:orange;"> Tender Inviting Authority</h5>
	<label>Name:ABCDXYZ</label>
	<label>Address:Executive Engineer Thirumala,TMR Divison,Thirumala</label>
	</div>-->

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                
            </div>
			<!--<?php //} ?>-->
        </div>
    </div>
</div>
<!-------------------------------------------------------------------------------------------------------------->
<script>
function mytenderdetails(tenderdetail){
	
	var tenderopendetails =tenderdetail.prc_tender_opening_dtls;
	var tenderprocurementdetails =tenderdetail.prc_procurement_process_dtls;
	var tenderpricebidopenings =tenderdetail.prc_tender_price_bid_openings;
	var tenderpurchasedetails	=tenderdetail.prc_purchase_orders;
	var tenderdeliverydetails	=tenderdetail.prc_proposed_delivery_details;
	
	//console.log(tenderdetail);
	
	/*var html="<div id='basicdetails'>";
	tenderbasicdetails.forEach(function(item, index){
		//console.log(item.vender_address);
		html+= "<b><h5 style='color:orange;'>TENDER BASIC DETAILS</h5><b>"
			 + " <label>Tender Publishing Date:" + item.tender_publishing_date +"</label>"
			 + " <label>Tender Closing Date:" +item.tender_closing_date +"</label>"
			 + "<label>EMD amount:" + item.emd_amount + "</label>"
			 + "<label>Bid Submission Fee:" + item.bid_submision_fee + "</label>"
			  + "<label>PAC Amount:" + item.pac_amount + "</label>"
			    + "<label>Price Type:" + item.price_type + "</label>"
				 + "<label>Tender Approval Date:" + item.tender_doc_approval_date + "</label>"
				  + "<label>Tender Available Date:" + item.tender_available_date + "</label>"
				   + "<label>Bid Validity Period Days:" + item.bid_validity_period_days + "</label>";
			
	})
	html+="</div>";*/
	
	
	
	var html="<div id='basicopeningdetails'>";
	tenderopendetails.forEach(function(item, index){
		//console.log(item.vender_address);
		html+= "<b><h5 style='color:orange;'>TENDER OPENING DETAILS</h5><b>"
			 + " <label>Tender Opening Id:" + item.prc_tender_opening_id +"</label>"
			 + " <label>Vendor Name:" +item.vender_name +"</label>"
			 + "<label>Vender Address:" + item.vender_address + "</label>"
			 + "<label>Factory Inspection Flag:" + item.factory_inspection_flag + "</label>";
			
	})
	html+="</div>";
	
	html+="<div id='prc_procurement_process_dtls'>";
	tenderprocurementdetails.forEach(function(item, index){
	
		html+= "<b><h5 style='color:orange;'>TENDER PROCUREMENT PROCESS DETAILS</h5><b>"
			+ "<label>procurement process Id:"+ item.prc_procurement_process_id + "</label>"
			 + " <label>warranty period in month:"+item.warranty_period_in_month +"</label>" 
			 + " <label>Purchase quantity:"+item.purchase_quantity +"</label>";
	})
	html+="</div>";
	
	html+="<div id='prc_tenderpricebidopenings'>";
	tenderpricebidopenings.forEach(function(item, index){
	
		html+= "<b><h5 style='color:orange;'>TENDER PRICE BID OPENINGS</h5><b>"
			+ "<label>Tender Id:"+ item.prc_tender_id + "</label>"
			 + " <label>Date Of Price Bid:"+item.date_of_price_bid_opening +"</label>" 
			 + " <label>Represented By:"+item.represented_by +"</label>"
			 + " <label>Approved By:"+item.approved_by +"</label>"
			 + " <label>Amount:"+item.amount +"</label>"
			  + " <label>Deleted:"+item.deleted_at +"</label>";
	})
	html+="</div>";
	
	html+="<div id='prc_tenderpurchasedetails'>";
	tenderpurchasedetails.forEach(function(item, index){
	
		html+= "<b><h5 style='color:orange;'>TENDER PURCHASE ORDERS</h5><b>"
			+ "<label>Purchase Number:"+ item.puchase_order_number + "</label>"
			 + " <label>Purchase Area Type:"+item.purchase_area_type +"</label>" 
			 + " <label> Issue Ofc Code:"+item.issue_ofc_code +"</label>"
			 + " <label>Surplus Purchase Percentage:"+item.surplus_purchase_percentage +"</label>"
			 + " <label>Issue office id:"+item.issue_office_id +"</label>";
			 
	})
	html+="</div>";
	
	html+="<div id='prc_tenderDeliverydetails'>";
	tenderdeliverydetails.forEach(function(item, index){
	
		html+= "<b><h5 style='color:orange;'>TENDER DELIVERY DETAILS</h5><b>"
		+ " <label>Material Id:"+item.mst_material_id +"</label>"
			+ "<label>Material Name:"+ item.material_name + "</label>"
			 + " <label>Proposed Quantity:"+item.proposed_quantity +"</label>" 
			 + " <label> Description:"+item.description +"</label>"
			 + " <label>Office code:"+item.office_code +"</label>";
			 
			 
	})
	html+="</div>";
	
	console.log(html);
	$('#tenderdetails').html(html);
}
</script>

<script type="text/javascript"> 
       /*  $(".tenderdetails").click(function () { 
		//console.log(data-tender);
		var tenderopendetils=this.getAttribute('data-tender');
		console.log(JSON.stringify(tenderopendetils));
		console.log(tenderopendetils);
		
           /*  var name = $("#name").val(); 
            var marks = $("#marks").val(); 
            var str = "You Have Entered "  
                + "Name: " + name  
                + " and Marks: " + marks; 
            $("#modal_body").html(str);  */ 
       /* });  */
    </script> 

