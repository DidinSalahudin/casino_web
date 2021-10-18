<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

	<!-- Bootstrap core CSS -->
	<link href="<?= base_url(); ?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Style Home -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/style/css/style.css">
</head>

<body>

	<!-- Navbar -->
	<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-transparant pt-4 pb-4">
		<div class="container d-flex align-items-center justify-content-between">
			<a class="navbar-brand me-5" href="#">App Name</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item me-3">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item me-3">
						<a class="nav-link" href="#">Cara Bermain</a>
					</li>
                    <li class="nav-item me-3">
						<a class="nav-link" href="#">Verifikasi Akun</a>
					</li>
                    <li class="nav-item me-3">
						<a class="nav-link" href="#">Help</a>
					</li>
				</ul>
				<div class="d-flex">
					<button class="btn btn-outline-success" type="submit">Login</button>
				</div>
			</div>
		</div>
	</nav> -->
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between pb-4 pt-4">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-light text-decoration-none">
                Name App
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li class=""><a href="#" class="nav-link active" style="color: #8E8EA9;">Home</a></li>
                <li class=""><a href="#" class="nav-link" style="color: #8E8EA9;">Features</a></li>
                <li class=""><a href="#" class="nav-link" style="color: #8E8EA9;">Pricing</a></li>
                <li class=""><a href="#" class="nav-link" style="color: #8E8EA9;">FAQs</a></li>
                <li class=""><a href="#" class="nav-link" style="color: #8E8EA9;">About</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2">Login</button>
            </div>
        </header>
    </div>
    <!-- End Navbar -->
    
    <main>
        <!-- Hero -->
        <section id="hero">
            <div class="container-fluid" id="bg-hero"></div>
        </section>
        <!-- End Hero -->

        <!-- Content App -->
        <section id="cta">
            <div class="container-fluid mt-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <h1 class="text-center heading-cta mt-5 mb-5">Title Heading Play Games</h1>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col m-3 p-3">
                            <div class="card">
                                <div class="card-body card-cta">
                                    <div class="row">
                                        <div class="col text-center">
                                            <h3>Casino</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-center">
                                            <img src="<?= base_url(); ?>assets/images/icon/casino_spin.png" width="100%" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col m-3 p-3">
                            <div class="card">
                                <div class="card-body card-cta">
                                    <div class="row">
                                        <div class="col text-center">
                                            <h3>Casino</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-center">
                                            <img src="<?= base_url(); ?>assets/images/icon/casino_spin.png" width="100%" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col m-3 p-3">
                            <div class="card">
                                <div class="card-body card-cta">
                                    <div class="row">
                                        <div class="col text-center">
                                            <h3>Casino</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-center">
                                            <img src="<?= base_url(); ?>assets/images/icon/casino_spin.png" width="100%" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col m-3 p-3">
                            <div class="card">
                                <div class="card-body card-cta">
                                    <div class="row">
                                        <div class="col text-center">
                                            <h3>Casino</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-center">
                                            <img src="<?= base_url(); ?>assets/images/icon/casino_spin.png" width="100%" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Content App -->
    </main>
	<script src="<?= base_url(); ?>assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
