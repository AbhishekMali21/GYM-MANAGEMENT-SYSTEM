<?php
require('db.php');


$inf=$_GET['id'];


$sql_member="DELETE FROM member WHERE trainer_id=(select trainer_id from trainer where pay_id=(select pay_id from payment where pay_id='$inf'))";
$sql_query_mem=mysqli_query($conn,$sql_member);


if ($sql_query_mem) {
$sql_trainer="DELETE FROM trainer WHERE pay_id=(select pay_id from payment where pay_id='$inf' )";
	$sql_query_trainer=mysqli_query($conn,$sql_trainer);
}else
{
	echo "Not delet";
}

	

	if ($sql_query_trainer) {


	$sql_query="DELETE FROM payment WHERE pay_id='$inf'";
	$delete=mysqli_query($conn,$sql_query);
	if ($delete) {
		header("location:home.php?info=manage_payment");
	}else{
		echo "error".mysqli_error($conn);
	}
	
	}else{
		echo "Not deleted".mysqli_error($conn);
	}



	
?>