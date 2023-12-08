<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?= $judul; ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicon -->
	<link href=" <?= base_url('assets/restoran/'); ?> img/favicon.ico" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
		rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="<?= base_url('assets/restoran/'); ?>lib/animate/animate.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/restoran/'); ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/restoran/'); ?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
		rel="stylesheet" />

	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= base_url('assets/restoran/'); ?>css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="<?= base_url('assets/restoran/'); ?>css/style.css" rel="stylesheet">
</head>

<body>
	<div class="container-xxl bg-white p-0">


		<!-- Navbar & Hero Start -->
		<div class="container-xxl position-relative p-0">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
				<a href="" class="navbar-brand p-0">
					<h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i><?= $konfig->judul_website; ?></h1>
					<!-- <img src="img/logo.png" alt="Logo"> -->
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
					<span class="fa fa-bars"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<div class="navbar-nav ms-auto py-0 pe-4">
						<a href="<?= base_url() ?>" class="nav-item nav-link active">Home</a>
						<?php foreach ($kategori as $kate){?>
						<a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"
							class="nav-item nav-link active"><?= $kate['nama_kategori'] ?></a>
						<?php } ?>
					</div>
					<a href="<?= base_url('auth') ?>" class="btn btn-primary py-2 px-4 active">login</a>
				</div>
			</nav>
			
			<div class="container-xxl py-5 bg-dark hero-header mb-5">
				<div class="container my-5 py-5">
					<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-inner">
							<center>
								<?php $no=1; foreach ($caraousel as $aa){ ?>
								<div class="carousel-item <?php if($no==1){ echo 'active' ;} ?>">
								<img src="<?= base_url('assets/upload/caraousel/'.$aa['foto']) ?>"
									style="margin-left: width: 25%; height: 25%; border-radius:50%; ;" class=" d-block w-50">
								</div>
								<?php $no++; } ?>
							</center>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
								data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
								data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Navbar & Hero End -->


			<!-- Team Start -->

			<!-- Team End -->


			<!-- Testimonial Start -->
			<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
				<div class="container">
					<div class="text-center">
						<h5 class="section-title ff-secondary text-center text-primary fw-normal">Selamat datang di web
							saya</h5>
						<h1 class="mb-5">Konten</h1>
					</div>
					<div class="row">
						<?php 
						
						foreach ($konten as $uu){ ?>
						<div class="testimonial-item bg-transparent border rounded p-4">
							<i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
							<div class="d-flex align-items-center">
								<img class="img-fluid flex-shrink-0"
									src="<?= base_url('assets/upload/konten/'.$uu['foto']) ?>"
									style="width: 150px; height: 150px;">
								<div class="ps-3">
									<h5 class="mb-1"><?= $uu['judul'] ?></h5>
									<small><?= $uu['nama'] ?></small>
								</div>
							</div>
							<div class="mt-3 btn btn-sm btn-secondary col">
								<a href="<?= base_url('home/artikel/'.$uu['slug']) ?>">Baca Selengkapnya</a>
							</div>
							<div class="row">
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Testimonial End -->


		<!-- Footer Start -->
		<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
			<div class="container py-5">
				<div class="row g-5">
					<div class="col-lg-3 col-md-6">
						<h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4"><?= $konfig->judul_website; ?></h4>
						<a class="btn btn-link" href="<?= base_url() ?>">home</a>
						<?php foreach ($kategori as $kate){?>
						<a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"
							class="nav-item nav-link"><?= $kate['nama_kategori'] ?></a>
						<?php } ?>
					</div>
					<div class="col-lg-3 col-md-6">
						<h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
						<p class="mb-2"><i class="fa fa-map-marker-alt me-3"><?= $konfig->alamat; ?></i></p>
						<p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+<?= $konfig->no_wa; ?></p>
						<p class="mb-2"><i class="fa fa-envelope me-3"></i><?= $konfig->email; ?></p>
						<div class="d-flex pt-2">
							<!-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a> -->
							<a class="btn btn-outline-light btn-social" href="<?= $konfig->facebook; ?>"><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-outline-light btn-social" href="<?= $konfig->instagram; ?>"><i class="fab fa-instagram-f"></i></a>
							<!-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a> -->
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
						<h5 class="text-light fw-normal">Senin - Sabtu</h5>
						<p>09.00 - 21.00</p>
						<h5 class="text-light fw-normal">Minggu</h5>
						<p>10.00 - 20.00</p>
					</div>
					<div class="col-lg-3 col-md-6">
						<h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Farrel
						</h4>
						<p><?= $konfig->profil_website; ?>.</p>
						<div class="position-relative mx-auto" style="max-width: 400px;">
							
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="copyright">
					<div class="row">
						<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
							&copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
							Distributed By <a class="border-bottom" href="https://themewagon.com"
								target="_blank">ThemeWagon</a>
						</div>
						<div class="col-md-6 text-center text-md-end">
							<div class="footer-menu">
								<a href="">Home</a>
								<a href="">Cookies</a>
								<a href="">Help</a>
								<a href="">FQAs</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer End -->


		<!-- Back to Top -->
		<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
	</div>

	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/restoran/'); ?>lib/wow/wow.min.js"></script>
	<script src="<?= base_url('assets/restoran/'); ?>lib/easing/easing.min.js"></script>
	<script src="<?= base_url('assets/restoran/'); ?>lib/waypoints/waypoints.min.js"></script>
	<script src="<?= base_url('assets/restoran/'); ?>lib/counterup/counterup.min.js"></script>
	<script src="<?= base_url('assets/restoran/'); ?>lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/restoran/'); ?>lib/tempusdominus/js/moment.min.js"></script>
	<script src="<?= base_url('assets/restoran/'); ?>lib/tempusdominus/js/moment-timezone.min.js"></script>
	<script src="<?= base_url('assets/restoran/'); ?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js">
	</script>

	<!-- Template Javascript -->
	<script src="<?= base_url('assets/restoran/'); ?>js/main.js"></script>
</body>

</html>
