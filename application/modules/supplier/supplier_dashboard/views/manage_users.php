<!--************************************
		Banner Start
*************************************-->
<style>

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
                     <select class="form-control">
                      <option value="0">
                         Accounts Manager
                       </option> <option value="0">
                         Delivery Manager
                       </option>
                       <option value="0">
                         Basic User
                       </option>
                     </select>
                   </div>

                   <div class="form-group">
                     <label>Name</label>
                     <input type="text" class="form-control" />
                   </div>

                   <div class="form-group">
                     <label>Mobile Number (Username)</label>
                     <input type="text" class="form-control" />
                   </div>

                   <div class="form-group">
                     <label>Email</label>
                     <input type="text" class="form-control" />
                   </div>

                   <div class="form-group">
                     <label>password</label>
                     <input type="password" class="form-control" />
                   </div>
                   <div class="form-group">
                     <button type="submit" class="tg-btn pull-right" data-nlok-ref-guid="727bd987-58f0-47cd-f295-b92298e95987"><span>Save</span></button>
                   </div>
                </div>
                  <div class="col-md-7">
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover">
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
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Akhil</td>
                            <td>user1</td>
                            <td>9995495860</td>
                            <td><span style="color:blue"><i class="fa fa-pencil" aria-hidden="true"></i></span></td>
                            <td><span style="color:red"><i class="fa fa-trash" aria-hidden="true"></i></span></td>
                            <td><span style="color:red"><i class="fa fa-unlock" aria-hidden="true"></i></span></td>

                          </tr>
                        </tbody>
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
