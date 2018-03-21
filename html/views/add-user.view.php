<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Add new user</h1>
			
			<ol class="breadcrumb">
				<li><a href="#">admin </a></li>
				<li><a href="<?= APP_HOST ?>/users">/ users </a></li>
				<li class="active">/ add </li>
			</ol>
		</div>
	</div>
	<form class="form" action="<?= APP_HOST ?>/users/create" method="POST">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="control-label" for="username">User name:</label>
					<input type="text" name="username" class="form-control" placeholder="Nickname">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label class="control-label" for="email">E-Mail:</label>
					<input type="e-mail" name="email" class="form-control" placeholder="yourmail@example.com">
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="control-label" for="password">Password</label>
					<input type="password" name="password" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label class="control-label" for="access_level">Access level:</label>
					<select class="form-control" name="access_level">
						<option selected disabled>Select level</option>
						<option value="11">User</option>
						<option value="12">Operator</option>
						<option value="21">Administrator</option>
					</select>
				</div>
			</div>
		</div>
		
		<hr>
		
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="control-label" for="name">Name (complete):</label>
					<input type="text" name="name" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label class="control-label" for="phone">Personal phone:</label>
					<input type="text" name="phone" class="form-control">
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label class="control-label" for="address">Address:</label>
					<input type="text" name="address" class="form-control">
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="control-label" for="birth">Birth date:</label>
					<input type="date" name="birth" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label class="control-label" for="genere">Genere:</label><br>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="customRadioInline1" name="genere" class="custom-control-input">
						<label class="custom-control-label" for="customRadioInline1">Male</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="customRadioInline2" name="genere" class="custom-control-input">
						<label class="custom-control-label" for="customRadioInline2">Female</label>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="control-label" for="photo">Photo:</label>
					<input type="file" name="photo" class="form-control">
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Submit form">
				</div>
			</div>
		</div>
	</form>
</div>