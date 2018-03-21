<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Users list</h1>
			
			<ol class="breadcrumb">
				<li><a href="#">admin</a></li>
				<li class="active">/ users</li>
			</ol>
		</div>
		<div class="btn-group" role="group">
			<div class="col-md-12">
				<a class="btn btn-primary" href="<?= APP_HOST."/users/add" ?>">
					<i class="fa fa-plus"></i> Add new user
				</a>
			</div>
		</div>
		
		<hr>
		
		<div class="col-md-12">
			<table class="table table-striped margin-top">
				<thead>
					<tr>
						<td><b>User name</b></td>
						<td><b>Email</b></td>
						<td><b>Created at</b></td>
						<td><b>Updated at</b></td>
						<td><b>Access level</b></td>
						<td><b>Actions</b></td>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($users as $user) : ?>
					<tr>
						<td><?= $user->get_name() ?></td>
						<td><?= $user->get_email() ?></td>
						<td><?= $user->get_created() ?></td>
						<td><?= $user->get_updated() ?></td>
						<td><?= $user->get_access_level() ?></td>
						<td class="text-nowrap">
							<a class="btn btn-default" href="" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil text-default"></i></a>
							<a class="btn btn-danger" href="" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-close text-default"></i></a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>