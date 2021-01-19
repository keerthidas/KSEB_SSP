<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
<link href="<?php echo base_url();?>DataTables-1.10.21/css/dataTables.bootstrap4.css"
    rel="stylesheet">
	<link href="<?php echo base_url();?>perfect-scrollbar/css/perfect-scrollbar" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css " rel="stylesheet">

<!--************************************
		Banner Start
*************************************-->
<style>
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
<!-- <div class="tg-banner tg-haslayout">
	<div class="tg-imglayer">
		<img src="images/bg-pattran.png" alt="image desctription">
	</div>
	<div class="container">
		<div class="row">
			<div class="tg-banner-content tg-haslayout">
				<div class="tg-pagetitle">
					<h1>Manage Users</h1>
				</div>
				<ol class="tg-breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Manage Users</li>
				</ol>
				<br />
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
	<div class="container">
		<div class="row">
			<div id="tg-twocolumns" class="tg-twocolumns tg-main-section tg-haslayout">
				<div class="col-md-9 col-sm-8 col-xs-12 pull-right">

            <div class="row">
                <div class="col-md-5" style="border: 1px solid #CCC;">
                  <br />
                   <div class="form-group">
                     <label>User Type</label>
                     <select class="form-control" id="usertype">
                      <option value="1">
                         Accounts Manager
                       </option> <option value="2">
                         Delivery Manager
                       </option>
                       <option value="3">
                         Basic User
                       </option>
                     </select>
                   </div>

                   <div class="form-group">
                     <label>Name</label>
                     <input type="text" id="name" class="form-control" />
                   </div>

                   <div class="form-group">
                     <label>Mobile Number (Username)</label>
                     <input type="text" id="mobilenumber" class="form-control" />
                   </div>

                   <div class="form-group">
                     <label>Email</label>
                     <input type="text" id="email" class="form-control" />
                   </div>

                   <div class="form-group">
                     <label>password</label>
                     <input type="password" id="password" class="form-control" />
                   </div>
                   <div class="form-group">
                     <button type="submit" class="tg-btn pull-center" id="save_companyprofile" onclick="save_companyprofile();" data-nlok-ref-guid="727bd987-58f0-47cd-f295-b92298e95987"><span>Save</span></button>
                   </div>
                </div>
                  <div class="col-md-7">
                    <div class="table-responsive">
                      <table id="employyeedetls" class="table table-bordered table-hover" class="display" style="width: 100%">
                        <thead>
                          <tr style="background-color:#26265f ;color:#FFF ">
                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <?php foreach($getemployeesdetails as $employees){?>
						<?php }?>
                      </table>
                    </div>
                  </div>
            </div>



				</div>
				<div class="col-md-3 col-sm-4 col-xs-12">
						<?php $this->view('profile_sidebar',$page); ?>
				</div>
			</div>
		</div>
	</div>
</main>


<div class="modal fade" id="myModal" style="padding-left: 0px !important;">
    <div class="modal-dialog">
        <div class="modal-content" style="width:750px;">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Employees Details</h4>
                
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4 class="modal-title"><span id="inspect"></span></h4>
                <div class="table-responsive">

                   
                              <div class="form-group">
                     <label>Name</label>
                     <input type="text" id="name" value=""class="form-control" />
                   </div>

                   <div class="form-group">
                     <label>Mobile Number (Username)</label>
                     <input type="text" id="mobilenumber" class="form-control" />
                   </div>

                   <div class="form-group">
                     <label>Email</label>
                     <input type="text" id="email" class="form-control" />
                   </div>

                   <div class="form-group">
                     <label>password</label>
                     <input type="password" id="password" class="form-control" />
                   </div>
                   <div class="form-group">
                     <button type="submit" class="tg-btn pull-center" id="save_companyprofile" onclick="save_companyprofile();" data-nlok-ref-guid="727bd987-58f0-47cd-f295-b92298e95987"><span>Save</span></button>
                   </div>

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

<script src="<?php echo base_url();?>DataTables-1.10.21/js/jquery.dataTables.js">
<script src="<?php echo base_url();?>DataTables-1.10.21/js/dataTables.bootstrap4.js"></script>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
<script src="<?php echo base_url();?>perfect-scrollbar/dist/perfect-scrollbar.min.js">
</script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js">
</script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
</script>

<script>
 function save_companyprofile() {
	
    var name = $("#name").val();
	var mobilenumber = $('#mobilenumber').val();
	var email = $("#email").val();
	var password = $("#password").val();
	var usertype = $("#usertype").val();
	
    $(".error_msg").remove();
    var flag = 0;


    if (name == '') {
        flag = 1;
        $("#name").append("<span class='error_msg'>Name Required</span>");
    }
	
	if (mobilenumber == '') {
        flag = 1;
        $("#mobilenumber").append("<span class='error_msg'>mobilenumber Required</span>");
    }

    if (email == "") {
        flag = 1;
        $("#material").append("<span class='error_msg'>Material Required</span>");
    }

  
    if (flag == 0) {

        $("#savemicro").prop("disabled", true);
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        $(".ajaxLoader").css("display", "block");
        $.post("<?php echo site_url('supplier/dashboard/insert_companyprofile')?>", {

            name: name,
			email:email,
            mobilenumber: mobilenumber,
			password: password,
			usertype:usertype,
            supplierid: 1,
           
            <?php echo $this->security->get_csrf_token_name();?>: "<?php echo $this->security->get_csrf_hash()?>"
        }, function(data) {
			 alert(data);
             $('#savemicro').removeAttr("disabled");
			window.location.reload();

        });

    }


}

$(document).ready(function() {

    material_table = $('#employyeedetls').DataTable({
		//console.log('kkkkk');

        'ajax': {
            url: '<?php echo site_url("supplier/dashboard/getEmployeesListData");?>',
			 "scrollX": true,
            type: 'POST',
            "data": function(d) {
                d.<?=$this->security->get_csrf_token_name();?> =
                    "<?=$this->security->get_csrf_hash()?>";
               // d.districtid = distval;
                //d.blockid = block;
               // d.cdsid = cds;
                //d.adsid = ads;
               // d.typeid = typeid;
            }
        },


        "buttons": [],
        "columns": [{
                "data": "no"
            },
			
            {
                "data": "mobile"
            },
			 {
                "data": "email"
            },
			 
			 {
                "data": "name"
            },
				
			{
                "data": "edit"
            },
			{
                "data": "delete"
            },
			{
                "data": "status"
            },
          	
			{
                "data": "id",
				"visible":false
            },
          	
			
        ],
 

        "drawCallback": function(settings) {
            $(".ajaxLoader").css("display", "none");
        },

    });

});

$(document).on('click', '#delete-supplier', function() {
        var cnf = confirm("Are you sure to delete?");
        if (cnf) {
            var data = material_table.row($(this).parents('tr')).data();
            var supplierid = data['id'];
            $.post("<?php echo site_url('supplier/dashboard/deleteSupplierEmployees')?>", {
                supplierid: supplierid,
                <?php echo $this->security->get_csrf_token_name();?>: "<?php echo $this->security->get_csrf_hash()?>"
            }, function(data) {
                alert(data);
               window.location.reload();

            });
        }
    });


</script>
