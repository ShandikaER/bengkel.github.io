<!doctype html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?= base_url('assets/auth/') ?>css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(<?= base_url('assets/auth/') ?>images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Gilang Service</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">Have an account?</h3>
						<?= $this->session->flashdata('message'); ?>
						<form class="user" method="post" action="<?= base_url('auth'); ?>" class="signin-form">
							<div class="form-group">
								<input type="text" class="form-control form-control-user" value="<?= set_value('email'); ?>" id="email" name="email" placeholder="Masukkan Alamat Email">
								<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<input type="password" class="form-control form-control-user" value="<?= set_value('nama'); ?>" name="password" id="password" placeholder="Password">
								<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
							</div>
						</form>
						<!-- <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
						<div class="social d-flex text-center">
							<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
							<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?= base_url('assets/auth/') ?>js/jquery.min.js"></script>
	<script src="<?= base_url('assets/auth/') ?>js/popper.js"></script>
	<script src="<?= base_url('assets/auth/') ?>js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/auth/') ?>js/main.js"></script>

</body>

</html>