<?php

include '../components/connect.php';

if(isset($_COOKIE['tutor_id'])){
   $tutor_id = $_COOKIE['tutor_id'];
}else{
   $tutor_id = '';
   header('location:login.php');
}
?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
		<link rel="stylesheet" href="../css/grades.css">
		<link rel="stylesheet" href="../css/admin_style.css">
	</head>
<body>
<?php include '../components/admin_header.php'; ?>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		
		<div class="col-md-4">
			<form method="POST" action="submit.php">
				<div class="form-group">
					<label>Get coupon here</label>
					<input type="text" class="form-control" name="coupon" id="coupon" required="required" readonly="readonly"/>
				</div>
				<center><button type="button" class="btn btn-primary" id="generate">Get code</button>
				<br /><br />
				<button class="btn btn-success" name="submit" style="display:none;" id="submit">Submit</button></center>
			</form>
		</div>
	
	</div>
	<br>
		<br>
		<br>
		<br>
		<br>
		<br><br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#generate').on('click', function(){
			$.get("generate.php", function(data){
				$('#coupon').val(data);
			});
			$(this).attr("disabled", "disabled");
			$('#submit').show();
		});
	});
	</script>	
	<?php include '../components/footer.php'; ?>

<script src="../js/admin_script.js"></script>

</body>
</html>