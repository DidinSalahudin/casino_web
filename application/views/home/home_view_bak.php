<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

	<!-- Bootstrap core CSS -->
	<link href="<?= base_url(); ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}

        .nav-item-header-top {
            color: #dfb016;
        }

        .nav-item-header-top: hover {
            color: #fff;
        }

        .header-overlay {
            position: absolute;
            z-index: 8;
            background: rgba(0,0,0,.5);
            width: 100%;
        }

        .background-image-home {
            background: #000 url('<?= base_url(); ?>assets/image/background/casino.jpg') no-repeat 50% 50%;
            background-size: cover;
            height: 548px;
            position: relative;
            border-bottom: solid #CD996E 2px;
        }

        .text-shadow {
            text-shadow: 0px 0px 20px #000000;
        }

	</style>
</head>

<body>

	<nav class="py-2 border-bottom" style="background-color: #080300;">
		<div class="container d-flex flex-wrap">
			<ul class="nav me-auto">
				<li class="nav-item"><a href="#" class="nav-link nav-item-header-top px-2 active" aria-current="page"><strong>HOME</strong></a>
				</li>
				<li class="nav-item"><a href="#" class="nav-link nav-item-header-top px-2"><strong>CARA BERMAIN</strong></a></li>
				<li class="nav-item"><a href="#" class="nav-link nav-item-header-top px-2"><strong>VERIFIKASI AKUN</strong></a></li>
			</ul>
			<ul class="nav">
				<li class="nav-item"><a href="#" class="nav-link nav-item-header-top px-2"><strong>HELP</strong></a></li>
			</ul>
		</div>
	</nav>
	<header class="pt-3 header-overlay">
		<div class="container d-flex flex-wrap justify-content-end">
			<form class="row g-3">
				<div class="col-auto">
					<input type="text" class="form-control" id="username" placeholder="Username">
				</div>
				<div class="col-auto">
					<input type="password" class="form-control" id="password" placeholder="Password">
				</div>
				<div class="col-auto">
					<button type="submit" class="btn btn-primary mb-3">LOGIN</button>
				</div>
			</form>
		</div>
	</header>

	<main>

		<section class="py-5 text-center container-fluid bg-dark background-image-home">
			<div class="row h-100">
				<div class="align-self-center col-lg-6 col-md-8" style="margin-left: auto!important;">
					<p class="text-light mb-0 text-shadow" style="font-size: 30px;">WELCOME TO</p>
					<p class="mb-0 font-weight-bold text-shadow" style="font-size: 50px; color: #dfb016;"><strong>EXCLUSIVE VIP</strong></p>
					<p class="text-light mb-0 text-shadow" style="font-size: 30px;">GAMING SERVICE CLUB</p>
				</div>
			</div>
		</section>
        
		<section class="pt-5 pb-5 container">

            <div class="row mb-4 text-center">
                <h2>VIPCLUB88 NETWORK GAMES</h2>
            </div>

			<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3 text-center">
				<div class="col">
					<div class="card shadow-sm">
						<div class="card-body">
							<p class="card-text">CASINO</p>							
						</div>
					</div>
				</div>
                <div class="col">
					<div class="card shadow-sm">
						<div class="card-body">
							<p class="card-text">SPORT GAMING</p>							
						</div>
					</div>
				</div>
                <div class="col">
					<div class="card shadow-sm">
						<div class="card-body">
							<p class="card-text">LOTTERY</p>							
						</div>
					</div>
				</div>
                <div class="col">
					<div class="card shadow-sm">
						<div class="card-body">
							<p class="card-text">POKER</p>							
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- FOOTER -->
		<footer class="py-3 my-4 bg-dark">
            <p class="text-center text-muted">Memberikan layanan VIP dalam bermain online Games.</p>
            <p class="text-center text-muted">&copy; 2021 Company, Inc</p>
        </footer>
	</main>


	<script src="<?= base_url(); ?>assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
