<!-- //one admin -->

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
	<head>
		<!-- Basic Page Needs -->
		<meta charset="UTF-8">
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
		<title>One Admin</title>

		<meta name="author" content="themsflat.com">

		<!-- Mobile Specific Metas -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- Boostrap style -->
		<!-- <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/supplier_portal/oneadmin_theme/stylesheets/bootstrap.min.css"> -->

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/supplier_portal/oneadmin_theme/stylesheets/bootstrap4-alpha3.min.css">

		<!-- FONTS-->
		<link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons">

		<!-- Theme style -->
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/supplier_portal/oneadmin_theme/stylesheets/style.css">

		<!-- Calendar -->
		<link href='<?= base_url()?>assets/supplier_portal/oneadmin_theme/stylesheets/fullcalendar.min.css' rel='stylesheet' />
		<link href='<?= base_url()?>assets/supplier_portal/oneadmin_theme/stylesheets/fullcalendar.print.min.css' rel='stylesheet' media='print' />

		<!-- Responsive -->
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/supplier_portal/oneadmin_theme/stylesheets/responsive.css">

		<!-- Favicon -->
	    <link href="<?= base_url()?>assets/supplier_portal/oneadmin_theme/images_new/icon/favicon.png" rel="shortcut icon">
	</head>

	<!-- jQuery 3 -->
	<script src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/javascript/jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/javascript/tether.min.js"></script>
<script src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/javascript/bootstrap4-alpha3.min.js"></script>

<!-- Map chart  -->
<script src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/javascript/ammap.js"></script>
<script src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/javascript/worldLow.js"></script>

<!-- Morris.js charts -->
<script src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/javascript/raphael.min.js"></script>
<script src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/javascript/morris.min.js"></script>

<!-- Chart -->
<script src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/javascript/Chart.min.js"></script>

<!-- Calendar -->
<script src='<?= base_url()?>assets/supplier_portal/oneadmin_theme/javascript/moment.min.js'></script>
<script src='<?= base_url()?>assets/supplier_portal/oneadmin_theme/javascript/jquery-ui.js'></script>
<script src='<?= base_url()?>assets/supplier_portal/oneadmin_theme/javascript/fullcalendar.min.js'></script>

<script type="text/<?= base_url()?>assets/supplier_portal/oneadmin_theme/javascript" src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/javascript/jquery.mCustomScrollbar.js"></script>
<script src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/javascript/smoothscroll.js"></script>
<script src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/javascript/waypoints.min.js"></script>
<script src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/javascript/jquery-countTo.js"></script>
<script src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/javascript/waves.min.js"></script>
<script src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/javascript/canvasjs.min.js"></script>

<script src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/javascript/main.js"></script>	

<!-- HEADER CONTENT -->
<body>

        <header id="header" class="header fixed">
			<div class="navbar-top">
				<div class="curren-menu info-left">
					<div class="logo">
						<a href="index.html" title="">
							<img src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/images_new/logo.png" alt="One Admin">
						</a>
					</div><!-- /.logo -->
					<div class="top-button">
						<span></span>
					</div><!-- /.top-button -->
					<div class="box-search">
						<form action="#" method="get" accept-charset="utf-8">
							<button><img src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/images_new/icon/search.png" alt=""></button>
							<input type="text" placeholder="Search Projects..." name="Search">
						</form>
					</div><!-- /.box-search -->
				</div><!-- /.curren-menu -->
				<ul class="info-right">
					<li class="setting">
						<a href="#" class="waves-effect waves-teal" title="">
							<img src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/images_new/icon/setting.png" alt="">
						</a>
					</li><!-- /.setting -->
					<li class="notification">
						<a href="#" class="waves-effect waves-teal" title="">
							7
						</a>
					</li><!-- /.notification -->
					<li class="user">
						<div class="avatar">
							<img src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/images_new/avatar/01.png" alt="">
						</div>
						<div class="info">
							<p class="name">STUARD ALEX</p>
							<p class="address">San Fransico, CA</p>
						</div>
						<div class="arrow-down">
							<i class="fa fa-angle-down" aria-hidden="true"></i>
							<i class="fa fa-angle-up" aria-hidden="true"></i>
						</div>
						<div class="dropdown-menu">
							<ul>
								<li>
									<div class="avatar">
										<img src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/images_new/avatar/01.png" alt="">
									</div>
									<div class="profile">
										<a href="#" title="">View Profile</a>
									</div>
									<div class="clearfix"></div>
								</li>
								<li>
									<a href="#" class="waves-effect" title="">My Account</a>
								</li>
								<li>
									<a href="#" class="waves-effect" title="">Setting</a>
								</li>
								<li>
									<a href="#" class="waves-effect" title="">Logout</a>
								</li>
							</ul>
						</div><!-- /.dropdown-menu -->
						<div class="clearfix"></div>
					</li><!-- /.user -->
					<li class="button-menu-right">
						<img src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/images_new/icon/menu-right.png" alt="">
					</li><!-- /.button-menu-right -->
				</ul><!-- /.info-right -->
				<div class="clearfix"></div>
			</div>	<!-- /.navbar-top -->
        </header><!-- /header <-->



        <section class="vertical-navigation left">
			<div class="user-profile">
				<div class="user-img">
					<a href="#" title="">
						<div class="img">
							<img src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/images_new/avatar/avatar-dashboard.jpg" alt="">
						</div>
						<div class="status-color blue heartbit style1"></div>
					</a>
				</div>
				<ul class="user-options">
					<li class="name"><a href="#" title="">STUARD ALEX</a></li>
					<li class="options">SUPPLIER</li>
				</ul>
			</div>
			<ul class="sidebar-nav">
				<li class="dashboard waves-effect waves-teal active">
					<div class="img-nav">
						<img src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/images_new/icon/monitor.png" alt="">
					</div>
					<span>DASHBOARD</span>
				</li>
				<!-- <li class="message waves-effect waves-teal">
					<div class="img-nav">
						<img src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/images_new/icon/message.png" alt="">
						<span>3</span>
					</div>
					<span>MESSAGE</span>
                </li> -->
                <li class="setting waves-effect waves-teal">
					<div class="img-nav">
						<img src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/images_new/icon/calendar.png" alt="">
					</div>
					<span>ADMINISTRATION</span>
				</li>
				<li class="calendar waves-effect waves-teal">
					<div class="img-nav">
						<img src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/images_new/icon/calendar.png" alt="">
					</div>
					<span>DELIVERY</span>
				</li>
				<li class="pages waves-effect waves-teal">
					<div class="img-nav">
						<img src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/images_new/icon/pages.png" alt="">
					</div>
					<span>TENDERS</span>
				</li>
				<li class="apps waves-effect waves-teal">
					<div class="img-nav">
						<img src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/images_new/icon/apps.png" alt="">
					</div>
					<span>APPS</span>
				</li>
				<li class="setting waves-effect waves-teal">
					<div class="img-nav">
						<img src="<?= base_url()?>assets/supplier_portal/oneadmin_theme/images_new/icon/setting-02.png" alt="">
					</div>
					<span>SETTING</span>
				</li>
			</ul>
		</section><!-- /.vertical-navigation -->

        <section class="member-status right">
			<div class="sidebar-member">
				<ul class="member-tab">
					<li>
						<i class="fa fa-users" aria-hidden="true"></i>
					</li>
					<li>
						<i class="fa fa-bell" aria-hidden="true"></i>
					</li>
				</ul><!-- /.member-tab -->
				<div class="content-tab">
					<div class="scroll content">
						<ul class="member-list online">
							<li><a href="#" title="">PROCUREMENT PLAN</a>	</li>
							<li><a href="#" title="">TENDERS</a>	</li>	
							<li><a href="#" title="">MY TENDERS</a>	</li>
							<li><a href="#" title="">PURCHASE ORDER</a>	</li>
							<li><a href="#" title="">DELIVERY</a>	</li>
							<li><a href="#" title="">WORK MEASUREMENT</a>	</li>
							<li><a href="#" title="">ACCOUNTS</a>	</li>
							<li><a href="#" title="">INVOICES</a>	</li>
							<li><a href="#" title="">PAYMENTS</a>	</li>
							
						</ul><!-- /.member-list online -->
						
					</div><!-- /.content scroll -->
					<div class="content scroll">
						<ul class="notify">
							<li>
								<div class="avatar">
									<img src="images/avatar/02.png" alt="">
								</div>
								<div class="notify-content">
									Robart Alex has a news post.
								</div>
								<div class="clearfix"></div>
							</li>
							<li>
								<div class="avatar">
									<img src="images/avatar/03.png" alt="">
								</div>
								<div class="notify-content">
									Anthony Gomes has a news post.
								</div>
								<div class="clearfix"></div>
							</li>
							<li>
								<div class="avatar">
									<img src="images/avatar/04.png" alt="">
								</div>
								<div class="notify-content">
									Robarto Thuan has comment post <a href="#" title="">pages</a>.
								</div>
								<div class="clearfix"></div>
							</li>
							<li>
								<div class="avatar">
									<img src="images/avatar/09.png" alt="">
								</div>
								<div class="notify-content">
									Alex Morgan liked your new image.
								</div>
								<div class="clearfix"></div>
							</li>
						</ul>
					</div><!-- /.content scroll -->
				</div><!-- /.cotnent-tab -->
			</div><!-- /.sidebar-member -->
		</section>



        <main>
			<section id="dashboard">
				<div class="rows">
					<div class="status-bar">
						<ul>
							<li class="progres">
								<div class="icon">
									<img src="images/icon/progress.png" alt="">
								</div>
								<div class="content">
									<div class="numb" data-from="0" data-to="38" data-speed="1000" data-waypoint-active="yes">38</div>
									<div class="text">
										TASK PROGRESS
									</div>
								</div>
							</li><!-- /.progres -->
							<li class="progres">
								<div class="icon">
									<img src="images/icon/task.png" alt="">
								</div>
								<div class="content">
									<div class="numb" data-from="0" data-to="59" data-speed="1000" data-waypoint-active="yes">59</div>
									<div class="text">
										TASK RESEARCH
									</div>
								</div>
							</li><!-- /.progres -->
							<li class="progres">
								<div class="icon">
									<img src="images/icon/tick.png" alt="">
								</div>
								<div class="content">
									<div class="numb" data-from="0" data-to="87" data-speed="1000" data-waypoint-active="yes">87</div>
									<div class="text">
										TASK COMPLETED
									</div>
								</div>
							</li><!-- /.progres -->
							<li class="progres">
								<div class="icon">
									<img src="images/icon/chart.png" alt="">
								</div>
								<div class="content">
									<div class="numb" data-from="0" data-to="43" data-speed="1000" data-waypoint-active="yes">43</div>
									<div class="text">
										ONGOING PROJECT
									</div>
								</div>
							</li><!-- /.progres -->
						</ul>
					</div><!-- /.status-bar -->
				</div><!-- /.rows -->
					
				<div class="rows">
		        	<div class="box box-danger left">
			            <div class="box-header with-border">
			              	<div class="box-title">
			              		<h3>ANALYSIS</h3>
			              	</div>
			              	<div class="box-tools pull-right">
			              		<i class="zmdi zmdi-more-vert waves-effect waves-teal"></i>
			              		<ul class="dropdown-menu">
			              			<li>
			              				<a href="#" class="waves-effect" title="">Action</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">Support</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">FAQ</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">Message</a>
			              			</li>
			              		</ul>
			              	</div><!-- /.box-tools pull-right -->
			              	<div class="clearfix"></div>
			            </div><!-- /.box-header -->
			            <div class="box-content chart-doughnut">
			            	<div class="divider50"></div>
			              	<div class="chart" id="sales-chart" style="height: 250px; width: 280px; position: relative;"></div>
			              	<div class="legend style1">
				            	<ul class="legend-list">
				            		<li class="ux">
				            			<span class="text">UX DESIGN</span>
				            			<p>45 %</p>
				            		</li>
				            		<li class="ui">
				            			<span class="text">UI DESIGN</span>
				            			<p>35 %</p>
				            		</li>
				            		<li class="code">
				            			<span class="text">CODE</span>
				            			<p>20 %</p>
				            		</li>
				            	</ul><!-- /.legend-list -->
				            </div><!-- /.legend style1 -->
			            </div><!-- /.box-body -->
		         	</div><!-- /.box box-danger -->
		         	<div class="box box-statistics right">
						<div class="box-header with-border">
			              	<div class="box-title">
			              		<h3>STATISTICS</h3>
			              	</div>
			              	<div class="box-tools pull-right">
			              		<i class="zmdi zmdi-more-vert waves-effect waves-teal"></i>
			              		<ul class="dropdown-menu">
			              			<li>
			              				<a href="#" class="waves-effect" title="">Action</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">Support</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">FAQ</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">Message</a>
			              			</li>
			              		</ul>
			              	</div>
			              	<div class="clearfix"></div>
			            </div><!-- /.box-header -->
			            <div class="box-content style1">
			            	<ul class="chart-tab">
				            	<li class="waves-effect waves-teal">WEEK</li>
				            	<li class="waves-effect waves-teal">MONTH</li>
				            	<li class="active waves-effect waves-teal">YEAR</li>
				            </ul>
							<div id="chartStatistics">
							</div><!-- /#chartStatistics -->
			            </div><!-- /.box-content -->
					</div><!-- /.box box-statistics -->
		         	<div class="clearfix"></div>
				</div><!-- /.rows -->
				
				<div class="rows">
					<div class="box box-stackedColumn left">
						<div class="box-header with-border">
			              	<div class="box-title">
			              		<h3>UX & UI ANALYSIS</h3>
			              	</div>
			              	<div class="box-tools pull-right">
			              		<i class="zmdi zmdi-more-vert waves-effect waves-teal"></i>
			              		<ul class="dropdown-menu">
			              			<li>
			              				<a href="#" class="waves-effect" title="">Action</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">Support</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">FAQ</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">Message</a>
			              			</li>
			              		</ul>
			              	</div><!-- /.box-tools pull-right -->
			              	<div class="clearfix"></div>
			            </div><!-- /.box-header -->
			            <div class="box-content style2">
			            	<div class="divider35"></div>
			            	<div id="chart-stackedColumn"></div>
			            </div><!-- /.box-content -->
					</div><!-- /.box box-stackedColumn -->
					<div class="box box-spline right">
						<div class="box-header with-border">
			              	<div class="box-title">
			              		<h3>POLAR CHART</h3>
			              	</div>
			              	<div class="box-tools pull-right">
			              		<i class="zmdi zmdi-more-vert waves-effect waves-teal"></i>
			              		<ul class="dropdown-menu">
			              			<li>
			              				<a href="#" class="waves-effect" title="">Action</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">Support</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">FAQ</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">Message</a>
			              			</li>
			              		</ul>
			              	</div><!-- /.box-tools pull-right -->
			              	<div class="clearfix"></div>
			            </div><!-- /.box-header -->
			            <div class="box-content">
			            	<div class="divider35"></div>
			            	<div id="chart-spline"></div>
			            	<div class="legend">
				            	<ul class="legend-list">
				            		<li class="ux">
				            			<span class="dot"></span>
				            			<span class="text">UX Design</span>
				            		</li>
				            		<li class="ui">
				            			<span class="dot"></span>
				            			<span class="text">UI Design</span>
				            		</li>
				            		<li class="code">
				            			<span class="dot"></span>
				            			<span class="text">Code</span>
				            		</li>
				            	</ul><!-- /.legend-list -->
				            </div><!-- /.legend -->
			            </div><!-- /.box-content -->
					</div><!-- /.box box-spline -->
					<div class="clearfix"></div>
				</div><!-- /.rows -->
				
				<div class="rows">
					<div class="box box-map left">
						<div class="box-header with-border">
			              	<div class="box-title">
			              		<h3>MAP DIAGRAM</h3>
			              	</div>
			              	<div class="box-tools pull-right">
			              		<i class="zmdi zmdi-more-vert waves-effect waves-teal"></i>
			              		<ul class="dropdown-menu">
			              			<li>
			              				<a href="#" class="waves-effect" title="">Action</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">Support</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">FAQ</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">Message</a>
			              			</li>
			              		</ul>
			              	</div><!-- /.box-tools pull-right -->
			              	<div class="clearfix"></div>
			            </div><!-- /.box-header -->
			            <div class="box-content">
			            	<div class="divider35"></div>
			            	<div id="chartdiv"></div>
				            <div class="legend">
				            	<ul class="legend-list">
				            		<li class="ux">
				            			<span class="dot"></span>
				            			<span class="text">UX Design</span>
				            		</li>
				            		<li class="ui">
				            			<span class="dot"></span>
				            			<span class="text">UI Design</span>
				            		</li>
				            		<li class="code">
				            			<span class="dot"></span>
				            			<span class="text">Code</span>
				            		</li>
				            	</ul>
				            </div>
			            </div><!-- /.box-content -->
					</div><!-- /.box box-map -->
					<div class="box box-bubble right">
						<div class="box-header with-border">
			              	<div class="box-title">
			              		<h3>LINE SCATTER DIAGRAM</h3>
			              	</div>
			              	<div class="box-tools pull-right">
			              		<i class="zmdi zmdi-more-vert waves-effect waves-teal"></i>
			              		<ul class="dropdown-menu">
			              			<li>
			              				<a href="#" class="waves-effect" title="">Action</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">Support</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">FAQ</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">Message</a>
			              			</li>
			              		</ul>
			              	</div><!-- /.box-tools pull-right -->
			              	<div class="clearfix"></div>
			            </div><!-- /.box-header -->
			            <div class="box-content style2">
			            	<div class="divider22"></div>
			            	<div id="bubble-chart"></div>
							<div class="legend">
				            	<ul class="legend-list">
				            		<li class="ux">
				            			<span class="dot"></span>
				            			<span class="text">UX Design</span>
				            		</li>
				            		<li class="ui">
				            			<span class="dot"></span>
				            			<span class="text">UI Design</span>
				            		</li>
				            		<li class="code">
				            			<span class="dot"></span>
				            			<span class="text">Code</span>
				            		</li>
				            	</ul><!-- /.legend-list -->
				            </div><!-- /.legend -->
			            </div><!-- /.box-content -->
					</div><!-- /.box box-bubble -->
					<div class="clearfix"></div>
				</div><!-- /.rows -->

				<div class="rows">
					<div class="box box-line left">
						<div class="box-header with-border">
			              	<div class="box-title">
			              		<h3>LINE CHART</h3>
			              	</div>
			              	<div class="box-tools pull-right">
			              		<i class="zmdi zmdi-more-vert waves-effect waves-teal"></i>
			              		<ul class="dropdown-menu">
			              			<li>
			              				<a href="#" class="waves-effect" title="">Action</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">Support</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">FAQ</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">Message</a>
			              			</li>
			              		</ul>
			              	</div><!-- /.box-tools pull-right -->
			              	<div class="clearfix"></div>
			            </div><!-- /.box-header -->
			            <div class="box-content style2">
			            	<div class="divider50"></div>
			            	<div id="lineChart"></div>
			            </div><!-- /.box-content -->
					</div><!-- /.box box-line -->
					<div class="box box-radar right">
						<div class="box-header with-border">
			              	<div class="box-title">
			              		<h3>RADAR VALUE</h3>
			              	</div>
			              	<div class="box-tools pull-right">
			              		<i class="zmdi zmdi-more-vert waves-effect waves-teal"></i>
			              		<ul class="dropdown-menu">
			              			<li>
			              				<a href="#" class="waves-effect" title="">Action</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">Support</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">FAQ</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">Message</a>
			              			</li>
			              		</ul>
			              	</div><!-- /.box-tools pull-right -->
			              	<div class="clearfix"></div>
			            </div><!-- /.box-header -->
			            <div class="box-content">
			            	<div class="divider22"></div>
			            	<canvas id="radarChart" height = "150"></canvas>
			            	<div class="legend style2">
				            	<ul class="legend-list">
				            		<li class="ux">
				            			<span class="dot"></span>
				            			<span class="text">Last Month</span>
				            		</li>
				            		<li class="code">
				            			<span class="dot"></span>
				            			<span class="text">This Month</span>
				            		</li>
				            	</ul><!-- /.legend-list -->
				            </div><!-- /.legend style2 -->
			            </div><!-- /.box-content -->
					</div><!-- /.box box-radar -->
					<div class="clearfix"></div>
				</div><!-- /.rows -->
				
				<div class="rows">
					<div class="box box-project left">
						<div class="box-header with-border">
							<div class="box-title">
								<h3>PROJECT STATUS</h3>
								<span>56</span>
							</div>
			              	<div class="box-tools pull-right ">
			              		<i class="zmdi zmdi-more-vert waves-effect waves-teal"></i>
			              		<ul class="dropdown-menu">
			              			<li>
			              				<a href="#" class="waves-effect" title="">Action</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">Support</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">FAQ</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">Message</a>
			              			</li>
			              		</ul>
			              	</div><!-- /.box-tools pull-right -->
			              	<div class="clearfix"></div>
						</div><!-- /.box-header -->
						<div class="box-content">
			            	<table class="">
			            		<thead>
			            			<tr>
			            				<th>ID</th>
			            				<th>PROJECT</th>
			            				<th>STATUS</th>
			            				<th>PROGRESS</th>
			            			</tr>
			            		</thead>
			            		<tbody>
			            			<tr class="developing">
			            				<td>1024</td>
			            				<td>User Research</td>
			            				<td class="bg"><span data-percent="60" data-waypoint-active="yes">Developing</span></td>
			            				<td>Ongoing</td>
			            			</tr>
			            			<tr class="design">
			            				<td>ID</td>
			            				<td>Wings Dashboard Design</td>
			            				<td class="bg"><span data-percent="60" data-waypoint-active="yes">Design</span></td>
			            				<td>Completed</td>
			            			</tr>
			            			<tr class="cancel">
			            				<td>ID</td>
			            				<td>iOS Apps for DXSource</td>
			            				<td class="bg"><span data-percent="160" data-waypoint-active="yes">Canceled</span></td>
			            				<td>Cenceled</td>
			            			</tr>
			            			<tr class="testing">
			            				<td>ID</td>
			            				<td>BMW Re-Design</td>
			            				<td class="bg"><span data-percent="60" data-waypoint-active="yes">Testing</span></td>
			            				<td>PROGRESS</td>
			            			</tr>
			            		</tbody>
			            	</table><!-- /.scroll -->
			            </div><!-- /.box-content -->
					</div><!-- /.box box-project -->
					<div class="box box-inbox right">
						<div class="box-header with-border">
							<div class="box-title">
								<h3>INBOX</h3>
								<span>47</span>
							</div>
			              	<div class="box-tools pull-right">
			              		<i class="zmdi zmdi-more-vert waves-effect waves-teal"></i>
			              		<ul class="dropdown-menu">
			              			<li>
			              				<a href="#" class="waves-effect" title="">Action</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">Support</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">FAQ</a>
			              			</li>
			              			<li>
			              				<a href="#" class="waves-effect" title="">Message</a>
			              			</li>
			              		</ul>
			              	</div><!-- /.box-tools pull-right -->
			              	<div class="clearfix"></div>
			            </div><!-- /.box-header -->
			            <div class="box-content">
			            	<ul class="inbox-list">
			            		<li class="waves-effect">
			            			<a href="#" title="">
			            				<div class="left">
				            				<img src="images/avatar/inbox-01.png" alt="">
				            				<div class="info">
				            					<p class="name">John Alex</p>
				            					<p>Hey! How are you?</p>
				            				</div>
				            			</div>
				            			<div class="right">
				            				12:20 PM
				            			</div>
				            			<div class="clearfix"></div>
			            			</a>
			            		</li>	
			            		<li class="waves-effect">
			            			<a href="#" title="">
			            				<div class="left">
				            				<img src="images/avatar/inbox-02.png" alt="">
				            				<div class="info">
				            					<p class="name">John Alex</p>
				            					<p>Hey! How are you?</p>
				            				</div>
				            			</div>
				            			<div class="right">
				            				12:20 PM
				            			</div>
				            			<div class="clearfix"></div>
			            			</a>
			            		</li>	
			            		<li class="waves-effect">
			            			<a href="#" title="">
			            				<div class="left">
				            				<img src="images/avatar/inbox-03.png" alt="">
				            				<div class="info">
				            					<p class="name">John Alex</p>
				            					<p>Hey! How are you?</p>
				            				</div>
				            			</div>
				            			<div class="right">
				            				12:20 PM
				            			</div>
				            			<div class="clearfix"></div>
			            			</a>	
			            		</li>
			            		<li class="waves-effect">
			            			<a href="#" title="">
			            				<div class="left">
				            				<img src="images/avatar/inbox-04.png" alt="">
				            				<div class="info">
				            					<p class="name">John Alex</p>
				            					<p>Hey! How are you?</p>
				            				</div>
				            			</div>
				            			<div class="right">
				            				12:20 PM
				            			</div>
				            			<div class="clearfix"></div>
			            			</a>	
			            		</li>
			            	</ul><!-- /.inbox-list -->
			            </div><!-- /.box-content -->
					</div><!-- /.box box-inbox -->
					<div class="clearfix"></div>
				</div><!-- /.rows -->
			</section><!-- /#dashboard -->

			<section id="message">
				<div class="box box-message">
					<div class="box-header">
						<div class="header-title">
							<img src="images/icon/download.png" alt="">
							<span>INBOX</span>
						</div>
					</div><!-- /.box-header -->
					<div class="box-content">
						<ul class="message-list scroll">
							<li class="waves-effect waves-teal">
								<div class="left">
									<div class="avatar">
										<img src="images/avatar/message-01.png" alt="">
										<div class="status-color blue style2 heartbit"></div>
									</div>
									<div class="content">
										<div class="username">
											<div class="name">
												Jonathan Alex
											</div>
										</div>
										<div class="text">
											<p>Hi, please loock my last design</p>
											<p>I hope you like it.</p>
										</div>
									</div>
								</div><!-- /.left -->
								<div class="right">
									<div class="date">
										Today, 10:15 PM
									</div>
								</div><!-- /.right -->
								<div class="clearfix"></div>
							</li><!-- /li.waves-effect -->
							<li class="waves-effect waves-teal">
								<div class="left">
									<div class="avatar">
										<img src="images/avatar/message-02.png" alt="">
										<div class="status-color blue style2 heartbit"></div>
									</div>
									<div class="content">
										<div class="username">
											<div class="name">
												Ricky Martin
											</div>
										</div>
										<div class="text">
											<p>Hi, please loock my last design</p>
											<p>I hope you like it.</p>
										</div>
									</div>
								</div><!-- /.left -->
								<div class="right">
									<div class="date">
										Today, 10:15 PM
									</div>
								</div><!-- /.right -->
								<div class="clearfix"></div>
							</li><!-- /li.waves-effect -->
							<li class="waves-effect waves-teal">
								<div class="left">
									<div class="avatar">
										<img src="images/avatar/message-03.png" alt="">
										<div class="status-color blue style2 heartbit"></div>
									</div>
									<div class="content">
										<div class="username">
											<div class="name">
												Stuard James
											</div>
											<span>2</span>
										</div>
										<div class="text">
											<p>Hi, please loock my last design</p>
											<p>I hope you like it.</p>
										</div>
									</div>
								</div><!-- /.left -->
								<div class="right">
									<div class="date">
										June 15
									</div>
								</div><!-- /.right -->
								<div class="clearfix"></div>
							</li><!-- /li.waves-effect -->
							<li class="waves-effect waves-teal active">
								<div class="left">
									<div class="avatar">
										<img src="images/avatar/message-04.png" alt="">
										<div class="status-color blue style2 heartbit"></div>
									</div>
									<div class="content">
										<div class="username">
											<div class="name">
												John Alex
											</div>
										</div>
										<div class="text">
											<p>Hi, please loock my last design</p>
											<p>I hope you like it.</p>
										</div>
									</div>
								</div><!-- /.left -->
								<div class="right">
									<div class="date">
										June 12
									</div>
								</div><!-- /.right -->
								<div class="clearfix"></div>
							</li><!-- /li.waves-effect -->
							<li class="waves-effect waves-teal">
								<div class="left">
									<div class="avatar">
										<img src="images/avatar/message-05.png" alt="">
										<div class="status-color blue style2 heartbit"></div>
									</div>
									<div class="content">
										<div class="username">
											<div class="name">
												Robart K
											</div>
										</div>
										<div class="text">
											<p>Hi, please loock my last design</p>
											<p>I hope you like it.</p>
										</div>
									</div>
								</div><!-- /.left -->
								<div class="right">
									<div class="date">
										June 11
									</div>
								</div><!-- /.right -->
								<div class="clearfix"></div>
							</li><!-- /li.waves-effect -->
							<li class="waves-effect waves-teal">
								<div class="left">
									<div class="avatar">
										<img src="images/avatar/message-05.png" alt="">
										<div class="status-color blue style2 heartbit"></div>
									</div>
									<div class="content">
										<div class="username">
											<div class="name">
												Robart K
											</div>
										</div>
										<div class="text">
											<p>Hi, please loock my last design</p>
											<p>I hope you like it.</p>
										</div>
									</div>
								</div><!-- /.left -->
								<div class="right">
									<div class="date">
										June 11
									</div>
								</div><!-- /.right -->
								<div class="clearfix"></div>
							</li><!-- /li.waves-effect -->
						</ul><!-- /.message-list scroll -->
						<div class="new-message">
							<a href="#" class="waves-effect" title="">Compose New</a>
						</div><!-- /.new-message -->
					</div><!-- /.box-content -->
				</div><!-- /.box box-message -->
				<div class="message-info right">
					<div class="message-header">
						<div class="move-message">
							<a href="#" title="">
								<span><img src="images/icon/bin.png" alt=""></span>
								MOVE TO TRASH
							</a>
						</div><!-- /.move-message -->
						<div class="box-info-messager">
							<div class="message-pic">
								<img src="images/avatar/message-06.png" alt="">
								<div class="status-color purple"></div>
							</div>
							<div class="content">
								<div class="username">
									Ricky Martin
								</div>
								<div class="text">
									<p>Hi, please loock my last design</p>
									<p>I hope you like it.</p>
								</div>
							</div>
						</div><!-- /.box-info-messager -->
					</div><!-- /.message-header -->
					<div class="message-box scroll">
						<div class="message-in">
							<div class="message-pic">
								<img src="images/avatar/message-06.png" alt="">
								<div class="status-color purple"></div>
							</div>
							<div class="message-body">
								<div class="message-text">
									<p>Hi, John</p>
									<p>You have excellent dashboard design, I wanted to offer to cooprate. I can promote your design.</p>
								</div>
							</div>
							<div class="clearfix"></div>
						</div><!-- /.message-in -->
						<div class="clearfix"></div>
						<div class="message-out">
							<div class="message-pic">
								<img src="images/avatar/message-07.png" alt="">
								<div class="status-color purple"></div>
							</div>
							<div class="message-body">
								<div class="message-text">
									<p>Hi, Martin</p>
									<p>You have excellent dashboard design, I wanted to offer to cooprate. I can promote your design. to offer to cooprate</p>
								</div>
							</div>
							<div class="clearfix"></div>
						</div><!-- /.message-out -->
						<div class="clearfix"></div>
						<div class="message-in">
							<div class="message-pic">
								<img src="images/avatar/message-06.png" alt="">
								<div class="status-color purple"></div>
							</div>
							<div class="message-body">
								<div class="message-text">
									<p>Hi, John</p>
									<p>You have excellent dashboard design, I wanted to offer to cooprate. I can promote your design.</p>
								</div>
							</div>
							<div class="clearfix"></div>
						</div><!-- /.message-in -->
						<div class="clearfix"></div>
						<div class="message-out">
							<div class="message-pic">
								<img src="images/avatar/message-07.png" alt="">
								<div class="status-color purple"></div>
							</div>
							<div class="message-body">
								<div class="message-text">
									<p>Hi, Martin</p>
									<p>Here is some of my best work example for ux & ui design works. Reply me with your openion about my work</p>
								</div>
								<div class="message-image">
									<ul>
										<li>
											<img src="images/message/01.png" alt="">
										</li>
										<li>
											<img src="images/message/02.png" alt="">
										</li>
										<li>
											<img src="images/message/03.png" alt="">
										</li>
										<li>
											<img src="images/message/04.png" alt="">
										</li>
									</ul>
								</div>
							</div>
							<div class="clearfix"></div>
						</div><!-- /.message-out -->
						<div class="clearfix"></div>
						<div class="message-in">
							<div class="message-pic">
								<img src="images/avatar/message-06.png" alt="">
								<div class="status-color purple"></div>
							</div>
							<div class="message-body">
								<div class="message-text">
									<p>Hi, John</p>
									<p>You have excellent dashboard design, I wanted to offer to cooprate. I can promote your design.</p>
								</div>
							</div>
							<div class="clearfix"></div>
						</div><!-- /.message-in -->
						<div class="clearfix"></div>
						<div class="message-out">
							<div class="message-pic">
								<img src="images/avatar/message-07.png" alt="">
								<div class="status-color purple"></div>
							</div>
							<div class="message-body">
								<div class="message-text">
									<p>Hi, Martin</p>
									<p>Here is some of my best work example for ux & ui design works. Reply me with your openion about my work</p>
								</div>
								<div class="message-image">
									<ul>
										<li>
											<img src="images/message/01.png" alt="">
										</li>
										<li>
											<img src="images/message/04.png" alt="">
										</li>
									</ul>
								</div>
							</div>
							<div class="clearfix"></div>
						</div><!-- /.message-out -->
					</div>
					<div class="form-chat">
						<form action="#" method="get" accept-charset="utf-8">
							<div class="message-form-chat">
								<span class="pin">
									<a href="#" title="">
										<img src="images/icon/pin.png" alt="">
									</a>
								</span><!-- /.pin -->
								<span class="message-text">
									<textarea name="message" placeholder="Type your message..." required="required"></textarea>
								</span><!-- /.message-text -->
								<span class="camera">
									<a href="#" title="">
										<img src="images/icon/camera.png" alt="">
									</a>
								</span><!-- /.camera -->
								<span class="icon-message">
									<a href="#" title="">
										<img src="images/icon/icon-message.png" alt="">
									</a>
								</span><!-- /.icon-right -->
								<span class="btn-send">
									<button class="waves-effect" type="submit">Send</button>
								</span><!-- /.btn-send -->
								<div class="icon-mobile">
									<ul>
										<li>
											<a href="#" title=""><img src="images/icon/pin.png" alt=""></a>
										</li>
										<li>
											<a href="#" title=""><img src="images/icon/camera.png" alt=""></a>
										</li>
										<li>
											<a href="#" title=""><img src="images/icon/icon-message.png" alt=""></a>
										</li>
									</ul>
								</div><!-- /.icon-right -->
							</div><!-- /.message-form-chat -->
							<div class="clearfix"></div>
						</form><!-- /form -->
					</div>
				</div><!-- /.message-info -->
				<div class="clearfix"></div>
			</section><!-- /#message -->

			<section id="calendar">
				<div class="breadcrumbs">
					<ul>
						<li><a href="index.html" title="">Home</a></li>
						<li>- Calendar</li>
					</ul>
				</div>
				<div class="box calendar">
					<div class="box-header">
						<h2 class="title float-left">November <span>2018</span></h2>
						<ul class="date float-right">
							<li class="active">MONTH</li>
							<li>YEAR</li>
						</ul>
					</div>
					<div id="box-calendar"></div>
				</div>
				<div class="box" id="external-events">
	                <div class="external-event bg-purple">
	                	<div class="event-title">
	                		<span>9</span> EVENT ONE
	                	</div>
	                	<div class="event-content">
	                		<div class="date">
	                			Tuesday, 9 November, 2018
	                		</div>
	                		<div class="time">
	                			9:00 AM  :  Corporate Meeting
	                		</div>
	                	</div>
	                </div>
	                <div class="external-event bg-aqua">
	                	<div class="event-title">
	                		<span>11</span> EVENT TWO
	                	</div>
	                	<div class="event-content">
	                		<div class="date">
	                			Saturday, 11 November, 2018
	                		</div>
	                		<div class="time">
	                			10:00 AM  :  Business Meeting
	                		</div>
	                	</div>
	                </div>
	                <div class="external-event bg-blue">
	                	<div class="event-title">
	                		<span>11</span> EVENT THREE
	                	</div>
	                	<div class="event-content">
	                		<div class="date">
	                			Wednesday, 15 November, 2018
	                		</div>
	                		<div class="time">
	                			9:00 AM  :  Corporate Meeting
	                		</div>
	                	</div>
	                </div>
	                <div class="external-event bg-pink">
	                	<div class="event-title">
	                		<span>17</span> EVENT FOUR
	                	</div>
	                	<div class="event-content">
	                		<div class="date">
	                			Friday, 17 November, 2018
	                		</div>
	                		<div class="time">
	                			11:00 AM  :  Project Meeting
	                		</div>
	                	</div>
	                </div>
	                <div class="external-event bg-orange">
	                	<div class="event-title">
	                		<span>25</span> EVENT FIVE
	                	</div>
	                	<div class="event-content">
	                		<div class="date">
	                			Saturday, 25 November, 2018
	                		</div>
	                		<div class="time">
	                			10:00 AM  :  Corporate Meeting
	                		</div>
	                	</div>
	                </div>
	            </div>
	            <div class="clearfix"></div>
	            <div class="footer">
            		<div class="copyright">
            			<p>2018 © All Right Researved by Imran Hossain</p>
            		</div>
            		<ul class="menu-ft">
            			<li>
            				<a href="#" title="">About</a>
            			</li>
            			<li>
            				<a href="#" title="">Privacy</a>
            			</li>
            			<li>
            				<a href="#" title="">T&C</a>
            			</li>
            			<li>
            				<a href="#" title="">Purchase</a>
            			</li>
            		</ul>
	            	<div class="clearfix"></div>
	            </div>
			</section><!-- /#calendar -->
			
		</main><!-- /main -->
