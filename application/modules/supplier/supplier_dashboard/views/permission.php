<main id="tg-main" class="tg-main tg-haslayout">
	<div class="container">
		
		<div class="row">
			<div id="tg-twocolumns" class="tg-twocolumns tg-main-section tg-haslayout">
				<div class="col-md-9 col-sm-8 col-xs-12 pull-right">

						<div class="table-responsive">
							<table class="table table-bordered table-hover">
                            <tr>
                            <td><h3>Access Permission</h3></td>
                            </tr>
								
							</table>
						</div>
						<div>
						 <div class="form-group" style="width:200px;">
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
						<div>
							<input type="checkbox" id="accounts" name="accounts" value="accounts Mager">
  <label for="accounts"style="margin-top:-21px;margin-left:27px;"> Procurement Plan</label><br>
						</div>
						<div>
							<input type="checkbox" id="delivery" name="delivery" value="delivery Mager">
  <label for="delivery" style="margin-top:-21px;margin-left:27px;"> Tenders</label><br>
  
  <input type="checkbox" id="delivery" name="delivery" value="delivery Mager">
  <label for="delivery" style="margin-top:-21px;margin-left:27px;"> My Tenders</label><br>
  
  <input type="checkbox" id="Basic" name="Basic" value="Basic Manager">
  <label for="Basic" style="margin-top:-21px;margin-left:27px;"> Purchase Order</label><br>
  
  <input type="checkbox" id="Basic" name="Basic" value="Basic Manager">
  <label for="Basic" style="margin-top:-21px;margin-left:27px;"> Delivery</label><br>
  
  <input type="checkbox" id="Basic" name="Basic" value="Basic Manager">
  <label for="Basic" style="margin-top:-21px;margin-left:27px;"> Accounts</label><br>
  
  <input type="checkbox" id="Basic" name="Basic" value="Basic Manager">
  <label for="Basic" style="margin-top:-21px;margin-left:27px;"> Invoices</label><br>
  
  <input type="checkbox" id="Basic" name="Basic" value="Basic Manager">
  <label for="Basic" style="margin-top:-21px;margin-left:27px;"> Payments</label><br>
  <input type="submit" value="Submit">
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
