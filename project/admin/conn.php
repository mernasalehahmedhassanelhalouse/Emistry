<?php
	$conn=mysqli_connect("localhost", "root", "", "course_db");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>