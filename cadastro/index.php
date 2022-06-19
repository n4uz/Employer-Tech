<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Employer Tech</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<meta name="robots" content="noindex, follow">
	<script nonce="5ebd5bc5-55af-4292-bc77-0a5da1d9ad53">
		(function(w, d) {
			! function(a, e, t, r) {
				a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zaraz = {
					deferred: []
				}, a.zaraz.q = [], a.zaraz._f = function(e) {
					return function() {
						var t = Array.prototype.slice.call(arguments);
						a.zaraz.q.push({
							m: e,
							a: t
						})
					}
				};
				for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
				a.addEventListener("DOMContentLoaded", (() => {
					var t = e.getElementsByTagName(r)[0],
						z = e.createElement(r),
						n = e.getElementsByTagName("title")[0];
					for (n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), a.zarazData.q = []; a.zaraz.q.length;) {
						const e = a.zaraz.q.shift();
						a.zarazData.q.push(e)
					}
					z.defer = !0, z.referrerPolicy = "origin", z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t)
				}))
			}(w, d, 0, "script");
		})(window, document);
	</script>
</head>

<?php
	if(isset($_SESSION['msg']))
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
?>

<body style="background-color: #999999;">
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>
			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="POST" action="processa.php">
					<span class="login100-form-title p-b-59">
						Cadastro
					</span>
					<div class="wrap-input100 validate-input" data-validate="Nome é necessário">
						<span class="label-input100">Nome completo</span>
						<input class="input100" type="text" name="nome" placeholder="Nome...">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Email válido é necessário: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Endereço de email...">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="CPF é necessário">
						<span class="label-input100">CPF</span>
						<input class="input100" type="text" name="cpf" placeholder="000.000.000-00">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Senha é necessário">
						<span class="label-input100">Senha</span>
						<input class="input100" type="text" name="senha" placeholder="*************">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="É necessário repetir a senha">
						<span class="label-input100">Localidade</span>
						<input class="input100" type="text" name="localidade" placeholder="local">
						<span class="focus-input100"></span>
					</div>
					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="form-check-input" id="flexCheckChecked" type="checkbox" name="remember-me">
							<label class="form-check-label" for="flexCheckChecked">
								<span class="txt1">
									Eu concordo com os
									<a href="#" class="txt2 hov1">
										Termos de uso
									</a>
								</span>
							</label>
						</div>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Cadastrar-se
							</button>
						</div>
						<a href="/employer-tech/login/index.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Entrar
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
					<div>
					<a href="/employer-tech/" class="tt"> 
							Voltar
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="js/main.js"></script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"7061cf11cfb56f89","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>

</html>