<?php
require('db.php');


$id="";



if (isset($_POST['id'])) {
	echo "<div class='container'>";
	echo "<table class='table table-bordered  table-hover mt-3'>";
	echo "<tr>";
	echo "<th>Pay_Id</th>";
	echo "<th>Amount</th>";
	echo "<th>Update</th>";
	echo "<th>Delete</th>";
	echo "</tr>";
	echo "</div>";


	$id=$_POST['id'];


		$que=mysqli_query($conn,"SELECT * FROM `payment` WHERE CONCAT(`pay_id`,`amount`) LIKE '%".$id."%'");
		if(mysqli_num_rows($que) > 0){
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$row['pay_id']."</td>";
		echo "<td>".$row['amount']."</td>";
		echo "<td><a href='home.php?id=$row[pay_id]&info=update_payment'><i class='fas fa-pencil-alt'></i></a></td>";
		echo  "<td><a href='home.php?id=$row[pay_id]&info=delete_payment'><i class='fas fa-trash-alt'></i></a></td>";

	}
}else{
	echo "<div class='alert alert-warning'><b>0 result</b></div>";
}
	
}




	
?>
