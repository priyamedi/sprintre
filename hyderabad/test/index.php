<!DOCTYPE html>
<html lang="en">
<head>
  <title>Advanced Lab Tests & Blood Tests | Home Sample Collection - Sprint Diagnostics Hyderabad</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Looking for accurate lab test results? Our state-of-the-art facilities and experienced professionals ensure reliable blood test and Lab results. Call @040 69066767 to book home appointment today for fast and accurate diagnostic testing.">
    <meta name="author" content="Sprint Diagnostics">
    <meta name="format-detection" content="telephone=no">
   <!-- Stylesheets -->
    <link href="../vendor/slick/slick.css" rel="stylesheet">
    <link href="../vendor/animate/animate.min.css" rel="stylesheet">
    <link href="../icons/style.css" rel="stylesheet">
    <link href="../vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <!--Favicon-->
    <link rel="icon" href="../images/favicon.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- Google Fonts -->
    
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>
   function openTest(category) {
        var settings = {
            "url": "https://www.sprintdiagnostics.in/dashboard/apis/index-new-sprint",
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
            var resultContainer = document.getElementById('result');

            // Clear previous results
            resultContainer.innerHTML = '';

            // Loop through each row and create a separate div for each
            response.data.forEach(function (res) {
                var div = document.createElement('div');
				div.classList.add("col-md-4", "col-lg-4", "col-12");
                div.innerHTML = `
                  <div class="bb">  
                <div class="row">
                    <div class="col-lg-9 col-9"><a href="${res.url}" target="new">${res.titles}</a></div>
                    <div class="col-lg-3 col-3"><b>${res.price}</div>
                </div>              
                `;
                resultContainer.appendChild(div);
            });
        });
    }
</script>

</head> 

<body>
    <?php include '../../side-nav.php';?>

<div class="page-content">
<!--section-->
<div class="section mt-0">
  <div class="breadcrumbs-wrap">
    <div class="container">
      <div class="breadcrumbs"><a href="https://sprintdiagnostics.in/">Home</a><span>Tests</span></div>
    </div>
  </div>
</div>
<!--//section-->

<!--section banner-->
  <div class="section pb-2">
     <div class="container test-icons">

     <div class="row">
        <div class="col-lg-1 col-3"> 
        <a href="#result" ><img src="../../images/kidney.webp" onclick="openTest('kidney')"></a>
        <p>Kidney</p>
        </div>
        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/abdomen.webp" onclick="openTest('stomach')"></a>
        <p>Stomach</p>
        </div>
        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/allergy-disorders.webp" onclick="openTest('allergy')"></a>
        <p>Allergy</p>
        </div>
        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/blood.webp" onclick="openTest('blood')"></a>
        <p>Blood</p>
        </div>
        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/endocrine.webp" onclick="openTest('endocrine')"></a>
        <p>Endocrine</p>
        </div>

        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/heart.webp"  onclick="openTest('heart')"></a>
        <p>Heart</p>
        </div>

        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/lungs.webp" onclick="openTest('lungs')"></a>
        <p>Lungs</p>
        </div>

        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/skin.webp" onclick="openTest('skin')"></a>
        <p>Skin</p>
        </div>

        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/breast_disorders.webp" onclick="openTest('breast')"></a>
        <p>Breast</p>
        </div>
        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/ear.webp" onclick="openTest('ear')"></a> 
        <p>Ear</p>
        </div>
        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/gene.webp" onclick="openTest('gene')"></a> 
        <p>Gene</p>
        </div>
        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/nerves.webp" onclick="openTest('nerves')"></a> 
        <p>Nerves</p>
        </div>
</div> 

<div class="row">
        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/muscles.webp" onclick="openTest('muscles')"></a> 
        <p>Muscles</p>
        </div>
        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/std.webp" onclick="openTest('std')"></a> 
        <p>STD</p>
        </div>
        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/poisoning.webp" onclick="openTest('poisoning')"></a> 
        <p>Poisoning</p>
        </div>
        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/vitamins.webp" onclick="openTest('vitamin')"></a> 
        <p>Vitamins</p>
        </div>
        <!-- <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/spleen.webp" onclick="openTest('spleen')"></a> 
        <p>Spleen</p>
        </div> -->
        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/cancer_disorder.webp" onclick="openTest('cancer')"></a> 
        <p>Cancer</p>
        </div>
        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/eyes.webp" onclick="openTest('eyes')"></a> 
        <p>Eyes</p>
        </div>
        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/liver.webp" onclick="openTest('liver')"></a> 
        <p>Liver</p>
        </div>
        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/metabolic-disorders.webp" onclick="openTest('metabolism')"></a> 
        <p style="font-size:10px !important">metabolism </p>
        </div>
        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/bone-joint.webp" onclick="openTest('bones-joints')"></a>
        <p>Bones & <br> Joints</p>
        </div>
        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/head and neck.webp" onclick="openTest('head-neck')"></a> 
        <p>Head & <br> Neck</p>
        </div>
        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/urinary-system.webp" onclick="openTest('urinary-system')"></a> 
        <p>Urinary <br> System</p>
        </div>
</div>

<div class="row">	 
        <div class="col-lg-1 col-3 "> 
        <a href="#result"><img src="../../images/pituoitary-gland.webp" onclick="openTest('pituitary-gland')"></a> 
        <p>Pituitary <br> Gland</p>
        </div>
        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/new-born.webp" onclick="openTest('new-born')"></a> 
        <p>New Born</p>
        </div>
        <div class="col-lg-1 col-3 "> 
        <a href="#result"><img src="../../images/reproductive-system-female.webp" onclick="openTest('uterus')"></a> 
        <p>Uterus</p>
        </div>
        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/male-reproductive-system.webp" onclick="openTest('testis')"></a> 
        <p>Testis</p>
        </div>
        <div class="col-lg-1 col-3 "> 
        <a href="#result"><img src="../../images/auto_immune.webp" onclick="openTest('autoimmune')"></a> 
        <p style="font-size:9px !important">Autoimmune </p>
        </div>
        <div class="col-lg-1 col-3"> 
        <a href="#result"><img src="../../images/hormones.webp" onclick="openTest('hormones')"></a> 
        <p style="font-size:10px !important">Hormones</p>
        </div>
</div>

<div class="row" id="result"></div>


     </div>
  </div>
</div>




 <?php include '../../footer.php';?> 
</body>

</html>