<!DOCTYPE html>
<html lang="en">
	<?php require "components/header.php"; ?>
	<body class="bg-white text-dark">
		<?php require "components/navbarView.php"; ?>
		<br/>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-3 mb-4">
					<div class="card bg-light text-dark shadow">
						<div class="card-header text-center"><h5>Filter Attendance</h5></div>
						<div class="card-body">
							<form>
								<div class="mb-3">
									<label for="userName" class="form-label">Select User</label>
									<select class="form-select bg-white text-dark" aria-label="Default select example">
										<option value="*" selected>All Users</option>
										<option value="1">One</option>
										<option value="2">Two</option>
										<option value="3">Three</option>
									</select>
								</div>
								<div class="mb-3">
									<label for="cardID" class="form-label">Date From</label>
									<input type="date" class="form-control bg-white text-dark" id="cardID">
								</div>
								<div class="mb-3">
									<label for="cardID" class="form-label">Date To</label>
									<input type="date" class="form-control bg-white text-dark" id="cardID">
								</div>
								<div class="mb-3">
									<label for="cardID" class="form-label">Time In</label>
									<input type="time" class="form-control bg-white text-dark" id="cardID">
								</div>
								<div class="mb-3">
									<label for="cardID" class="form-label">Time Out</label>
									<input type="time" class="form-control bg-white text-dark" id="cardID">
								</div>
								<div class="d-grid gap-2">
									<button type="submit" class="btn btn-primary btn-sm">Filter</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-9 mb-4">
					<div class="card text-center bg-light shadow">
						<div class="card-header"><h5>Attendance Book</h5></div>
						<div class="container-fluid">
							<div class="card-body table-responsive">
								<table class="table table-bordered table-sm bg-light text-dark align-middle text-nowrap">
									<thead class="align-middle">
										<tr>
											<th scope="col">#</th>
											<th scope="col">USER NAME</th>
											<th scope="col">CARD ID</th>
											<th scope="col">ABOUT USER</th>
											<th scope="col">DATE</th>
											<th scope="col">TIME IN</th>
											<th scope="col">TIME OUT</th>
										</tr>
									</thead>
									<tbody id="attendanceBookTable">
										<!-- <tr>
											<td>1</td>
											<td>Numan Naseer</td>
											<td>A3481CC</td>
											<td>Software Engineer</td>
											<td>19-4-2022</td>
											<td>10:15:00</td>
											<td>19:00:15</td>
										</tr> -->
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
<script>
	// function plotAttendanceTable(srNumber, userName, cardId, aboutUser, date, timeIn, timeOut)
	// {
	// 	let tableRef = document.getElementById("attendanceBookTable");
  	// 	let row = tableRef.insertRow(-1);
	// 	row.insertCell(0).innerHTML = srNumber;
	// 	row.insertCell(1).innerHTML = userName;
	// 	row.insertCell(2).innerHTML = cardId;
	// 	row.insertCell(3).innerHTML = aboutUser;
	// 	row.insertCell(4).innerHTML = date;
	// 	row.insertCell(5).innerHTML = timeIn;
	// 	row.insertCell(5).innerHTML = timeOut;
	// }

	// fetch('https://jsonplaceholder.typicode.com/users')
	// .then((response) => response.json())
	// .then((json) =>
	// {
	// 	// console.log(json);
	// 	for (let i = 0; i < json.length; i++)
	// 	{
	// 		plotAttendanceTable(json[i].id, json[i].name, json[i].phone, json[i].website, "19-4-2022", "10:15:00", "19:00:15");
	// 	}
	// });
</script>
<script>
	function plotAttendanceTable(config)
	{
		// let tableRef = document.getElementById("attendanceBookTable");
  		let row = document.getElementById("attendanceBookTable").insertRow(-1);
		row.insertCell(0).innerHTML = config.srNumber;
		row.insertCell(1).innerHTML = config.userName;
		row.insertCell(2).innerHTML = config.cardId;
		row.insertCell(3).innerHTML = config.aboutUser;
		row.insertCell(4).innerHTML = config.date;
		row.insertCell(5).innerHTML = config.timeIn;
		row.insertCell(5).innerHTML = config.timeOut;
	}
	
	fetch('https://jsonplaceholder.typicode.com/users')
	.then((response) => response.json())
	.then((respondedJsonData) =>
	{
		for (let i = 0; i < respondedJsonData.length; i++)
		{
			let dataConfig =
			{
				srNumber 	: respondedJsonData[i].id,
				userName 	: respondedJsonData[i].name,
				cardId 		: respondedJsonData[i].phone,
				aboutUser 	: respondedJsonData[i].website,
				date 		: "19-4-2022",
				timeIn 		: "10:15:00",
				timeOut 	: "19:00:15"
			};
			
			plotAttendanceTable(dataConfig);
		}
	});
</script>