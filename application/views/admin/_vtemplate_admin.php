<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="<?php echo base_url()?>assets/images/logo.png">

	<title>APA | Aplikasi Pelayanan Antrian</title>

	<link rel="stylesheet" href="<?php echo base_url()?>assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/neon-core.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/neon-theme.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/neon-forms.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	
	<script src="<?php echo base_url()?>assets/js/jquery-1.11.3.min.js"></script>

	
	 <link href="<?php echo base_url()?>assets/css/datatables2/datatables.min.css" rel="stylesheet">

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body" data-url="http://neon.dev">

<div class="page-container horizontal-menu">

	
	<header class="navbar navbar-fixed-top"><!-- set fixed position by adding class "navbar-fixed-top" -->
		
		<div class="navbar-inner">
		
			<!-- logo -->
			<div class="navbar-brand">
				<a href="#">
					<img src="<?php echo base_url()?>assets/images/logo.png" width="30" alt="" />
				</a>
			</div>
			
			
			<!-- main menu -->
						
			<ul class="navbar-nav">
				<li class="has-sub">
					<a href="<?php echo base_url()?>admin/Cadmin">
						<i class="entypo-gauge"></i>
						<span class="title">Dashboard</span>
					</a>
					<!-- <ul>
						<li>
							<a href="index.html">
								<span class="title">Dashboard 1</span>
							</a>
						</li>
						
					</ul> -->
				</li>
				<li class="has-sub">
					<a href="<?php echo base_url()?>admin/C_crud_panak">
						<!-- <i class="entypo-gauge"></i> -->
						<span class="title">Data Poli Anak</span>
					</a>
					
				</li>
				<li class="has-sub">
					<a href="<?php echo base_url()?>admin/C_crud_pgigi">
						<!-- <i class="entypo-gauge"></i> -->
						<span class="title">Data Poli Gigi</span>
					</a>
					
				</li>
				<li class="has-sub">
					<a href="<?php echo base_url()?>admin/C_crud_pumum">
						<!-- <i class="entypo-gauge"></i> -->
						<span class="title">Data Poli Umum</span>
					</a>
					
				</li>
				<li class="has-sub">
					<a href="<?php echo base_url()?>admin/C_crud_pasien">
						<!-- <i class="entypo-gauge"></i> -->
						<span class="title">Data Akun Pasien</span>
					</a>
					
				</li>
				<!-- <li class="has-sub">
					<a href="#">
						<i class="entypo-layout"></i>
						<span class="title">Data Master</span>
					</a>
					<ul class="visible">
						<li>
							<a href="<?php echo base_url()?>poli_anak/Cpolianak">
								<span class="title"><i class="entypo-right-open"></i> Data Poli Anak</span>
							</a>
						</li>

						<li>
							<a href="<?php echo base_url()?>poli_gigi/Cpoligigi">
								<span class="title"><i class="entypo-right-open"></i> Data Poli Gigi</span>
							</a>
						</li>

						<li>
							<a href="<?php echo base_url()?>poli_umum/Cpoliumum">
								<span class="title"><i class="entypo-right-open"></i> Data Poli Umum</span>
							</a>
						</li>

						<li>
							<a href="<?php echo base_url()?>Cpengguna">
								<span class="title"><i class="entypo-right-open"></i> Data Pengguna</span>
							</a>
						</li>
						
					</ul>
				</li> -->
				<!-- <li class="has-sub">
					<a href="#">
						<i class="entypo-newspaper"></i>
						<span class="title">UI Elements</span>
					</a>
					<ul>
						<li>
							<a href="#">
								<span class="title">Panels</span>
							</a>
						</li>
						
						
						
					</ul>
				</li> -->
				<!-- <li class="has-sub">
					<a href="#">
						<i class="entypo-doc-text"></i>
						<span class="title">Forms</span>
					</a>
					<ul>
						<li>
							<a href="#">
								<span class="title">Basic Elements</span>
							</a>
						</li>
						
					</ul>
				</li> -->
				
			</ul>
						
			
			<!-- notifications and other links -->
			<ul class="nav navbar-right pull-right">
				

				<li>
					<a href="<?php echo base_url()?>Clogin/logout">
						Log Out <i class="entypo-logout right"></i>
					</a>
				</li>
				
				
				<!-- mobile only -->
				<li class="visible-xs">	
				
					<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
					<div class="horizontal-mobile-menu visible-xs">
						<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
							<i class="entypo-menu"></i>
						</a>
					</div>
					
				</li>
				
			</ul>
	

		</div>


		
	</header>
	





<?php echo $contents ?>







<!-- Footer -->
<!-- <footer class="main">
	
	Copyright &copy;2019 <strong></strong><a href="#" target="_blank">AndrichardWS.</a> All rights reserved.

</footer> -->
			</div>

	


</div>




	<!-- Bottom scripts (common) -->
	<script src="<?php echo base_url()?>assets/js/gsap/TweenMax.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url()?>assets/js/joinable.js"></script>
	<script src="<?php echo base_url()?>assets/js/resizeable.js"></script>
	<script src="<?php echo base_url()?>assets/js/neon-api.js"></script>

	


	<!-- Imported scripts on this page -->
	<!-- <script src="<?php echo base_url()?>assets/js/neon-chat.js"></script> -->


	<!-- JavaScripts initializations and stuff -->
	<script src="<?php echo base_url()?>assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<!-- <script src="<?php echo base_url()?>assets/js/neon-demo.js"></script> -->

	<!-- DATABELS -->
	<script src="<?php echo base_url()?>assets/js/datatables2/datatables.min.js"></script>



	

</body>
</html>