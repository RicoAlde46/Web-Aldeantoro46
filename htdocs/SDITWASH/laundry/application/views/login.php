<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title['header'] ?></title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Punyaku -->
	<link rel="stylesheet" href="assets/punyaku/css/login.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

	<link rel="shortcut icon" href="<?= base_url('assets/punyaku/Image/Avatar.png'); ?>">
</head>

<body class="hold-transition login-page">
	<div class="data-flush" data-flash="<?= $this->session->flashdata('pesan'); ?>"></div>
	<div class="login-box p-4 bg-light rounded-4">
		<div class="login-logo">
			<h3 class="brand">Login</h3>
		</div>
		<!-- /.login-logo -->

		<form action="<?= base_url(); ?>authorization/login" method="post">
			<div class="input-group mb-3">
				<input type="text" class="form-control" name="username" placeholder="Username">

			</div>
			<div class="input-group mb-3">
				<input type="password" class="form-control" name="password" placeholder="Password">

			</div>
			<div class="d-flex justify-content-center flex-column">
				<div class="d-flex justify-content-center align-items-center">
					<button type="submit" class="btn btn-login" style="margin-top: 0 !important ;">Login</button>
				</div>
				<div>
					Anda belum punya akun?
					<a href="<?= base_url() ?>index.php/authorization/registrasi" type="submit" class="text-danger">Register</a>
				</div>

				<!-- /.col -->
			</div>
		</form>

		<!-- /.login-card-body -->

	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url(); ?>assets/dist/js/adminlte.min.js"></script>
	<script src="<?= base_url(); ?>assets/node_modules/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript">
		$(function() {
			$(document).ready(function() {
				var data = $('.data-flush').data('flash');
				console.log(data);
				if (data) {
					var a = data.split(',');
					if (a[1].replace(/\s/g, '') == 'success') {
						swal("Information!", a[0], "success");
					} else {
						swal("Information!", a[0], "error");
					}
				}
			})
		})
	</script>

	<body class="hold-transition login-page" style="background:url(assets/punyaku/Image/login-bg.png)
no-repeat center center fixed; background-size: cover;
 -webkit-background-size: cover; 
 -moz-background-size: cover; -o-background-size: cover;">
	</body>

</html>
