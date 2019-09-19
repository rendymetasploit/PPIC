
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>PT. Dragon Product Indonesia</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link href="assets/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
		<script src="assets/js/ace-extra.min.js"></script>

	</head>

	<body class="no-skin">
		
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index" class="navbar-brand">
						<small>
							<i class="fa fa-industry"></i>
							PT. DRAGON Product Indonesia
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						
						<li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									8 Notifications
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar navbar-pink">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
														New Comments
													</span>
													<span class="pull-right badge badge-info">+12</span>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<i class="btn btn-xs btn-primary fa fa-user"></i>
												Bob just signed up as an editor ...
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
														New Orders
													</span>
													<span class="pull-right badge badge-success">+8</span>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
														Followers
													</span>
													<span class="pull-right badge badge-info">+11</span>
												</div>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>
						
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li>
						<a href="home">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li>
						<a href="manufac">
							<i class="menu-icon fa fa-industry"></i>
							<span class="menu-text"> Manufacturing </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="active">
						<a href="mesin">
							<i class="menu-icon fa fa-cogs"></i>
							<span class="menu-text"> Enggine </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li>
						<a href="formitemtransfer">
							<i class="menu-icon fa fa-home"></i>
							<span class="menu-text"> Mutasi </span>
						</a>

						<b class="arrow"></b>
					</li>
					
				</ul>

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li class="active"><a href="packing">PACKING</a></li>
							<li class="active"><a href="yieldpershift">YIELD PER SHIFT</a></li>
							<li class="active"><a href="yieldanalys">YIELD ANALYS</a></li>
							<li class="active"><a href="yield">YIELD</a></li>
							<li class="active"><a href="hasilone">HASIL 1</a></li>
							<li class="active"><a href="problem">PROBLEM</a></li>
							<li class="active"><a href="perbagian">DATA PERBAGIAN</a></li>
							<li class="active"><a href="hasiltwo">HASIL 2</a></li>
							<li class="active"><a href="kesimpulan">KESIMPULAN</a></li>
						</ul><!-- /.breadcrumb -->
						<br>
						<ul class="breadcrumb">
							<li class="active"><a href="profit">PROFIT</a></li>
							<li class="active"><a href="dayproblemdiv">DAY PROBLEM DIV</a></li>
							<li class="active"><a href="datadivperbln">DATA DIV PERBULAN</a></li>
							<li class="active"><a href="hasil">HASIL</a></li>
							<li class="active"><a href="yielddiv">YIELD</a></li>
							<li class="active"><a href="BS">BS</a></li>
							<li class="active"><a href="LOSS">LOSS</a></li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
							<div class="row">
									<div class="col-xs-12">
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<!-- Advanced Tables -->
												<div class="panel panel-default">
													<div class="table-header">
														HASIL PRODUKSI PT DRAGON PRODUCT TAHUN 2019
													</div>
													<div class="panel-body">
														<div class="table-responsive">
															<table class="table table-bordered">
																<thead>
																	<tr>
                                                                    	<th>DIVISI</th>
																		<th>BULAN/TAHUN</th>
																	</tr>
																</thead>
																<tbody>
																	<tr class="gradeX">
																	  <td>MONOFYLAMENT</td>
																	  <td>&nbsp;</td>
																  </tr>
																	<tr class="gradeX">
																	  <td>PLASTIK</td>
																	  <td>&nbsp;</td>
																  </tr>
																	<tr class="gradeX">
																	  <td>SIKAT</td>
																	  <td>&nbsp;</td>
																  </tr>
																	<tr class="gradeX">
																	  <td>SUMBU</td>
																	  <td>&nbsp;</td>
																  </tr>
																	<tr class="gradeX">
																	  <td>HANDLE</td>
																	  <td>&nbsp;</td>
																  </tr>
																	<tr class="gradeX">
																	  <td>RAK PIRING</td>
																	  <td>&nbsp;</td>
																  </tr>
																</tbody>
															</table>
														</div>
														
													</div>
												</div>
												<!--End Advanced Tables -->
											</div>
										</div>
									</div>
									

								<!-- PAGE CONTENT ENDS -->
						</div><!-- /.row -->
						<div class="row">
									<div class="col-xs-12">
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<!-- Advanced Tables -->
												<div class="panel panel-default">
													
													<div class="panel-body">
														<div class="table-responsive">
															GRAFIK HASIL ( PCS. KG )
														</div>
														
													</div>
												</div>
												<!--End Advanced Tables -->
											</div>
										</div>
									</div>
									

								<!-- PAGE CONTENT ENDS -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
					
					<div class="page-content">
							<div class="row">
									<div class="col-xs-12">
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<!-- Advanced Tables -->
												<div class="panel panel-default">
													<div class="table-header">
														YIELD ( % ) PRODUKSI PT DRAGON PRODUCT TAHUN 2019
													</div>
													<div class="panel-body">
														<div class="table-responsive">
															<table class="table table-bordered">
																<thead>
																	<tr>
                                                                    	<th>DIVISI</th>
																		<th>BULAN/TAHUN</th>
																	</tr>
																</thead>
																<tbody>
																	<tr class="gradeX">
																	  <td>MONOFYLAMENT</td>
																	  <td>&nbsp;</td>
																  </tr>
																	<tr class="gradeX">
																	  <td>PLASTIK</td>
																	  <td>&nbsp;</td>
																  </tr>
																	<tr class="gradeX">
																	  <td>SIKAT</td>
																	  <td>&nbsp;</td>
																  </tr>
																	<tr class="gradeX">
																	  <td>SUMBU</td>
																	  <td>&nbsp;</td>
																  </tr>
																	<tr class="gradeX">
																	  <td>HANDLE</td>
																	  <td>&nbsp;</td>
																  </tr>
																	<tr class="gradeX">
																	  <td>RAK PIRING</td>
																	  <td>&nbsp;</td>
																  </tr>
																</tbody>
															</table>
														</div>
														
													</div>
												</div>
												<!--End Advanced Tables -->
											</div>
										</div>
									</div>
									

								<!-- PAGE CONTENT ENDS -->
						</div><!-- /.row -->
						<div class="row">
									<div class="col-xs-12">
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<!-- Advanced Tables -->
												<div class="panel panel-default">
													
													<div class="panel-body">
														<div class="table-responsive">
															GRAFIK YIELD ( % )
														</div>
														
													</div>
												</div>
												<!--End Advanced Tables -->
											</div>
										</div>
									</div>
									

								<!-- PAGE CONTENT ENDS -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
					
					<div class="page-content">
							<div class="row">
									<div class="col-xs-12">
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<!-- Advanced Tables -->
												<div class="panel panel-default">
													<div class="table-header">
														BS ( % ) PRODUKSI PT DRAGON PRODUCT TAHUN 2019
													</div>
													<div class="panel-body">
														<div class="table-responsive">
															<table class="table table-bordered">
																<thead>
																	<tr>
                                                                    	<th>DIVISI</th>
																		<th>BULAN/TAHUN</th>
																	</tr>
																</thead>
																<tbody>
																	<tr class="gradeX">
																	  <td>MONOFYLAMENT</td>
																	  <td>&nbsp;</td>
																  </tr>
																	<tr class="gradeX">
																	  <td>PLASTIK</td>
																	  <td>&nbsp;</td>
																  </tr>
																	<tr class="gradeX">
																	  <td>SIKAT</td>
																	  <td>&nbsp;</td>
																  </tr>
																	<tr class="gradeX">
																	  <td>SUMBU</td>
																	  <td>&nbsp;</td>
																  </tr>
																	<tr class="gradeX">
																	  <td>HANDLE</td>
																	  <td>&nbsp;</td>
																  </tr>
																	<tr class="gradeX">
																	  <td>RAK PIRING</td>
																	  <td>&nbsp;</td>
																  </tr>
																</tbody>
															</table>
														</div>
														
													</div>
												</div>
												<!--End Advanced Tables -->
											</div>
										</div>
									</div>
									

								<!-- PAGE CONTENT ENDS -->
						</div><!-- /.row -->
						<div class="row">
									<div class="col-xs-12">
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<!-- Advanced Tables -->
												<div class="panel panel-default">
													
													<div class="panel-body">
														<div class="table-responsive">
															GRAFIK BS ( % )
														</div>
														
													</div>
												</div>
												<!--End Advanced Tables -->
											</div>
										</div>
									</div>
								<!-- PAGE CONTENT ENDS -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
					
					<div class="page-content">
							<div class="row">
									<div class="col-xs-12">
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<!-- Advanced Tables -->
												<div class="panel panel-default">
													<div class="table-header">
														LOSS ( % ) PRODUKSI PT DRAGON PRODUCT TAHUN 2019
													</div>
													<div class="panel-body">
														<div class="table-responsive">
															<table class="table table-bordered">
																<thead>
																	<tr>
                                                                    	<th>DIVISI</th>
																		<th>BULAN/TAHUN</th>
																	</tr>
																</thead>
																<tbody>
																	<tr class="gradeX">
																	  <td>MONOFYLAMENT</td>
																	  <td>&nbsp;</td>
																  </tr>
																	<tr class="gradeX">
																	  <td>PLASTIK</td>
																	  <td>&nbsp;</td>
																  </tr>
																	<tr class="gradeX">
																	  <td>SIKAT</td>
																	  <td>&nbsp;</td>
																  </tr>
																	<tr class="gradeX">
																	  <td>SUMBU</td>
																	  <td>&nbsp;</td>
																  </tr>
																	<tr class="gradeX">
																	  <td>HANDLE</td>
																	  <td>&nbsp;</td>
																  </tr>
																	<tr class="gradeX">
																	  <td>RAK PIRING</td>
																	  <td>&nbsp;</td>
																  </tr>
																</tbody>
															</table>
														</div>
														
													</div>
												</div>
												<!--End Advanced Tables -->
											</div>
										</div>
									</div>
								<!-- PAGE CONTENT ENDS -->
						</div><!-- /.row -->
						<div class="row">
									<div class="col-xs-12">
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<!-- Advanced Tables -->
												<div class="panel panel-default">
													
													<div class="panel-body">
														<div class="table-responsive">
															GRAFIK LOSS ( % )
														</div>
														
													</div>
												</div>
												<!--End Advanced Tables -->
											</div>
										</div>
									</div>
								<!-- PAGE CONTENT ENDS -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
					
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="red bolder">PT. DRAGON Product Indonesia</span>
							&copy; 2019-2020
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="../assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		
		<script src="assets/js/buttons.flash.min.js"></script>
		<script src="assets/js/buttons.html5.min.js"></script>
		<script src="assets/js/buttons.print.min.js"></script>
		<script src="assets/js/buttons.colVis.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script src="assets/dataTables/jquery.dataTables.js"></script>
		<script src="assets/dataTables/dataTables.bootstrap.js"></script>
		<script>
			$(document).ready(function () {
				$('#dataTables-example').dataTable();
			});
		</script>
	</body>
</html>

