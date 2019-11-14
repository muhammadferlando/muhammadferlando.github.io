<?php
include "conn.php";
global $conn; 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>WEBPEM-Materi</title>
	<meta charset="UTF-8">
	<!-- <meta name="description" content="WebUni Education Template">
	<meta name="keywords" content="webuni, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<!-- Favicon -->   
	<!-- <link href="img/favicon.ico" rel="shortcut icon"/> -->

	<!-- Google Fonts -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet"> -->

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>

	<style>
		h1{
			color: white;
		}		
	</style>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="site-logo">
						<!-- <img src="img/niomic.png" alt=""> -->
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
					<a href="index.php" class="site-btn header-btn btn-fade">Logout</a>
					<nav class="main-menu">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="halaman.php">Tutorial</a></li>
							<center>
							<br>
							<br>
						<h1> Materi </h1>
					</center>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	
	<div class="page-info-section set-bg" data-setbg="img/codi.jpg">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="index.php">Home</a>
				<span>Materi</span>
			</div>
		</div>
	</div>


	<!-- search section -->
	<!-- <section class="search-section ss-other-page">
		<div class="container">
			<div class="search-warp">
				<div class="section-title text-white">
					<h2><span>Search your course</span></h2>
				</div>
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						search form
						<form class="course-search-form">
							<input type="text" placeholder="Course">
							<input type="text" class="last-m" placeholder="Category">
							<button class="site-btn btn-dark">Search Couse</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- search section end -->


	<!-- course section -->
	<!-- <section class="course-section spad pb-0">
		<div class="course-warp">
			<ul class="course-filter controls">
				<li class="control active" data-filter="all">All</li>
				<li class="control" data-filter=".finance">Finance</li>
				<li class="control" data-filter=".design">Design</li>
				<li class="control" data-filter=".web">Web Development</li>
				<li class="control" data-filter=".photo">Photography</li>
			</ul>                                       
			<div class="row course-items-area"> -->

			<div class="featured-courses">
				<div class="featured-course course-item">
					<div class="course-thumb set-bg" data-setbg="img/d1.png">
						<!-- <div class="price">Price: $15</div> -->
					</div>
					<div class="row">
						<div class="col-lg-6 offset-lg-6 pl-0">
							<div class="course-info">
								<div class="course-text">
									<div class="fet-note">About HTML5</div>
									<h5>Apa yang dimaksud HTML5</h5>
									<p>HTML5 adalah kepanjangan dari HyperText Markup Language versi 5, merupakan HTML baru penerus dari HTML 4, XHTML1, dan DOM Level 2 HTML. HTML5 merupakan pengembangan bahasa HTML yang lebih baik, lebih berarti atau semantik (semantic meaning) yang sebelumnya adalah bahasa markup sederhana menjadi sebuah flatform canggih, penuh fitur dan kaya akan antarmuka pemrograman aplikasi yang disebut API (Application Programming Interface).</p>

									<!-- <div class="students">120 Students</div> -->
								</div>
								<!-- <div class="course-author">
									<div class="ca-pic set-bg" data-setbg="img/d1"></div>
									<p>William Parker, <span>Developer</span></p>
								</div> -->
							</div>
						</div>
					</div>
				</div>

				<div class="featured-course course-item">
					<div class="course-thumb set-bg" data-setbg="img/d3.png">
					</div>
					<div class="row">
						<div class="col-lg-6 pr-0">
							<div class="course-info">
								<div class="course-text">
									<div class="fet-note">About CSS3</div>
									<h5>Apa yang dimaksud CSS3</h5>
									<p>CSS3 adalah Cascading Style Sheet versi ke 3, yaitu pengatur dan pengendali tampilan sebuah halaman blog/ web.<br>
                                    CSS3 melakukan penataan terhadap komponen HTML maupun XHTML pada halaman web sehingga menghasilkan tampilan yang ramah dimata atau retina friendly.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

			<div class="featured-courses">
				<div class="featured-course course-item">
					<div class="course-thumb set-bg" data-setbg="img/d11.png">
						<!-- <div class="price">Price: $15</div> -->
					</div>
					<div class="row">
						<div class="col-lg-6 offset-lg-6 pl-0">
							<div class="course-info">
								<div class="course-text">
									<div class="fet-note">About PHP</div>
									<h5>Apa yang dimaksud PHP</h5>
									<p>PHP adalah bahasa pemrograman script server-side yang didesain untuk pengembangan web.<br>PHP disebut bahasa pemrograman server side karena PHP diproses pada komputer server. Hal ini berbeda dibandingkan dengan bahasa pemrograman client-side seperti JavaScript yang diproses pada web browser (client).</p>

								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="featured-course course-item">
					<div class="course-thumb set-bg" data-setbg="img/d7.png">
						<!-- <div class="price">Price: $15</div> -->
					</div>
					<div class="row">
						<div class="col-lg-6 pr-0">
							<div class="course-info">
								<div class="course-text">
									<div class="fet-note">About DATABASE</div>
									<h5>Apa yang dimaksud DATABASE</h5>
									<p>Basis data(DATABASE) adalah kumpulan data yang disimpan secara sistematis di dalam komputer yang dapat diolah atau dimanipulasi menggunakan perangkat lunak (program aplikasi) untuk menghasilkan informasi. Pendefinisian basis data meliputi spesifikasi berupa tipe data, struktur data dan juga batasan-batasan pada data yang kemudian disimpan.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

			<div class="featured-courses">
				<div class="featured-course course-item">
					<div class="course-thumb set-bg" data-setbg="img/d16.png">
						<!-- <div class="price">Price: $15</div> -->
					</div>
					<div class="row">
						<div class="col-lg-6 offset-lg-6 pl-0">
							<div class="course-info">
								<div class="course-text">
									<div class="fet-note">About Boostrap</div>
									<h5>Apa yang dimaksud Boostrap</h5>
									<p> Bootstrap adalah library (pustaka / kumpulan fungsi-fungsi) dari Framework CSS yang dibuat khusus untuk bagian pengembangan fontend dari suatu website. Didalam library tersebut terdapat berbagai jenis file yang diantaranya HTML, CSS, dan Javascript. Hampir semua developer website menggunakan framework bootstrap agar memudahkan dan mempercepat pembuatan website.</p>
									
								</div>
							</div>
						</div>
					</div>
				</div>


			<div class="featured-course course-item">
					<div class="course-thumb set-bg" data-setbg="img/d34.png">
						<!-- <div class="price">Price: $15</div> -->
					</div>
					<div class="row">
						<div class="col-lg-6 pr-0">
							<div class="course-info">
								<div class="course-text">
									<div class="fet-note">About GitHub</div>
									<h5>Apa yang dimaksud GitHub</h5>
									<p>GitHub adalah layanan penginangan web bersama untuk proyek pengembangan perangkat lunak yang menggunakan sistem pengontrol versi Git dan layanan hosting internet. Hal ini banyak digunakan untuk kode komputer. Ini memberikan kontrol akses dan beberapa fitur kolaborasi seperti pelacakan bug, permintaan fitur, manajemen tugas, dan wiki untuk setiap proyek.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	
	</section>
	<!-- course section end -->


	<!-- banner section -->
	<!-- <section class="banner-section spad">
		<div class="container">
			<div class="section-title mb-0 pb-2">
				<h2>Join Our Community Now!</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
			</div>
			<div class="text-center pt-5">
				<a href="#" class="site-btn">Register Now</a>
			</div>
		</div>
	</section> -->
	<!-- banner section end -->


	<!-- footer section -->
	<footer class="footer-section spad pb-0">
		<div class="footer-top">
			<div class="footer-warp">
				<div class="row">
					<div class="widget-item">
						<h4>Contact Info</h4>
						<ul class="contact-list">
							<li>IMAM BONJOL Gg.Madu<br></li>
				             <li>08994297102</li>
				             <li>mferlando33@gmail.com</li>
						</ul>
					</div>
					<div class="widget-item">
						<h4>Manfaat Engeneering</h4>
						<ul>
							<li>Membentuk financial technology</li>
							<li>Mendukung strategi bisnis yang tepat</li>
							<li>Mendukung kinerja tim yang efektif</li>
							<li> Mendukung kegiatan bisnis <br> yang otomatisasi</li>
							
						</ul>
					</div>
					<div class="widget-item">
						<h4>Graphic Design</h4>
						<ul>
							<li>Adobe Photoshop CC</li>
							<li>Adobe Illustrator CC</li>
							<li>Software Engeneering</li>
							<li>Adobe InDesign CC</li>
							<li>CorelDraw Graphics Suite 2018</li>
						</ul>
					</div>
					<div class="widget-item">
						<h4>Development</h4>
						<ul>
							<li>Applied Studies</li>
							<li>Computer Engeneering</li>
							<li>Software Engeneering</li>
							<li>Informational Engeneering</li>
							<li>System Engeneering</li>
						</ul>
					</div>
					<!-- <div class="widget-item">
						<h4>Newsletter</h4>
						<form class="footer-newslatter">
							<input type="email" placeholder="E-mail">
							<button class="site-btn">Subscribe</button>
							<p>*We don’t spam</p>
						</form>
					</div> -->
				</div>
			</div>
		</div>
		 <div class="footer-bottom">
			<div class="footer-warp">
				<!-- <ul class="footer-menu">
					<li><a href="#">Terms & Conditions</a></li>
					<li><a href="#">Register</a></li>
					<li><a href="#">Privacy</a></li>
				</ul>  -->
				<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">*_=</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
			</div>
		</div>
	</footer> 
	<!-- footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>