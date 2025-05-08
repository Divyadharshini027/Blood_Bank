<?php
error_reporting(0);
include "includes/config.php";
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Life's Liquid Gold | Blood Donor List </title>
	<!-- Meta tag Keywords -->

	<script>
		addEventListener("load", function() {
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
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<?php include "includes/header.php"; ?>

	<!-- banner 2 -->
	<div class="inner-banner-w3ls">
		<div class="container">

		</div>
		<!-- //banner 2 -->
	</div>
	<!-- page details -->
	<div class="breadcrumb-agile">
		<div aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.php">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Blood Donar List</li>
			</ol>
		</div>
	</div>
	<!-- //page details -->

	<!-- contact -->
	<div class="agileits-contact py-5">
		<div class="py-xl-5 py-lg-3">

			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Blood Donor List</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<p style="font-size:20px;color:#000" class="mt-2">Heroes of Humanity: The Blood Donors' Chronicle....</p>
			</div>
			<div class="d-flex">

				<div class="row package-grids mt-5" style="padding: 30px;">
					<?php
					$status = 1;

					$sql = "SELECT * from tblblooddonars where status=:status";
					$query = $dbh->prepare($sql);
					$query->bindParam(":status", $status, PDO::PARAM_STR);
					$query->execute();
					$results = $query->fetchAll(PDO::FETCH_OBJ);
					$cnt = 1;
					if ($query->rowCount() > 0) {
						foreach ($results as $result) { ?>
							<div class="col-md-3">
								<div class="pricing">
									<div style="background-color:#ebebeb;border-radius:10px 10px 0px 0px;">
										<div class="price-top" style="padding:20px">
											<img src="images/user1.png" alt="Blood Donot" class="img-fluid" />
											<!-- <?php echo htmlentities($result->FullName); ?> -->
										</div>
									</div>
									<div class="price-bottom ">
										<table class="table table-bordered">

											<tbody>
												<tr>
													<th>Name</th>
													<td style="font-style:italic"><?php echo htmlentities($result->FullName); ?></td>
												</tr>
												<tr>
													<th>Gender</th>
													<td><?php echo htmlentities($result->Gender); ?></td>
												</tr>
												<tr>
													<th>Blood Group</th>
													<td style="color:#A00000;font-weight:bold"><?php echo htmlentities($result->BloodGroup); ?></td>
												</tr>
												<tr>
													<th>Mobile No.</th>
													<td><?php echo htmlentities($result->MobileNumber); ?></td>
												</tr>

												<tr>
													<th>Email ID</th>
													<td><?php echo htmlentities($result->EmailId); ?></td>
												</tr>

												<tr>
													<th>Age</th>
													<td><?php echo htmlentities($result->Age); ?></td>
												</tr>

												<tr>
													<th>Address</th>
													<td><?php echo htmlentities($result->Address); ?></td>
												</tr>

												<tr>
													<th>Message</th>
													<td><?php echo htmlentities($result->Message); ?></td>
												</tr>

											</tbody>
										</table>
										<!-- <a class="btn btn-primary" style="color:#fff"  href="contact-blood.php?cid=<?php echo $result->id; ?>">Request</a> -->

										<!-- Dhanabal -->
										<div class="text-center">
											<Button style="background-image: linear-gradient(to right,#A00000, #f75158);padding:10px;border:none" class="btn btn-primary">
												<a style="color:#fff" href="contact-blood.php?cid=<?php echo $result->id; ?>">Request</a>
											</Button>
										</div>
									</div>
								</div>
							</div>
							<br>
					<?php }
					}
					?>


				</div>
			</div>
		</div>
	</div>
	<!-- //contact -->




	<?php include "includes/footer.php"; ?>

	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- banner slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function() {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function() {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function() {
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
	<!-- //Js files -->
	<script>
		getLocation();
		showPosition();
		function getLocation() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition);
			} else {
				alert("Geolocation is not supported by this browser.");
			}
		}

		function showPosition(position) {
			var latitude = position.coords.latitude;
			var longitude = position.coords.longitude;
			// Send latitude and longitude to PHP script
			var xhr = new XMLHttpRequest();
			xhr.open("GET", "process_location.php?lat=" + latitude + "&long=" + longitude, true);
			xhr.send();
		}
	</script>

</body>

</html>