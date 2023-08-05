<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Looking for accurate lab test results? Our state-of-the-art facilities and experienced professionals ensure reliable blood test and Lab results. Call @040 69066767 to book home appointment today for fast and accurate diagnostic testing.">
    <meta name="author" content="Sprint Diagnostics">
    <meta name="format-detection" content="telephone=no">
    <title>Advanced Lab Tests & Blood Tests | Home Sample Collection - Sprint Diagnostics Hyderabad</title> <!-- Stylesheets -->
    <link href="../vendor/slick/slick.css" rel="stylesheet">
    <link href="../vendor/animate/animate.min.css" rel="stylesheet">
    <link href="../icons/style.css" rel="stylesheet">
    <link href="../vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <!--Favicon-->
    <link rel="icon" href="../images/favicon.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- Google Fonts -->
    <!-- Google map -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function openTest(category) {
        var settings = {
            "url": "https://www.sprintdiagnostics.in/apis/index-new-sprint",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json"
            },
            "data": JSON.stringify({
                "category": category
            }),
        };

        $.ajax(settings).done(function (response) {

               for (i=0;i<5;i++)
			   {				 

            document.getElementById('result').innerHTML =  response.data.title;
			   }
        

        }).fail(function (xhr, textStatus, error) {
            // Handle the error if the AJAX request fails
            console.error("Error:", error);
            document.getElementById('result').innerText = "Error fetching price.";
        });
    }
</script>
</head> 



        <?php include '../../side-nav.php';?> <div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs"> <a href="https://sprintdiagnostics.in/">Home</a> <span>Tests</span> </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section banner-->
    <div class="section pb-2">
        <div class="container test-icons">

            <div class="row">
            	  <div class="col-lg-1 col-3"> 
            	  		<a href="#" ><img src="../../images/kidney.webp" onclick="openTest('Kidney')"></a>
                     <p>Kidney</p>
                </div>

                <div class="col-lg-1 col-3"> 
                		<a href="#" onclick="openTest('Stomach')"><img src="../../images/abdomen.webp"></a>
                    <p>Stomach</p>
                </div>
                <div class="col-lg-1 col-3"> 
                	  <a href="#" onclick="openTest('Allergy')"><img src="../../images/allergy-disorders.webp"></a>
                    <p>Allergy</p>
                </div>
                <div class="col-lg-1 col-3"> 
                		<a href="#" onclick="openTest('Blood')"><img src="../../images/blood.webp"></a>
                    <p>Blood</p>
                </div>
               <!-- <div class="col-lg-1 col-3"> 
                		<a href="#"><img src="../../images/bone-marrow.webp"></a>
                    <p>Bone Marrow</p>
                </div>-->

                <div class="col-lg-1 col-3"> 
                		<a href="#" onclick="openTest('Endocrine')"><img src="../../images/endocrine.webp"></a>
                    <p>Endocrine</p>
                </div>
                <div class="col-lg-1 col-3"> 
                		<a href="#" onclick="openTest('Heart')"><img src="../../images/heart.webp"></a>
                    <p>Heart</p>
                </div>
                <div class="col-lg-1 col-3"> 
                		<a href="#" onclick="openTest('Lungs')"><img src="../../images/lungs.webp"></a>
                    <p>Lungs</p>
                </div>
                <div class="col-lg-1 col-3"> 
                		<a href="#" onclick="openTest('Skin')"><img src="../../images/skin.webp"></a>
                    <p>Skin</p>
                </div>
               
                <div class="col-lg-1 col-3"> 
                		<a href="#" onclick="openTest('Breast')"><img src="../../images/breast_disorders.webp"></a>
                    <p>Breast</p>
                </div>
				 <div class="col-lg-1 col-3"> 
                	<a href="#" onclick="openTest('Ear')"><img src="../../images/ear.webp"></a> 
                	<p>Ear</p>
                </div>
				<div class="col-lg-1 col-3"> 
                	<a href="#" onclick="openTest('Gene')"><img src="../../images/gene.webp"></a> 
                	<p>Gene</p>
                </div>
				 <div class="col-lg-1 col-3"> 
                	<a href="#" onclick="openTest('Nerves')"><img src="../../images/nerves.webp"></a> 
                	<p>Nerves</p>
                </div>
            </div> 

            <div class="row">
                
               <!--<div class="col-lg-1 col-3"> 
                	<a href="#"><img src="../../images/stomach.webp"></a> 
                	<p>Stomach</p>
                </div>-->
               
                
                <div class="col-lg-1 col-3"> 
                	<a href="#" onclick="openTest('Muscles')"><img src="../../images/muscles.webp"></a> 
                	<p>Muscles</p>
                </div>
                <div class="col-lg-1 col-3"> 
                	<a href="#" onclick="openTest('STD')"><img src="../../images/std.webp"></a> 
                	<p>STD</p>
                </div>
                <div class="col-lg-1 col-3"> 
                	<a href="#" onclick="openTest('Poisoning')"><img src="../../images/poisoning.webp"></a> 
                	<p>Poisoning</p>
                </div>
                <div class="col-lg-1 col-3"> 
                	<a href="#" onclick="openTest('Vitamins')"><img src="../../images/vitamins.webp"></a> 
                	<p>Vitamins</p>
                </div>
                
               
                <div class="col-lg-1 col-3"> 
                	<a href="#" onclick="openTest('Spleen')"><img src="../../images/spleen.webp"></a> 
                	<p>Spleen</p>
                </div>
				                
				<div class="col-lg-1 col-3"> 
                	<a href="#" onclick="openTest('Cancer')"><img src="../../images/cancer_disorder.webp"></a> 
                	<p>Cancer</p>
                </div>
				<div class="col-lg-1 col-3"> 
                	<a href="#" onclick="openTest('Eyes')"><img src="../../images/eyes.webp"></a> 
                	<p>Eyes</p>
                </div>
				<div class="col-lg-1 col-3"> 
                	<a href="#" onclick="openTest('Liver')"><img src="../../images/liver.webp"></a> 
                	<p>Liver</p>
                </div>
				<div class="col-lg-1 col-3"> 
                	<a href="#" onclick="openTest('metabolism')"><img src="../../images/metabolic-disorders.webp" ></a> 
                	<p style="font-size:10px !important">metabolism </p>
                </div>
				
				
				
				 <div class="col-lg-1 col-3"> 
                		<a href="#" onclick="openTest('Bones')"><img src="../../images/bone-joint.webp"></a>
                    <p>Bones & <br> Joints</p>
                </div>
				 <div class="col-lg-1 col-3"> 
                	<a href="#" onclick="openTest('Head')"><img src="../../images/head and neck.webp"></a> 
                	<p>Head & <br> Neck</p>
                </div>
				<div class="col-lg-1 col-3"> 
                	<a href="#" onclick="openTest('Urinary')"><img src="../../images/urinary-system.webp"></a> 
                	<p>Urinary <br> System</p>
                </div>
            </div>
            <div class="row">
			               
				
                <!-- <div class="col-lg-1 col-3"> 
                	<a href="#"><img src="../../images/colon.webp"></a> 
                	<p>Colon</p>
                </div>-->
               
 
                
				
				 
				<div class="col-lg-1 col-3 "> 
                	<a href="#" onclick="openTest('Pituitary')"><img src="../../images/pituoitary-gland.webp" > </a> 
                	<p>Pituitary <br> Gland</p>
                </div>
				<div class="col-lg-1 col-3"> 
                	<a href="#" onclick="openTest('New Born')"><img src="../../images/new-born.webp"></a> 
                	<p>New Born</p>
                </div>
				<div class="col-lg-1 col-3 "> 
                	<a href="#" onclick="openTest('Uterus')"><img src="../../images/reproductive-system-female.webp" ></a> 
                	<p>Uterus</p>
                </div>
				<div class="col-lg-1 col-3"> 
                	<a href="#" onclick="openTest('Testis')"><img src="../../images/male-reproductive-system.webp" ></a> 
                	<p>Testis</p>
                </div>
				
                <div class="col-lg-1 col-3 "> 
                	<a href="#" onclick="openTest('Autoimmune')"><img src="../../images/auto_immune.webp"  ></a> 
                	<p style="font-size:9px !important">Autoimmune </p>
                </div>
				<div class="col-lg-1 col-3"> 
                	<a href="#" onclick="openTest('Hormones')"><img src="../../images/hormones.webp" ></a> 
                	<p style="font-size:10px !important">Hormones</p>
                </div>
                
                
                
				
                
            </div>
			<div class="row">
			
			</div>
        </div>
    </div>
    <!--//section banner-->
  <div style="">Result: <span id="result"></span>
</div>
    <!--section-->
    <div class="section page-content-first bg-grey">
        <div class="container tests">
            <div class="row" style="padding: 10px;"> 

            <div class="col-md-4 col-lg-4 col-12">
            <div class="bb">
                <div class="row">
                    <div class="col-lg-9 col-9">
                        <a href="https://www.sprintdiagnostics.in/hyderabad/test/beta-galactosidase" >Beta Galactosidase (GM 1 MPS IV B) Test</a>
                </div>
                <div class="col-lg-3 col-3">
                <span><b>₹ 5200</b> </span><br>
                    <a href="https://www.sprintdiagnostics.in/hyderabad/test/beta-galactosidase" ><i class="icon-right-arrow"></i></a>
                        
                </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-lg-4 col-12">
            <div class="bb">
                <div class="row">
                    <div class="col-lg-9 col-9">
                        <a href="https://www.sprintdiagnostics.in/hyderabad/test/fish-for-trisomy-13-21" >FISH Test for Trisomy 13 & 21</a>
                </div>
                <div class="col-lg-3 col-3">
                <span><b>₹ 5500</b> </span><br>
                    <a href="https://www.sprintdiagnostics.in/hyderabad/test/fish-for-trisomy-13-21" ><i class="icon-right-arrow"></i></a>
                        
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-12">
            <div class="bb">
                <div class="row">
                    <div class="col-lg-9 col-9">
                        <a href="https://www.sprintdiagnostics.in/hyderabad/test/fish-for-trisomy-16" >FISH Test for Trisomy 16</a>
                </div>
                <div class="col-lg-3 col-3">
                <span><b>₹ 3900</b> </span><br>
                    <a href="https://www.sprintdiagnostics.in/hyderabad/test/fish-for-trisomy-16" ><i class="icon-right-arrow"></i></a>
                        
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container tests" id="Abdomen">
    <div class="row" style="padding: 10px;"> 
        <div class="col-md-4 col-lg-4 col-12">
            <div class="bb">
                <div class="row">
                    <div class="col-lg-9 col-9">
                        <a href="https://www.sprintdiagnostics.in/hyderabad/test/beta-galactosidase" >Beta Galactosidase (GM 1 MPS IV B) Test</a>
                </div>
                <div class="col-lg-3 col-3">
                <span><b>₹ 5200</b> </span><br>
                    <a href="https://www.sprintdiagnostics.in/hyderabad/test/beta-galactosidase" ><i class="icon-right-arrow"></i></a>
                        
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-12">
            <div class="bb">
                <div class="row">
                    <div class="col-lg-9 col-9">
                        <a href="https://www.sprintdiagnostics.in/hyderabad/test/fish-for-trisomy-13-21" >FISH Test for Trisomy 13 & 21</a>
                </div>
                <div class="col-lg-3 col-3">
                <span><b>₹ 5500</b> </span><br>
                    <a href="https://www.sprintdiagnostics.in/hyderabad/test/fish-for-trisomy-13-21" ><i class="icon-right-arrow"></i></a>
                        
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-12">
            <div class="bb">
                <div class="row">
                    <div class="col-lg-9 col-9">
                        <a href="https://www.sprintdiagnostics.in/hyderabad/test/fish-for-trisomy-16" >FISH Test for Trisomy 16</a>
                </div>
                <div class="col-lg-3 col-3">
                <span><b>₹ 3900</b> </span><br>
                    <a href="https://www.sprintdiagnostics.in/hyderabad/test/fish-for-trisomy-16" ><i class="icon-right-arrow"></i></a>
                        
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-12">
            <div class="bb">
                <div class="row">
                    <div class="col-lg-9 col-9">
                        <a href="https://www.sprintdiagnostics.in/hyderabad/test/fish-for-trisomy-16" >FISH Test for Trisomy 16</a>
                </div>
                <div class="col-lg-3 col-3">
                <span><b>₹ 3900</b> </span><br>
                    <a href="https://www.sprintdiagnostics.in/hyderabad/test/fish-for-trisomy-16" ><i class="icon-right-arrow"></i></a>
                        
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-12">
            <div class="bb">
                <div class="row">
                    <div class="col-lg-9 col-9">
                        <a href="https://www.sprintdiagnostics.in/hyderabad/test/fish-for-trisomy-16" >FISH Test for Trisomy 16</a>
                </div>
                <div class="col-lg-3 col-3">
                <span><b>₹ 3900</b> </span><br>
                    <a href="https://www.sprintdiagnostics.in/hyderabad/test/fish-for-trisomy-16" ><i class="icon-right-arrow"></i></a>
                        
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-12">
            <div class="bb">
                <div class="row">
                    <div class="col-lg-9 col-9">
                        <a href="https://www.sprintdiagnostics.in/hyderabad/test/fish-for-trisomy-16" >FISH Test for Trisomy 16</a>
                </div>
                <div class="col-lg-3 col-3">
                <span><b>₹ 3900</b> </span><br>
                    <a href="https://www.sprintdiagnostics.in/hyderabad/test/fish-for-trisomy-16" ><i class="icon-right-arrow"></i></a>
                        
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


    <!--//section--> <?php include '../../footer.php';?> </body>

</html>