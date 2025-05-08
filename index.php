
<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Life's Liquid Gold | Home Page</title>
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<?php include('includes/header.php');?>

	<!-- banner -->
	<div class="slider">
		<div class="callbacks_container">
			<ul class="rslides callbacks callbacks1" id="slider4">
				<li>
					<div class="banner-top1">
						<div class="banner-info_agile_w3ls">
							<div class="container">
								<h3>Blood bank services that you
									<span>can trust</span>
								</h3>
								
							</div>
						</div>
					</div>
				</li>
				<!-- <li>
					<div class="banner-top2">
						<div class="banner-info_agile_w3ls">
							<div class="container">
								<h3>One Blood Donation Save three Lives
									<span>every day</span>
								</h3>
						
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top3">
						<div class="banner-info_agile_w3ls">
							<div class="container">
								<h3>"Sometimes money cannot save life
									<span>but donated blood can</span>
								</h3>
				
							</div>
						</div>
					</div>
				</li> -->
			</ul>
		</div>
	</div>
	<!-- //banner -->
	<div class="clearfix"></div>

	<!-- banner bottom -->
	<div class="banner-bottom py-5">
		<div class="d-flex container py-xl-3 py-lg-3">
			<div class="banner-left-bottom-w3ls offset-lg-2 offset-md-1">
				<h3 class="text-white my-3">High professional doctors</h3>
				<p>all specialists have extensive practical experience and regularly training courses in educational centers of the
					world</p>
			</div>
			<div class="button">
				<a href="about.php" class="w3ls-button-agile">Read More
					<i class="fas fa-hand-point-right"></i>
				</a>
			</div>
		</div>
	</div>
	<!-- //banner bottom -->
	<!-- blog -->
	<div class="blog-w3ls py-5" id="blog">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title text-white">Donars List</h3>
				<span>
					<i class="fas fa-user-md text-white"></i>
				</span>
			</div>
			<div class="row package-grids mt-5">
				<?php 
$status=1;
$sql = "SELECT * from tblblooddonars where status=:status order by rand() limit 6";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
				<div class="col-md-3 pricing" style="margin-top:2%;">
					<div style="background-color:#ebebeb;border-radius:10px;">
					<div class="price-top" style="padding:20px">
					
							<img src="images/user1.png" alt="" class="img-fluid" />
					
						<!-- <h3><?php echo htmlentities($result->FullName);?>
						</h3> -->
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark mb-3"><b>Donar Name:</b> <span style="color:#A00000;font-weight:bold;font-style:italic"><?php echo htmlentities($result->FullName);?></span></h4>
						<h4 class="text-dark mb-3"><b>Gender:</b> <?php echo htmlentities($result->Gender);?></h4>
						<h5 class="text-dark mb-3"><b>Blood Group:</b> <?php echo htmlentities($result->BloodGroup);?></h5>
						<!-- <p class="card-text"><b>Blood Group :</b> <?php echo htmlentities($result->BloodGroup);?></p> -->
						
						<!-- Dhanabal -->
						<div class="text-center">
							<Button style="background-image: linear-gradient(to right,#A00000, #f75158);padding:10px;border:none" class="btn btn-primary">
								<a style="color:#fff" href="contact-blood.php?cid=<?php echo $result->id;?>">Request</a>
							</Button>
						</div>
						
					</div>
					</div>
				</div><?php }} ?>
			
			
			</div>
		</div>
	</div>
	<!-- //blog -->

	<!-- treatments -->
	<div class="screen-w3ls py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">BLOOD GROUPS</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<p style="color:#000;font-size:20px" class="mt-2">It is crucial to recognize that the blood group of any human being will primarily fall into one of the following groups..</p>
			</div>
			<div class="row">
            <div class="col-lg-2">
               
                <ul style="list-style-type:square">
                
                
<li style="padding:5px" class="homePageli">A Positive</li>
<li style="padding:5px" class="homePageli">A Negative</li>
<li style="padding:5px" class="homePageli">B Positive</li>
<li style="padding:5px" class="homePageli">B Negative</li>
<li style="padding:5px" class="homePageli">O Positive</li>
<li style="padding:5px" class="homePageli">O Negative</li>
<li style="padding:5px" class="homePageli">AB Positive</li>
<li style="padding:5px" class="homePageli">AB Negative.</li>
                </ul>
               
            </div>
			<div class="col-lg-5">
			<!-- <p style="color:#000">"Ensuring a successful blood donation and promoting overall well-being are linked to maintaining a healthy diet. Discover the suggested food options that can enhance your donation experience while contributing to your general sense of well-being!"</p> -->
			<p style="color:#000">
"Incorporating nutrient-rich foods such as leafy greens, lean proteins, and whole grains into your diet before a blood donation not only supports a successful donation process but also positively impacts your energy levels and overall health. Explore the recommended dietary choices that not only enhance your donation experience but also contribute to a holistic sense of well-being."</p>
		
		</div>
            <div class="col-lg-5">
                <img class="img-fluid rounded" src="images/blood-donor (1).jpg" alt="">
            </div>
        </div>



		<div class="screen-w3ls py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">UNIVERSAL DONORS AND RECIPIENTS</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<p style="color:#000;font-size:20px" class="mt-2">Universal donors and recipients play a crucial role in blood transfusions. The most prevalent blood type, O, and the subsequent type A are significant in this regard. Type O individuals are often referred to as "universal donors" as their blood is compatible with any blood type during transfusions. Conversely, those with type AB blood are termed "universal recipients" as they can receive blood from donors of any blood type.</p>
			</div>
			<div class="row">
            
		
        </div>

        <!-- <div class="text-center mt-5">
          
            <h4 style="padding-top: 30px;">UNIVERSAL DONORS AND RECIPIENTS</h4>
                <p class="mt-2">
				"Universal donors and recipients play a crucial role in blood transfusions. The most prevalent blood type, O, and the subsequent type A are significant in this regard. Type O individuals are often referred to as "universal donors" as their blood is compatible with any blood type during transfusions. Conversely, those with type AB blood are termed "universal recipients" as they can receive blood from donors of any blood type."</p>
           <div> -->
		   <a class="btn btn-lg btn-secondary btn-block login-button ml-lg-5 mt-lg-0 mt-4 mb-lg-0 mb-3" data-toggle="modal" data-target="#exampleModalCenter1" href="#" data-toggle="modal" data-target="#exampleModalCenter1"> Become a Donar</a>
</div>
           
        </div>

		<div class="col-md-4" style="padding-top: 30px;"> 
    
	
</div>
      
		</div>
	</div>
	<!-- //treatments -->

	<!-- footer -->
	<?php include('includes/footer.php');?>


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- banner slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //banner slider -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/medic.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>