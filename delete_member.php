<?php
require('db.php');


$inf=$_GET['id'];

	
	
	$sql_query="DELETE FROM member WHERE mem_id='$inf'";
	$delete=mysqli_query($conn,$sql_query);
	if ($delete) {
		header("location:home.php?info=manage_member");
	}else{
		echo "error".mysqli_error($conn);
	}
	
?>