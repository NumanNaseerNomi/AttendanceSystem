<!DOCTYPE html>
<html lang="en">
	<?php require "components/header.php"; ?>
	<body class="bg-white text-dark">
		<?php require "components/navbarView.php"; ?>
		<br/>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 mb-4">
					<div class="card bg-light text-dark shadow">
						<div class="card-header text-center"><h5>Add New User</h5></div>
						<div class="card-body">
							<form>
								<div class="mb-3">
									<label for="userName" class="form-label">User Name</label>
									<input type="text" class="form-control bg-white text-dark" id="userName">
								</div>
								<div class="mb-3">
									<label for="cardID" class="form-label">Card ID</label>
									<input type="text" class="form-control bg-light text-dark" id="cardID" disabled>
									<div id="emailHelp" class="form-text">Scan new RFID card to get Card ID.</div>
								</div>
								<div class="mb-3">
									<label for="aboutUser" class="form-label">About User</label>
									<input type="text" class="form-control bg-white text-dark" id="aboutUser">
								</div>
								<div class="d-grid gap-2">
									<button type="submit" class="btn btn-primary btn-sm">Save</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-8 mb-4">
					<div class="card text-center bg-light shadow">
						<div class="card-header"><h5>Manage Users</h5></div>
						<div class="container-fluid">
							<div class="card-body table-responsive">
								<table class="table table-bordered bg-light text-dark align-middle text-nowrap">
									<thead class="align-middle">
										<tr>
											<th scope="col">#</th>
											<th scope="col">USER NAME</th>
											<th scope="col">CARD ID</th>
											<th scope="col">ABOUT USER</th>
											<th scope="col">MANAGE USER</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Numan Naseer</td>
											<td>A3481CC</td>
											<td>Software Engineer</td>
											<td>
												<button type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
												<button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
											</td>
										</tr>
									</tbody>
								</table>
							</dav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require "components/footer.php"; ?>
	</body>
</html>
