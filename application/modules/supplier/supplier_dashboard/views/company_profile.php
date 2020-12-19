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
					<h1>Profile</h1>
				</div>
				<ol class="tg-breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Profile</li>
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

						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<tr>
									<td style="text-align:right;width:241px;">Company Name	</td>
									<td style="width:231px;"><input type="text"  class="form-control"  value="Havells India Ltd"/>	</td>
									<td></td>
								</tr>
								<!--<tr>
									<td style="text-align:right">Registred Date	</td>
									<td><input type="text" readonly class="form-control"  value="20/08/2020"/>	</td>
								</tr>
								<tr>
									<td style="text-align:right">Renewal Date	</td>
									<td><input type="text" readonly class="form-control"  value="19/08/2021"/>	</td>
								</tr>-->
								<tr>
									<td style="text-align:right">Incorporation No </td>
									<td><input type="text"  class="form-control"  value="TBVFEQ55432"/>	</td>
									<td><input type="file"  class="form-control"  value="doc.img"/></td>
								</tr>
								<tr>
									<td style="text-align:right">Incorporation Date </td>
									<td><input type="text"  class="form-control"  value="11/01/2021"/>	</td>
									<td></td>
								</tr>
								
								<tr>
									<td style="text-align:right">PAN CARD NO </td>
									<td><input type="text"  class="form-control"  value="TWVB89965430432"/>	</td>
									<td></td>
								</tr>
								<tr>
									<td style="text-align:right">GST/TIN	</td>
									<td><input type="text"  class="form-control"  value="GST55554556"/>	</td>
									<td><input type="file"  class="form-control"  value="doc.img"/></td>
								</tr>
								<tr>
									<td style="text-align:right">Company Address	</td>
									<td><input type="text"  class="form-control"  value="Test Address"/>	</td>
									<td></td>
								</tr>
								<tr>
									<td style="text-align:right">Mobile	</td>
									<td><input type="text"  class="form-control"  value="0004446669"/>	</td>
									<td></td>
								</tr>
								<tr>
									<td style="text-align:right">Email	</td>
									<td><input type="text"  class="form-control"  value="abc@gmail.com"/>	</td>
									<td></td>
								</tr>
								
								<tr>
									<td style="text-align:right">Website	</td>
									<td><input type="text"  class="form-control"  value="www.havells.com"/>	</td>
									<td></td>
								</tr>
								
								<tr>
								<td style="text-align:right">Autorized Person	</td>
									<td><input type="text"  class="form-control"  value="Name of person"/>	</td>
									
									<td><input type="file"  class="form-control"  value="doc.img"/>	</td>
									
								</tr>
									
							</table>
								 <div class="form-group">
                            <button type="submit" class="tg-btn pull-center" style="margin-left:243px;" data-nlok-ref-guid="727bd987-58f0-47cd-f295-b92298e95987"><span>Save</span></button>
                       
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
