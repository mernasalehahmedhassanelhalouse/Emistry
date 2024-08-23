<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
<body>
<?php include 'components/user_header.php'; ?>
		
		<div class="col-md-2"></div>
		<div class="col-md-6">
			<form method="POST" action="">
				<div class="form-group">
					<label>Use  code here</label>
					<input type="text" class="form-control" name="coupon"required="required"/>
				</div>
				<center><button class="btn btn-primary" name="use">Use Code</button></center>
		
       
			</form>
			<br />
			<?php include"use2.php"?>
		</div>
	</div>
	<script src="js/script.js"></script>
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

</body>
</html>