<?php include '../config.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Attendance</title>
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>//Assests/style.css">
  <link rel="icon" href="../Assests/Images/Favicon.png">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.min.js"></script>
</head>
<body>
  <header>
  <?php include '../Includes/header.php' ?>
	</header>
	<p id="month"></p>
	<table class="attendanceTable">
		<thead>
			<tr>
				<th>Date</th>
				<th>Employee Name</th>
				<th>Check-in Time</th>
				<th>Check-out Time</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody id="table-body">
		</tbody>
	</table>
	<div id="modal" class="modal">
		<div class="modal-content">
		  <table id="employee-details">
			<tr>
			  <td id="name-cell"></td>
			</tr>
			<tr>
				<td id="date-cell"></td>
			  </tr>
			<tr>
				<td id="month-cell"></td>
			  </tr>
			 
			<tr>
			  <td id="checkin-cell"></td>
			</tr>
			<tr>
			  <td id="checkout-cell"></td>
			</tr>
			
		  </table>
		</div>
	  </div>
	  
	<script src="../Assests/script.js">
	</script>
</body>
<?php include '../Includes/footer.php' ?>

</html>