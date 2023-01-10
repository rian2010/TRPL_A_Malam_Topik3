<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PELA</title>
	<link rel="stylesheet" type="text/css" href="about.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="https://www.facebook.com/polibatamofficial/"><i class="fab fa-facebook"></i></a></li>
				<li><a href="https://www.youtube.com/channel/UCxKsDnDYt30bMdXyakD_ZCw"><i class="fab fa-youtube"></i></a></li>
				<li><a href="https://twitter.com/polibatam_"><i class="fab fa-twitter"></i></a></li>
				<li><a href="https://www.instagram.com/polibatamofficial/"><i class="fab fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="index2.php">PELA</a></h1>
			<ul>
				<li><a href="index2.php">HOME</a></li>
				<li><a href="dashboardadmin.php">DASHBOARD</a></li>
                <li class="active"><a href="about.php">ABOUT</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<li><a href="login.php">LOGOUT</a></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Home / About</p>
		</div>
	</section>

	<!-- about -->
	<section class="about">

		<div class="container">
			
			<h3>ABOUT</h3>
			<p> <strong> PELA is a web-based application that can be used by students, lecturers or laboratory of Informatics Department at Politeknik Negeri Batam to borrow practical tools. </strong> </p>
			<p> <strong> In its use, students and lecturers are expected to find it easier and more effective in the process of borrowing practicum tools. PELA was designed and created by students of TRPL Night-1A Group 3.  </strong> </p>
			<br><br>
			<h3>VISION</h3>
			<p> <strong> As a campus community, we are familiar with laboratories, often we also need practicum tools from the laboratory to use. However, in the loan process, sometimes we can be hindered by the time and place to make a loan. PELA aims to make it easier for students, lecturers or laboratory assistants in this loan process. With PELA, we hope that users can find it easier to be effective in the process of borrowing practicum equipment. </strong> </p>
			<h3>MISSION</h3>
			<p> <strong> In realizing an effective system, PELA will strive to provide correct and appropriate data so that the list of tool availability or loan info can be accurate. </strong> </p>
		</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; Polibatam TRPL Malam-1A 2022. | Created by <text style="color:#34b7eb;"> Kelompok 3 </style> </small>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>