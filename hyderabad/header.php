
<?php 
include 'db.php' ;
?><meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!-- Stylesheets -->
	<link href="https://sprintdiagnostics.in/vendor/slick/slick.css" rel="stylesheet">
	<link href="https://sprintdiagnostics.in/icons/style.css" rel="stylesheet">
	<link href="https://sprintdiagnostics.in/css/style.css" rel="stylesheet">
	<!--Favicon-->
	<link rel="icon" href="https://sprintdiagnostics.in/images/favicon.png" type="image/x-icon">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	<!-- Google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiFdr5Z0WRIXKUOqoRRvzRQ5SkzhkUVjk"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://sprintdiagnostics.in/vendor/animate/animate.min.css" rel="stylesheet">
	<link href="https://sprintdiagnostics.in/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
	<link href="https://sprintdiagnostics.in/css/style2.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a708244d82.js" crossorigin="anonymous"></script>
	<link rel="canonical" href="https://www.sprintdiagnostics.in<?php echo $_SERVER['REQUEST_URI'];?>"/>
	<script type="text/javascript" src="https://www.sprintdiagnostics.in/js/jquery.js"></script>
    <script type="text/javascript" src="https://www.sprintdiagnostics.in/js/acmeticker.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<style type="text/css">
	@media screen and (max-height: 450px){
	.sidenav {
	    padding-top: 15px;
	}
	}
	.sidenav {
	    width: 100%;
	    position: sticky;
	    top: 100px;
	    right: 10px;
	    overflow-x: hidden;
	    min-height: auto;
	}
	.has-search .form-control {
    padding-left: 2.375rem;
}

.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
}
.search-container{
    max-width:600px;
}
	</style>
	<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  
}
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.container {
  padding: 2px 16px;
}
</style>
<style>
	.card {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		transition: 0.3s;

	}

	.card:hover {
		box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
	}

	.container {
		padding: 2px 16px;
	}

	/* toast Message */
	/* login form */
	.modal-login {
		color: #0b54a5;
		width: 350px;
	}

	.modal-login .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}

	.modal-login .modal-header {
		border-bottom: none;
		position: relative;
		justify-content: center;
	}

	.modal-login h4 {
		text-align: center;
		font-size: 32px;
		margin: 30px 0 -15px;
	}

	.modal-login .form-control:focus {
		border-color: #70c5c0;
	}

	.modal-login .form-control,
	.modal-login .btn {
		min-height: 40px;
		border-radius: 3px;
	}

	.modal-login .close {
		position: absolute;
		top: -5px;
		right: -5px;
	}

	.modal-login .modal-footer {
		background: #ecf0f1;
		border-color: #dee4e7;
		text-align: center;
		justify-content: center;
		margin: 0 -20px -20px;
		border-radius: 5px;
		font-size: 13px;
	}

	.modal-login .modal-footer p {
		color: #999;
	}

	.modal-login .avatar {
		position: absolute;
		margin: 0 auto;
		left: 0;
		right: 0;
		top: -55px;
		width: 95px;
		height: 95px;
		border-radius: 50%;
		z-index: 9;
		background: #0076d2;
		padding: 15px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}

	.modal-login .avatar img {
		width: 100%;
	}

	.modal-login.modal-dialog {
		margin-top: 80px;
	}

	.modal-login .btn,
	.modal-login .btn:active {
		color: #fff !important;
		border-radius: 4px;
		background: #0076d2 !important;
		text-decoration: none;
		transition: all 0.4s;
		line-height: normal;
		border: none;
	}

	.modal-login .btn:hover,
	.modal-login .btn:focus {
		background: #45aba6 !important;
		outline: none;
	}

	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}

	.inputLine {
		border-bottom: 2px solid #0076d2 !important;
		border-top: 0px !important;
		border-left: 0px !important;
		border-right: 0px !important;
		border-radius: 0px !important;
	}

	.inputLine:focus {
		box-shadow: none !important;
	}


	.form-control:focus {
		box-shadow: 0 0 0 0px rgba(0, 0, 0, 0.05);
	}

	.btn-fullbutton {
		width: 100%;
		background-color: #fff !important;
		color: #0076d2 !important;
		border: 3px solid #0076d2 !important;
	}

	.btn-fullbutton :hover {
		width: 100%;
		background-color: #0076d2 !important;
		color: #fff !important;
		border: 3px solid #0076d2 !important;
	}

	.para-text {
		font-size: 13px;
	}

	.borderLogin {
		margin-bottom: 6px !important;
		text-align: center !important;
		font-weight: 500;
		color: #00acf7 !important;
		font-size: 16px;
	}

	.wave-img {
		height: 45px;
		margin-top: 24px;
		margin-right: 14px;
	}

	.btn,
	body:not(.touch) .btn:focus {
		position: relative;
		overflow: hidden;
		cursor: pointer;
		text-shadow: none;
		font-size: 15px;
		line-height: 18px;
		font-weight: 600;
		font-family: "Poppins", serif;
		padding: 8px 12px !important;
		color: #2c53a5;
		border: 2px solid #2c53a5;
		border-radius: 0px !important;
		background: transparent;
		text-transform: none;
		letter-spacing: .05em;
		transition: 0.3s;
	}

	.symptoms {
		background-color: #e9f8ff;
		padding: 5px 15px;
		border-radius: 10px;
	}

	.digit-group .form-control {
		padding: 10px 7px !important;
	}

	@media only screen and (max-width: 600px) {
		.mobileClasLogin {
			display: none !important;
		}

		.mobileclasslogout {
			display: none !important;
		}
	}


	@media only screen and (min-width: 1200px) {
		.loginMObileSHow {
			display: none !important;
		}

		.logoutMObileSHow {
			display: none !important;
		}
	}

	#loginOUtButton {
		position: relative;
	}

	.loginPannel {
		position: absolute;
		right: 0;
		top: 50px;
		z-index: 999999;
	}

	.header-nav .nav-item {
		padding: 0 10px !important;
	}

	.MuiTypography-h2 {
		color: #2c53a5;
		font-size: 24px;
		font-family: IBM Plex Sans, sans-serif;
		font-weight: 600;
		line-height: 1.2;
	}

	.btn-primary {
		background: #2c53a5;
		border-radius: 5px !important;
		color: #fff !important;
	}

	.card {
		padding: 10px;
		background: #fff;
		border-radius: 10px;
	}

	.btn-primary12:hover {
		color: #fff !important;
		background-color: #ce8400 !important;
		border-color: #c17b00 !important;

	}

	/* login form */
</style>

<!-- <div class="modal fade d-none" id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="https://www.sprintdiagnostics.in/images/essential-health-checkup.jpeg" class="img-responsive img-thumbnail">
            </div>
            <div class="modal-footer">
                <a href="https://api.whatsapp.com/send?phone=917207947029&text=Hi,%20I%20was%20looking%20to%20book%20Essential%20Health%20Package%20priced%20Rs.1500." class="btn btn-sm mx-auto"><i class="fa fa-whatsapp" style="font-size:18px;"></i> WhatsApp Now</a>
            </div>
        </div>
    </div>
</div> -->
<!-- <script type="text/javascript">
    $(window).on('load',function(){
    var delayMs = 5000; // delay in milliseconds
    
    setTimeout(function(){
        $('#myModal').modal('show');
    }, delayMs);
});
</script> -->
<!--header-->
	<header class="header">
		<div class="header-topline d-lg-flex">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-auto d-flex align-items-center">
						<div class="header-phone col-6"><i class="icon-telephone"></i><a href="tel:04069066767">040 69066767</a></div>
						<div class="header-info m-none"><i class="icon-black-envelope"></i><a href="mailto:info@sprintdiagnostics.in">info@sprintdiagnostics.in</a></div>
						<div class="header-info d-lg-none col-6" style="margin-left: 50px;">
							<a href="https://api.whatsapp.com/send?phone=917207947029&text=Hi,%20I%20was%20browsing%20through%20Sprint%20Diagnostics%20website.%20I%20would%20like%20to%20book%20an%20appointment." target="_blank">
							<i class="fa fa-whatsapp" style="font-size: 18px;"></i> &nbsp;Whatsapp</a>
						</div>
					</div>
					<div class="col-auto ml-auto d-flex align-items-center">
						<span class="header-social m-none">
							<a href="https://www.facebook.com/sprintdiagnostics/" class="hovicon" target="blank"><i class="fab fa-facebook" style="padding:5px;"></i></a>
							<a href="https://twitter.com/sprinthyd?s=11" class="hovicon" target="blank"><i class="fab fa-twitter" style="padding:5px;"></i></a>
							<a href="https://instagram.com/sprintdiagnostics/" class="hovicon" target="blank"><i class="fab fa-instagram" style="padding:5px;"></i></a>
							<a href="https://www.youtube.com/channel/UCTItKGIgHA7kj6jNN6EPuBg" target="blank" class="hovicon"><i class="fab fa-youtube" style="padding:5px;"></i></a>
							<a href="https://in.linkedin.com/company/sprint-diagnostics-official" target="blank" class="hovicon"><i class="fab fa-linkedin" style="padding:5px;"></i></a>
						</span>
					</div>
				</div>
			</div>
		</div>
		</div>
		

		<div class="header-content">
			<div class="container">
				<div class="row align-items-lg-center">
					<button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
						<span class="icon-menu"></span>
					</button>
					<div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
						<a href="https://sprintdiagnostics.in/" class="header-logo"><img src="https://sprintdiagnostics.in/images/logo.webp" alt="Best Diagnostics Center in Hyderabad" class="img-fluid"></a>
					</div>
					<div class="col-lg ml-auto header-nav-wrap">
						<div class="header-nav js-header-nav">
							<nav class="navbar navbar-expand-lg btco-hover-menu">
								<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
									<ul class="navbar-nav">
										<li class="nav-item">
											<a class="nav-link" href="https://sprintdiagnostics.in/"><i class="fa fa-home"></i></a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="https://www.sprintdiagnostics.in/hyderabad/test/">Lab Tests</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="https://www.sprintdiagnostics.in/offers/">Offers</a>
										</li> 
										<li class="nav-item">
											<a class="nav-link" href="https://www.sprintdiagnostics.in/health-checkups/">Health Checkups</a>
										</li>
										<li class="nav-item">
										<a href="https://www.sprintdiagnostics.in/our-services/"
											class="nav-link dropdown-toggle" data-toggle="dropdown">Our Services</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="https://www.sprintdiagnostics.in/our-services/laboratory/"
													class="nav-link dropdown-toggle"
													data-toggle="dropdown">Laboratory</a>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item"
															href="https://www.sprintdiagnostics.in/our-services/laboratory/clinical-biochemistry">Clinical
															Biochemistry</a></li>
													<li><a class="dropdown-item"
															href="https://www.sprintdiagnostics.in/our-services/laboratory/clinical-pathology">Clinical
															Pathology</a></li>
													<li><a class="dropdown-item"
															href="https://www.sprintdiagnostics.in/our-services/laboratory/cytopathology">Cytopathology</a>
													</li>
													<li><a class="dropdown-item"
															href="https://www.sprintdiagnostics.in/our-services/laboratory/genomics-cytogenetics">Genomics
															and Cytogenetics</a></li>
													<li><a class="dropdown-item"
															href="https://www.sprintdiagnostics.in/our-services/laboratory/hematology">Hematology</a>
													</li>
													<li><a class="dropdown-item"
															href="https://www.sprintdiagnostics.in/our-services/laboratory/histopathology">Histopathology</a>
													</li>
													<li><a class="dropdown-item"
															href="https://www.sprintdiagnostics.in/our-services/laboratory/microbiology">Microbiology</a>
													</li>
													<li><a class="dropdown-item"
															href="https://www.sprintdiagnostics.in/our-services/laboratory/molecular-biology">Molecular
															Biology</a></li>
									
													<li><a class="dropdown-item"
															href="https://www.sprintdiagnostics.in/our-services/laboratory/serology-infectious-disease">Serology
															/ Immunology / Infectious Disease</a></li>
												</ul>
											</li>
											<li class="nav-item"><a
													href="https://www.sprintdiagnostics.in/our-services/sprint-imaging"
													class="nav-link">Sprint Imaging</a></li>
											<li class="nav-item">
												<a href="https://www.sprintdiagnostics.in/our-services/radiology/"
													class="nav-link dropdown-toggle"
													data-toggle="dropdown">Radiology</a>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item"
															href="https://www.sprintdiagnostics.in/our-services/radiology/mri-scan/">MRI
															Scan</a></li>
													<li><a class="dropdown-item"
															href="https://www.sprintdiagnostics.in/our-services/radiology/ct-scan/">CT
															Scan</a></li>
													<li><a class="dropdown-item"
															href="https://www.sprintdiagnostics.in/our-services/radiology/digital-mammography/">Digital
															Mammography</a></li>
													<li><a class="dropdown-item"
															href="https://www.sprintdiagnostics.in/our-services/radiology/digital-x-ray/">Digital
															X-Ray</a></li>
													<li><a class="dropdown-item"
															href="https://www.sprintdiagnostics.in/our-services/radiology/ultrasound/">Ultrasound</a>
													</li>
													<li><a class="dropdown-item"
															href="https://www.sprintdiagnostics.in/our-services/radiology/bone-mineral-density/">BMD
															(Bone Mineral Density)</a></li>
												</ul>
											</li>
											<li class="nav-item">
												<a href="https://www.sprintdiagnostics.in/our-services/cardiology/"
													class="nav-link dropdown-toggle"
													data-toggle="dropdown">Cardiology</a>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item"
															href="https://www.sprintdiagnostics.in/our-services/cardiology/ecg/">ECG</a></li>
													<li><a class="dropdown-item"
															href="https://www.sprintdiagnostics.in/our-services/cardiology/2d-echo-test">2D
															ECHO</a></li>
													<li><a class="dropdown-item"
															href="https://www.sprintdiagnostics.in/our-services/cardiology/tmt-treadmill-test">TMT</a>
													</li>
												</ul>
											</li>
											<li class="nav-item">
												<a href="https://www.sprintdiagnostics.in/our-services/neurology/"
													class="nav-link dropdown-toggle"
													data-toggle="dropdown">Neurology</a>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item"
															href="https://www.sprintdiagnostics.in/our-services/neurology/electroencephalography-eeg">Electroencephalography
															(EEG)</a></li>
													<li><a class="dropdown-item"
															href="https://www.sprintdiagnostics.in/our-services/neurology/electroneuromyography-enmg">Electroneuromyography
															(ENMG)</a></li>
													<li><a class="dropdown-item"
															href="https://www.sprintdiagnostics.in/our-services/neurology/nerve-conduction-study-ncs">NCS</a>
													</li>
												</ul>
											</li>
											<li class="nav-item">
												<a href="https://www.sprintdiagnostics.in/our-services/nuclear-medicine/"
													class="nav-link dropdown-toggle" data-toggle="dropdown">Nuclear
													Medicine</a>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item"
															href="https://www.sprintdiagnostics.in/our-services/nuclear-medicine/pet-ct-scan/">PET
															CT Scan</a></li>
													<li><a class="dropdown-item"
															href="https://www.sprintdiagnostics.in/our-services/nuclear-medicine/gamma-camera/">Gamma
															Camera</a></li>
												</ul>
											</li>
										</ul>
									</li>
										<li class="nav-item">
										<a class="nav-link"
											href="https://www.sprintdiagnostics.in/hyderabad/profile/">Profile</a>
									</li>
										<!-- <li class="nav-item">
											<a href="https://www.sprintdiagnostics.in/diagnostic-centres" class="nav-link dropdown-toggle" data-toggle="dropdown">Our Locations</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/jubilee-hills">Jubilee Hills</a></li>
												<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/gachibowli">Gachibowli</a></li>
												<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/lbnagar">LB Nagar</a></li>
												<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/as-rao-nagar">AS Rao Nagar</a></li>
												<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/kukatpally">JNTU, Kukatpally</a></li>
											</ul>
										</li> -->
										<li class="nav-item">
											<a class="nav-link" href="https://www.sprintdiagnostics.in/symptoms/">Symptoms </a>
										</li>
										<li class="nav-item">
										<a class="nav-link reports" href="#reportmodel" data-toggle="modal">Reports</a>
									</li>
									<li class="nav-item">
										<div class="mt-1 ml-2 mobileclasslogout" style="display:none"
											id="loginOUtButton">
											<a id="exampleSideModal1">
												<!-- class="btn btn-primary" -->
												<!-- Logout -->
												<!-- <i class="fa fa-sign-out" aria-hidden="true"></i> -->
												<img src="https://www.sprintdiagnostics.in/images/user.jpg" style="height: 32px;	width: 35px;" />
											</a>
											<div class="loginPannel" style="display:none">
												<div class="card">
													<div class="card-body">
														<h2 class="MuiTypography-root jss411 MuiTypography-h2"></h2>
														<span style="white-space: nowrap;"><span
																class="MuiTypography-root jss411 MuiTypography-h2">Hi,</span>
															<span id="memberLogin" style="white-space: nowrap;"></span></span>
														<br>
														<div style="text-align: left;">
															<ul style="list-style-type:none;">
																<li class="boder-line-li">
																	<i class="fa fa-caret-right" aria-hidden="true"
																		style="color: ##0076d2;"></i> <a
																		href="https://www.sprintdiagnostics.in/get-lab-reports"
																		style="color: ##0076d2;"
																		class="text-decoration-none">Medical
																		Reports</a>
																</li>

									</ul>
								</div>
							</nav>
						</div>
						<div class="header-search d-none">
							<form action="#" class="form-inline">
								<i class="icon-search"></i>
								<input type="text" placeholder="Search">
								<button type="submit"><i class="icon-search"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--//header-->
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WXTG7WD');</script>
<!-- End Google Tag Manager -->
</head>
<body class="shop-page">
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WXTG7WD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<!-- Popup code -->
	<div id="reportmodel" class="modal fade">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<div class="modal-header">
					<div class="avatar">
						<img src="https://www.sprintdiagnostics.in/images/avatar.png" alt="Avatar">
					</div>
					<img src="https://www.sprintdiagnostics.in/images/wave.png" class="img-fluid wave-img"
						style="width: 52px;">
					<h4 class="modal-title" style="color:#2c53a5 !important">Hello</h4>

					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"
						id="closeMobel">&times;</button>
				</div>
				<p class="text-justify borderLogin">Please enter your <span style="color:#2c53a5 !important">mobile
						number</span> <br>to login</p>
				<div class="modal-body">
					<div id="submitMObileNumber">
						<form id="subMItLOgin" method="post" autocomplete="off">
							<div class="form-group">
								<input type="text" class="form-control inputLine" name="username"
									placeholder="Enter Mobile Number" maxlength="10" id="userNumber" required="required"
									onkeypress="return isNumberKey(event)">
							</div>



							<div class="form-group">
								<button type="submit" class="btn-fullbutton btn btn-primary">Login</button>
							</div>
						</form>
					</div>
					<div id="submitOTPForm" style="display:none">
						<form method="post" id="otpSubmit" autocomplete="off">
							<input type="text" class="form-control inputLine" name="username"
								placeholder="Enter Mobile Number" maxlength="10" id="userNumberSaved"
								required="required" onkeypress="return isNumberKey(event)" readonly>
							<h6 style="color:#2c53a5 !important" class="text-center">Please Enter OTP</h6>
							<div class="digit-group d-flex flex-row mt-2 mb-2" id="otpno" data-autosubmit="false">
								<input type="text" class="form-control digitOne" name="items[]" id="digit-1"
									data-next="digit-2" style="margin-right: 20px" maxlength="1" autofocus="">
								<input type="text" class="form-control" name="items[]" id="digit-2"
									data-previous="digit-1" data-next="digit-3" style="margin-right: 20px"
									maxlength="1">
								<input type="text" class="form-control" name="items[]" id="digit-3"
									data-previous="digit-2" data-next="digit-4" style="margin-right: 20px"
									maxlength="1">
								<input type="text" class="form-control" name="items[]" id="digit-4"
									data-previous="digit-3" data-next="digit-5" style="margin-right: 20px"
									maxlength="1">
								<input type="text" class="form-control" name="items[]" id="digit-5"
									data-previous="digit-4" data-next="digit-6" style="margin-right: 20px"
									maxlength="1">
								<input type="text" class="form-control" name="items[]" id="digit-6"
									data-previous="digit-5" style="margin-right: 20px" maxlength="1">
							</div>
							<button type="submit" class="btn-fullbutton btn btn-primary">Submit</button>
						</form>
					</div>

					<div class="text-right">
						<a href="https://www.sprintdiagnostics.in/sign-up.php">Sign Up</a>
					</div>
				</div>
				<div class="modal-footer">
					<p class="para-text">OTP will be sent to this number by SMS and whatsapp.
						By signing up, I agree to the <a href="#">Privacy Policy</a>,<br> <a href="#">Terms and
							Conditions</a> of Sprint Diagnostics</p>
				</div>
			</div>
		</div>
	</div>
	<!-- pop up  end-->


	<!--//header-->
	<script>

		$(".loginMObileSHow").on("click", function () {
			// alert("Hello")
			$("#collapsedMobile").click();
			$('#myModal').modal('show');
		});




		loginSessionStore = () => {
			// var accesskey = sessionStorage.getItem("accesskey");
			// if (accesskey !== "") {
			// 	$("#loginButton").hide()
			// 	$("#loginOUtButton").show()
			// 	$(".loginMObileSHow").hide();
			// 	$(".logoutMObileSHow").show()
			// } else {
			// 	$("#loginOUtButton").hide()
			// 	$("#loginButton").show()
			// 	$(".loginMObileSHow").show();
			// 	$(".logoutMObileSHow").hide()
			// }
			if (sessionStorage.hasOwnProperty("accesskey")) {
				// alert("Item exists in localstorage");
				// alert(sessionStorage.hasOwnProperty("accesskey"))
				// alert("i have")
				$("#loginButton").hide()
				$("#loginOUtButton").show()
				$(".loginMObileSHow").hide();
				$(".logoutMObileSHow").show()
			} else {
				// alert(sessionStorage.hasOwnProperty("accesskey"))
				// alert("i have Dont")
				$("#loginOUtButton").hide()
				$("#loginButton").show()
				$(".loginMObileSHow").show();
				$(".logoutMObileSHow").hide()
				// $('#myModal').modal('show');
				$("#myModal").click()
			}
		}
		loginSessionStore()
		function isNumberKey(evt) {
			var charCode = (evt.which) ? evt.which : evt.keyCode
			if (charCode > 31 && (charCode < 48 || charCode > 57))
				return false;
			return true;
		}




		$("#logOutForm,.logoutMObileSHow").click(function () {
			if (confirm("Are you sure to logout?")) {
				sessionStorage.setItem("accesskey", "");
				sessionStorage.removeItem("accesskey");
				loginSessionStore()
				location.reload();
			} else {

			}

		})

		$("#subMItLOgin").submit(function (e) {
			e.preventDefault();

			var numberCheck = document.getElementById("userNumber").value;
			document.getElementById("userNumberSaved").value = numberCheck
			var settings = {
				"url": "https://www.sprintdiagnostics.in/api-fetch",
				"method": "POST",
				"timeout": 0,
				"headers": {
					"Content-Type": "application/json"
				},
				"data": JSON.stringify({
					"mobile": numberCheck,
					"category": "loginotp"
				}),
			};

			$.ajax(settings).done(function (response) {

				if (response.error === false) {
					$("#submitOTPForm").show();
					$("#submitMObileNumber").hide();
					$("#subMItLOgin")[0].reset();
					$(".digitOne").focus();
				}
				if (response.message == "Sorry! Please enter registered mobile number.") {
					if (confirm("Your Number is not registered Would You like to Register ?")) {
						window.location.href = 'https://www.sprintdiagnostics.in/sign-up.php';
					}
				}
			});
		})
		$("#otpSubmit").submit(function (e) {
			e.preventDefault();
			var numberCheck = document.getElementById("userNumberSaved").value;
			var StringOtp;
			var values = [];
			$("input[name='items[]']").each(function () {
				values.push($(this).val());
			});
			StringOtp = values.join("")
			var settings = {
				"url": "https://www.sprintdiagnostics.in/api-fetch",
				"method": "POST",
				"timeout": 0,
				"headers": {
					"Content-Type": "application/json"
				},
				"data": JSON.stringify({
					"mobile": numberCheck,
					"otp": StringOtp,
					"category": "validate"
				}),
			};
			$.ajax(settings).done(function (response) {
				if (response.error === false) {
					sessionStorage.setItem("accesskey", response.accesskey);
					$("#submitOTPForm").hide();
					$("#submitMObileNumber").show();
					$("#closeMobel").click();
					loginSessionStore()
					$("#otpSubmit")[0].reset();
					location.reload();
					window.location.href = 'https://www.sprintdiagnostics.in/get-lab-reports.php';
					Acceskeyfunction()
				} else {
					sessionStorage.setItem("accesskey", "");
					/* $("#submitOTPForm").hide(); 
					$("#submitMObileNumber").show();
					*/
					document.getElementById("digit-1").value = "";
					document.getElementById("digit-2").value = "";
					document.getElementById("digit-3").value = "";
					document.getElementById("digit-4").value = "";
					document.getElementById("digit-5").value = "";
					document.getElementById("digit-6").value = "";
					alert("OTP Invalid please enter valid OTP");
				}

			});
		})








		$('.digit-group').find('input').each(function () {
			$(this).attr('maxlength', 1);
			$(this).on('keyup', function (e) {
				var parent = $($(this).parent());

				if (e.keyCode === 8 || e.keyCode === 37) {
					var prev = parent.find('input#' + $(this).data('previous'));

					if (prev.length) {
						$(prev).select();
					}
				} else if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
					var next = parent.find('input#' + $(this).data('next'));

					if (next.length) {
						$(next).select();
					} else {
						if (parent.data('autosubmit')) {
							parent.submit();
						}
					}
				}
			});
		});
		Acceskeyfunction = () => {
			var accesskey = sessionStorage.getItem("accesskey")
			var settings = {
				"url": "https://www.sprintdiagnostics.in/api-fetch",
				"method": "POST",
				"timeout": 0,
				"headers": {
					"Content-Type": "application/json"
				},
				"data": JSON.stringify({
					"accesskey": accesskey,
					"category": "user-check"
				}),
			};

			$.ajax(settings).done(function (response) {
				if (response.error === false) {
					document.getElementById("memberLogin").innerHTML = response.patient_name;
					$(".reports").hide();
					
				} else {
					$('#myModal').modal('show');
					$(".loginPannel").hide();
				}
			});
		}
		Acceskeyfunction()

		$("#exampleSideModal1").on("click", function () {
			$(".loginPannel").toggle();
		})

		// $("body:not(body #exampleSideModal1)").on("click", function () {
		// 	$(".loginPannel").hide()
		// })


		$(".loginPannel,#exampleSideModal1").on("click", function (e) {
			e.stopPropagation();
		})

		$(document).on("click", function () {
			var checkLOgin = $(".loginPannel").attr("style");
			// alert(checkLOgin)
			if (checkLOgin == "") {
				$(".loginPannel").hide()
			}
		})
	</script>