<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Bell Prox - Login</title>
	<!-- LOGOTIPO -->
	<link rel="shortcut icon" href="../img/logo.png" />
	<!-- MEU CSS -->
	<link rel="stylesheet" type="text/css" href="login.css">
	<!-- JQUERY -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
</head>

<body>
	<html>

	<body>
		<br>
		<img id="imagem" src="../img/logo.png" style="margin-top: 2%; width: 165px;" alt="Erro ao carregar imagem">
		<h1>BELL PROX </h1>
		<div class="container" id="container">
			<div class="form-container sign-up-container">
				<form action="verificar-registro.php" method="POST" autocomplete="off">
					<!--FORM REGISTRO-->
					<h1>Registre-se</h1>
					<span>Preencha as informações abaixo para se registrar.</span>
					<input type="text" name="username" placeholder="Nome" required>
					<input type="password" name="password" placeholder="Senha" required>
					<input type="email" name="email" id="emailCadastro" placeholder="Email" required>
					<input type="text" name="cellphone" id="cellphone" placeholder="Celular exemplo: (xx)xxxx-xxxxx" required>
					<br>
					<!--RADIO BUTTON INICIO-->
					<div class="grid-container">
						<form method="POST" autocomplete="off">
							<!-- POST APENAS PARA OS RADIOS BUTTONS -->
							<div class="button-group round toggle">
								<input type="radio" id="r1" value="1" name="radiobutton" checked>
								<label class="button" for="r1">Cliente</label>
								<input type="radio" value="2" id="r2" name="radiobutton">
								<label class="button" for="r2">Profissional</label>
							</div>
							<br>
							<!--RADIO BUTTON FIM-->
							<button class="btn-registrar"><b>Registrar-se</b></button>
						</form>
					</div>
				</form>
			</div>
			<div class="form-container sign-in-container">
				<form action="verificar-login.php" method="POST" autocomplete="off">
					<!--FORM LOGIN-->
					<h1>Log in</h1>
					<div class="grid-container">
						<span>Preencha as informações abaixo para<br><b>Fazer Login.</b></span>
						<input type="text" name="login" placeholder="Email ou Celular" required>
						<input type="password" name="senha" placeholder="Senha" required>
						<br><br>
						<!-- RADIO BUTTON-->
						<!-- POST APENAS PARA OS RADIOS BUTTONS -->
						<div class="grid-container">
							<div class="button-group round toggle">
								<input type="radio" id="r3" value="3" name="radiobutton2" checked>
								<label class="button" for="r3">Cliente</label>
								<input type="radio" id="r4" value="4" name="radiobutton2">
								<label class="button" for="r4">Profissional</label>
							</div>
							<br>
						</div>
					</div>
					<!-- RADIO BUTTON-->
					<button class="btn-registrar">Login</button>
					<a href="esqueceu-senha.php">Esqueceu a sua senha?</a>
					<a href="#" id="signUp2" class="ContaGratuita">Crie uma conta gratuitamente</a>
				</form>
			</div>
			<div class="overlay-container">
				<div class="overlay">
					<div class="overlay-panel overlay-left">
						<h1>Espere! </h1>
						<p>Você já possui uma conta? Caso possua clique em <b>já possuo uma conta.</b></p>
						<button class="ghost" id="signIn">Já passuo uma conta</button>
					</div>
					<div class="overlay-panel overlay-right">
						<h1>Não consegue fazer login?</h1>
						<p>Caso você não possua uma conta, clique em <b>Fazer Registro.</b></p>

						<button class="ghost" id="signUp">Fazer Registro</button>
					</div>
				</div>
			</div>
		</div>
		<br><br>

	</body>
	<script src="login.js"></script>

	</html>