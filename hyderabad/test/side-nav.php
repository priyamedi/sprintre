
<?php 
include 'db.php' ;
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> <!-- Stylesheets -->
<link href="https://sprintdiagnostics.in/vendor/slick/slick.css" rel="stylesheet">
<link href="https://sprintdiagnostics.in/icons/style.css" rel="stylesheet">
<link href="https://sprintdiagnostics.in/css/style.css" rel="stylesheet">
<!--Favicon-->
<link rel="icon" href="https://sprintdiagnostics.in/images/favicon.png" type="image/x-icon"> <!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> <!-- Google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiFdr5Z0WRIXKUOqoRRvzRQ5SkzhkUVjk"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://sprintdiagnostics.in/vendor/animate/animate.min.css" rel="stylesheet">
<link href="https://sprintdiagnostics.in/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
<link href="https://sprintdiagnostics.in/css/style2.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/a708244d82.js" crossorigin="anonymous"></script>
<link rel="canonical" href="https://www.sprintdiagnostics.in<?php echo $_SERVER['REQUEST_URI'];?>" />
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
.symptoms
{
 background-color: #e9f8ff;
 padding: 5px 15px;
 border-radius:10px;
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

/* login form */
</style>
<!--header-->

<div class="modal fade" id="myModal">
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
</div>
<script type="text/javascript">
    $(window).on('load',function(){
    var delayMs = 5000; // delay in milliseconds
    
    setTimeout(function(){
        $('#myModal').modal('show');
    }, delayMs);
});
</script>

	<header class="header">
		<div class="header-quickLinks js-header-quickLinks d-lg-none">
			<div class="quickLinks-top js-quickLinks-top"></div>
			<div class="js-quickLinks-wrap-m">
			</div>
		</div>
		<div class="acme-news-ticker d-none">
		    <div class="acme-news-ticker-label">Offers: </div>
		    <div class="acme-news-ticker-box">
		        <ul class="my-news-ticker">
		            <li><a href="https://www.sprintdiagnostics.in/offers/preventive-health-checkup-package"><i class="fa fa-hand-o-right"></i> 1st Anniversary Offer : Preventive Health Checkup Packages for Kids, Women and Men</a> |</li>
		            <li><a href="https://www.sprintdiagnostics.in/book-appointment"><i class="fa fa-hand-o-right"></i> Home sample collection is available from Sprint Diagnostics</a></li>
		        </ul>

		    </div>
		    <div class="acme-news-ticker-controls acme-news-ticker-horizontal-controls">
		        <button class="acme-news-ticker-pause"></button>
		    </div>
		</div>
		<script type="text/javascript">
		    jQuery(document).ready(function ($) {
		        $('.my-news-ticker').AcmeTicker({
		            type:'marquee',/*horizontal/horizontal/Marquee/type*/
		            direction: 'left',/*up/down/left/right*/
		            speed: 0.05,/*true/false/number*/ /*For vertical/horizontal 600*//*For marquee 0.05*//*For typewriter 50*/
		            controls: {
		                toggle: $('.acme-news-ticker-pause'),/*Can be used for horizontal/horizontal/typewriter*//*not work for marquee*/
		            }
		        });
		    })

		</script>

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
							<a href="https://www.facebook.com/sprintdiagnostics/" class="hovicon"><i class="fab fa-facebook" style="padding:5px;"></i></a>
							<a href="https://twitter.com/sprinthyd?s=11" class="hovicon"><i class="fab fa-twitter" style="padding:5px;"></i></a>
							<a href="https://instagram.com/sprintdiagnostics/" class="hovicon"><i class="fab fa-instagram" style="padding:5px;"></i></a>
							<a href="https://www.youtube.com/channel/UCTItKGIgHA7kj6jNN6EPuBg" target="blank" class="hovicon"><i class="fab fa-youtube" style="padding:5px;"></i></a>
							<a href="https://in.linkedin.com/company/sprint-diagnostics-official" target="blank" class="hovicon"><i class="fab fa-linkedin" style="padding:5px;"></i></a>
						</span>
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
											<a class="nav-link" href="https://www.sprintdiagnostics.in/hyderabad/test">Lab Tests</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="https://www.sprintdiagnostics.in/offers">Offers</a>
										</li> 
										<li class="nav-item">
											<a class="nav-link" href="https://www.sprintdiagnostics.in/health-checkups">Health Checkups</a>
										</li>
										<li class="nav-item">
											<a href="https://www.sprintdiagnostics.in/our-services" class="nav-link dropdown-toggle" data-toggle="dropdown">Our Services</a>
											<ul class="dropdown-menu">
											<li class="nav-item">
														<a href="https://www.sprintdiagnostics.in/laboratory" class="nav-link dropdown-toggle" data-toggle="dropdown">Laboratory</a>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/clinical-biochemistry">Clinical Biochemistry</a></li>
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/clinical-pathology">Clinical Pathology</a></li>
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/cytopathology">Cytopathology</a></li>
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/genomics-cytogenetics">Genomics and Cytogenetics</a></li>
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/hematology">Hematology</a></li>
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/histopathology">Histopathology</a></li>
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/microbiology">Microbiology</a></li>
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/molecular-biology">Molecular Biology</a></li>
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/sample-collection">Sample collection / accession</a></li>
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/serology-infectious-disease">Serology / Immunology / Infectious Disease</a></li>
														</ul>
													</li>		
													<li class="nav-item"><a href="https://www.sprintdiagnostics.in/sprint-imaging" class="nav-link">Sprint Imaging</a></li>											
													<li class="nav-item">
														<a href="https://www.sprintdiagnostics.in/radiology" class="nav-link dropdown-toggle" data-toggle="dropdown">Radiology</a>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/our-services/radiology/mri-scan/">MRI Scan</a></li>
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/our-services/radiology/ct-scan/">CT Scan</a></li>
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/digital-mammography">Digital Mammography</a></li>
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/digital-xray">Digital X-Ray</a></li>
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/ultrasound">Ultrasound</a></li>
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/bone-mineral-density">BMD (Bone Mineral Density)</a></li>
														</ul>
													</li>												
													<li class="nav-item">
														<a href="https://www.sprintdiagnostics.in/cardiology" class="nav-link dropdown-toggle" data-toggle="dropdown">Cardiology</a>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/ecg">ECG</a></li>
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/2d-echo-test">2D ECHO</a></li>
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/tmt-treadmill-test">TMT</a></li>
														</ul>
													</li>										
													<li class="nav-item">
														<a href="https://www.sprintdiagnostics.in/neurology" class="nav-link dropdown-toggle" data-toggle="dropdown">Neurology</a>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/electroencephalography-eeg">Electroencephalography (EEG)</a></li>
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/electroneuromyography-enmg">Electroneuromyography (ENMG)</a></li>
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/nerve-conduction-study-ncs">NCS</a></li>
														</ul>
													</li>					
													<li class="nav-item">
														<a href="https://www.sprintdiagnostics.in/nuclear-medicine" class="nav-link dropdown-toggle" data-toggle="dropdown">Nuclear Medicine</a>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/our-services/nuclear-medicine/pet-ct-scan/">PET CT Scan</a></li>
															<li><a class="dropdown-item" href="https://www.sprintdiagnostics.in/gamma-camera">Gamma Camera</a></li>
														</ul>
													</li>
											</ul>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="https://www.sprintdiagnostics.in/clinical-team">Clinical Team</a>
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
											<a class="nav-link" href="https://www.sprintdiagnostics.in/contact">Contact us</a>
										</li>
										<li class="nav-item">
											<a class="nav-link"  href="#reportmodel" data-toggle="modal">Reports</a>
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
					<img src="https://www.sprintdiagnostics.in/images/wave.png" class="img-fluid wave-img" style="width: 52px;">
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
		
	
	
	