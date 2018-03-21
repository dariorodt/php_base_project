<div class="container">
	<div class="row">
		<div class="col-md-12 text-center logo-box">
			<a href="<?= APP_HOST ?>/home"><img src="<?= APP_HOST ?>/img/logo.png" alt="Logo"></a>
		</div>
	</div>
	<div class="row">
		<div class="login-box">
			<h1 class="text-center">Login de Usuarios</h1>

			<form action="<?= APP_HOST ?>/login/create" method="post" >
				
				<div class="form-group">
					<label class="control-label" for="username">Nombre Usuario:</label>
					<input class="form-control" name="username" type="text" id="username" required>
				</div>
				<div class="form-group">
					<label class="control-label" for="email">Correo electrónico:</label>
					<input class="form-control" name="email" type="e-mail" id="email" required>
				</div>
				<div class="form-group">
					<label class="control-label" for="password">Password:</label>
					<input class="form-control" name="password" type="password" id="password" required>
				</div>
				<div class="form-group">
					<input class="form-control btn btn-primary" type="submit" name="Submit" value="SIGNUP">
				</div>

			</form>
	</div>
</div>