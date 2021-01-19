<form name="frm" action="" name="frm" id="frm" enctype="multipart/form-data" method="post">
<div class="pcoded-content">
  <div class="pcoded-inner-content">
      <div class="main-body">
          <div class="page-wrapper">
              <div class="page-body">
                <div class="row">


  <div class="col-md-12">

<div class="page-header">
  <div class="row align-items-end">
      <div class="col-lg-5">
          <div class="page-header-title">
              <div class="d-inline">
                  <h4>Suppliers</h4>
                  <span>List of registerd suppliers</span>
              </div>
          </div>
      </div>
	   <div class="form-group row form_filter" >
                 <label class="col-sm-5 col-lg-3">Status</label>
				  <div class="col-sm-7 col-lg-9">
                <select class="select2-placeholer form-control" data-placeholder="Select a status" name="status_type" id="status_type"   onchange="filter_datatable(this.value);statustypeid();">
                  <option value="0"   >To Approved</option>
                  <option value="1"  >To Approval</option>
                </select>
				</div>
              </div>
      <div class="col-lg-4">
          <div class="page-header-breadcrumb">
              <ul class="breadcrumb-title">
                  <li class="breadcrumb-item">
                      <a href="<?php echo admin_url();?>dashboard"> <i class="feather icon-home"></i> </a>
                  </li>

                  <li class="breadcrumb-item"><a href="#!">Suppliers</a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
</div>
  <div class="card borderless-card">

<!-- </div> -->

                        <div class="card">

                            <div class="card-block">
                                <div class="table-responsive dt-responsive">
                                    <table id="dt-ajax-object" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                              <th>#</th>
                                              <th>Supplier Name</th>
                                              <th>Registered Date</th>
                                              <th>Pan No</th>
                                              <th>Contact Person</th>
                                              <th>Mobile</th>
                                              <th>Email</th>
                                              <th>Status</th>
                                              <th>View Profile</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>Atandra Energy Pvt. Ltd.</td>
                                            <td>20/08/2020</td>
                                            <td>SSP00001</td>
                                            <td>Rajeev</td>
                                            <td>8887775550</td>
                                            <td>abc@gmail.com</td>
                                            <td>Active</td>
                                            <td>
                                              <a href="<?= admin_url('user_management/supplier_profile') ?>"><input type="button" class="btn  btn-sm btn-out-dashed btn-success btn-square" value="VIEW PROFILE"></a>
                                            </td>
                                          </tr>
                                        </tbody>
                                        <tfoot>
                                          <tr>
                                            <th>#</th>
                                            <th>Supplier Name</th>
                                            <th>Registered Date</th>
                                            <th>Pan No</th>
                                            <th>Contact Person</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>View Profile</th>
                                          </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                      </div>

                </div>
                    <!-- Checkbox Tree card end -->
                    <!-- DATA TABLE -->


                    <!-- DATA TABLE END  -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </form>

    <?php   $this->view('template/admin/dataTable.php');  ?>

<!-- <script>
$( document ).ajaxStart(function() {
	$('#loader').show();
});
$( document ).ajaxStop(function() {
	$('#loader').hide();
});
</script> -->
<script>
table = $('#dt-ajax-object').DataTable({
  });
</script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/files\bower_components\lightbox2\js\lightbox.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/myScript.js"></script>
